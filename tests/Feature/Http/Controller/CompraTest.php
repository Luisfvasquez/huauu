<?php

namespace Tests\Feature\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompraTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Compra(): void
    {
        //Preparacion
        $response = $this->get('/');
        //Ejecucion

        //assert
        $response->assertStatus(200);
    }
}
