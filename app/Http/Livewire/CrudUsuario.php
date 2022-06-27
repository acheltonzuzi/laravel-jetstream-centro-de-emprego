<?php

namespace App\Http\Livewire;

use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

class CrudUsuario extends Component
{   
    use WithPagination;
    public function render()
    {
        $usuarios=Usuario::Paginate(20);
        return view('livewire.crud-usuario',compact("usuarios"));
    }

    public function apagar($id){
        $usuario=Usuario::find($id);
        $usuario->delete();
        unlink(storage_path('app/pdfs/'.$usuario->cv));
    }


}
