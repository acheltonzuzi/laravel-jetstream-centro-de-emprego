<?php

namespace App\Http\Livewire;

use App\Models\Usuario;
use Livewire\Component;

class Detalhe extends Component
{
    public $usuario;
    public $nome="";
    public function mount($id)
    {
        $this->usuario=Usuario::find($id);
        return view('livewire.detalhe');
    }
    public function render()
    {   
        $user=$this->usuario;
        return view('livewire.detalhe',compact("user"));
    }
    public function download($id){
        $file=Usuario::find($id);
        return response()->download(storage_path('app/pdfs/'.$file->cv));
    }
}
