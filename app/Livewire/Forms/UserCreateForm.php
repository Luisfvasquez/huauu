<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserCreateForm extends Form
{
    public $cedula;

    public $name;

    public $email;

    public $password;

    public $password_confirmation;
    public $phone_number;

    public $role_id = 2;

    public function save(){
        $this->validate([
            'cedula' => 'required|unique:users,cedula',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'phone_number' => 'required',
        ]);

        User::create($this->only('cedula', 'name', 'email', 'password', 'phone_number', 'role_id'));

        $this->reset(); // Resetear el formulario después de crear el usuario

    }
    
}
