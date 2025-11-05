<?php

namespace App\Livewire\Fornecedores;
use App\Models\Fornecedor;
use Livewire\Attributes\Layout;

use Livewire\Component;
#[Layout('layouts.app')]
class CreateFornecedores extends Component
{
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'nullable|email',
        'address' => 'nullable|string',
        'cnpj' => 'nullable|string|min:14|max:18',
    ];
    public function StoreFornecedor()  {
        $this->validate();

        Fornecedor::create([
            
        ]);
    }
    public function render()
    {
        return view('livewire.fornecedores.create-fornecedores');
    }
}
