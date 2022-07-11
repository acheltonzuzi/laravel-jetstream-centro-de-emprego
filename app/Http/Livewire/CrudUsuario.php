<?php

namespace App\Http\Livewire;

use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

class CrudUsuario extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $usuarios = Usuario::where("nome", "Like", "%" . $this->search . "%")
            ->orWhere("email", "Like", "%" . $this->search . "%")
            ->orWhere("profissao", "Like", "%" . $this->search . "%")
            ->orWhere("telefone", "Like", "%" . $this->search . "%")
            ->orderBy("id", "desc")->paginate(10);
        return view('livewire.crud-usuario', compact("usuarios"));
    }
    public function apagar($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();                                                                                                                   
        unlink(storage_path('app/pdfs/' . $usuario->cv));
    }
}
