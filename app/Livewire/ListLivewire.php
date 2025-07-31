<?php

namespace App\Livewire;

use App\Livewire\Forms\UserCreateForm;
use App\Livewire\Forms\UserEditForm;
use App\Models\User;
use Livewire\Component;

class ListLivewire extends Component
{
    public $datos;
    public UserCreateForm $userCreateForm;
    public UserEditForm $userEditForm;
    public $title;
    public $description;
    public $ruta;

    public $role_id = 2;
    public $create_user = false;
    public $edit_user = false;

    public function mount(){
        $this->datos= User::all();        
    }
    
    public function save(){        
        $this->userCreateForm->save();        
        $this->datos = User::all();
        $this->create_user = false; // Cerrar el modal después de actualizar 
    }

    public function show($id)
    {
        $this->edit_user = true; 
        $this->userEditForm->show($id);
        $this->datos = User::all();
    }

    public function update(){
        $this->userEditForm->update();
        $this->datos = User::all();
        $this->edit_user = false; // Cerrar el modal después de actualizar
        session()->flash('message', 'Usuario actualizado correctamente.');
    } 
   

    public function delete($id)
    {
        $user = User::findOrFail($id);
        if ($user->id === auth()->id()) {
            session()->flash('error', 'No puedes eliminarte a ti mismo.');
            return;
        }
        
        $user->delete();

        $this->datos = User::all();
    }

    public function render()
    {
        return view('livewire.list-livewire');
    }
}
