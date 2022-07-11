<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Usuario extends Component
{
    public $nome;
    public $email;
    public $senha;
    public function render()
    {
        $usuarios=User::all();
        return view('livewire.usuario',compact("usuarios"));
    }
    public function cadastrar(){
        $usuario=new User();
        $usuario->name=$this->nome;
        $usuario->email=$this->email;
        $usuario->password=Hash::make($this->senha);
        $usuario->save();
        $this->reset();
        Session()->flash("cadastrar","cadastrado com sucesso");
    }   
    public function apagar($id){
        $usuario=User::Find("$id");
        $usuario->delete();
        Session()->flash("deletar","deletado com sucesso");
    }
}
