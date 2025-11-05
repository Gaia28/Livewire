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
        // 2. Valida e obtém os dados
        $validatedData = $this->validate($this->rules);

        // 3. Cria o Fornecedor com os dados validados
        Fornecedor::create($validatedData);

        // 4. Envia a mensagem de sucesso para a sessão
        session()->flash('success', 'Fornecedor cadastrado com sucesso!');

        // 5. Limpa os campos do formulário
        $this->reset('name', 'email', 'address', 'cnpj');
    }
    public function render()
    {
        return view('livewire.fornecedores.create-fornecedores');
    }
}
