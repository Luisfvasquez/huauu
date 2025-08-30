<?php

namespace Tests\Feature\Http\controllers;

use App\Http\Controllers\SesionController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_login_view(): void
    {
        $response = $this->get(action([SesionController::class, 'login']));

        $response->assertStatus(200);

        $response->assertViewIs('login');
    }

    public function test_login(): void {
        //Preparacion del test

        //Ejecutar el login
        $response = $this->post(action([SesionController::class, 'login']), [
            'cedula' => '29873955',
            'password' => '12345678',
        ]);

        //Asserions
        $response->assert('admin.principal');

        $this->assertAuthenticated();
    }
    public function test_fail(): void {
        //Preparacion del test

        //Ejecutar el login
        $response = $this->post(action([SesionController::class, 'login']), [
            'cedula' => '2987395',
            'password' => '1234568',
        ]);

        //Asserions
        $response->assertRedirect(action([SesionController::class, 'showLogin']))->assertSessionHasErrors();

    }



}

