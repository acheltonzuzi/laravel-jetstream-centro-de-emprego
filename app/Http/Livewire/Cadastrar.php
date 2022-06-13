<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithFileUploads;

class Cadastrar extends Component
{
    use WithFileUploads;

    public $nome = "";
    public $sexo = "";
    public $nacionalidade = "";
    public $nascimento = "";
    public $bi = "";
    public $provincia = "";
    public $cidade = "";
    public $bairro = "";
    public $telefone = "";
    public $email = "";
    public $cvpdf;
    public $provincias = array(
        "cabinda", "zaire", "uíge", "bengo", "lunda norte", "lunda sul", "cuanza norte", "cuanza sul", "luanda", "huambo", "huíla", "benguela", "moxico", "malange", "cunene", "namibe", "cuando cubango", "bié"
    );
    public function render()
    {
        return view('livewire.cadastrar')->layout("layouts.base");
    }


    public function cadastrar()
    {
        $nomePdf = $this->cvpdf->getClientOriginalName();
        $extensao = $this->cvpdf->getClientOriginalExtension();
        if ($extensao != "pdf") {
            Session()->flash("extensao", "so podes carregar Cv em formato 'pdf'");
        } else {
            $this->cvpdf->storeAs("pdfs", $nomePdf);
            $pessoa = new Usuario();
            $pessoa->nome = $this->nome;
            $pessoa->sexo = $this->sexo;
            $pessoa->nascimento = $this->nascimento;
            $pessoa->nacionalidade = $this->nacionalidade;
            $pessoa->bi = $this->bi;
            $pessoa->provincia = $this->provincia;
            $pessoa->cidade = $this->cidade;
            $pessoa->bairro = $this->bairro;
            $pessoa->telefone = $this->telefone;
            $pessoa->email = $this->email;
            $pessoa->cv = $nomePdf;
            $pessoa->save();
            $this->dispatchBrowserEvent("cadastrado",[
                'title'=>'foste cadastrado',
                'icon'=>'success',
                'iconColor'=>'green'
            ]
            );
            $this->reset();
            Session()->flash("sucesso", "upload feito com sucesso");
            
        }
    }


   
}
