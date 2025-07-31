<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserEditForm extends Form
{
    public $cedula;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $phone_number;
    public $role_id = 2;

    public function show($id)
    {

        $user = User::findOrFail($id);

        $this->cedula = $user->cedula;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
        $this->role_id = $user->role_id;
    }

    public function update()
    {
        $id = $this->cedula;

        $this->validate([
            'cedula' => 'required|unique:users,cedula,' . $id ,
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'phone_number' => 'required',
        ]);


        User::where('cedula', $id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
        ]);
        $this->reset();
    }
}
