<?php

namespace App\Livewire;

use Livewire\Component;

class Cadastro extends Component
{

    public $nome = '';
    public $email = '';
    public $senha = '';

    protected function rules()
    {
        return [
            'nome' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|min:6',
        ];
    }

    protected $messages = [
        'nome.required' => 'O nome é obrigatório.',
        'nome.min' => 'Digite pelo menos 3 caracteres.',
        'email.required' => 'O e-mail é obrigatório.',
        'email.email' => 'Digite um e-mail válido.',
        'email.unique' => 'Este e-mail já está cadastrado.',
        'senha.required' => 'A senha é obrigatória.',
        'senha.min' => 'A senha deve ter pelo menos 6 caracteres.',
    ];

    public function updatedNome()
    {
        $this->validateOnly('nome');
    }

    public function updatedEmail()
    {
        $this->validateOnly('email');
    }

    public function updatedSenha()
    {
        $this->validateOnly('senha');
    }

    public function cadastrar()
    {
        $dados = $this->validate();

        session()->flash('sucesso', 'Cadastro realizado com sucesso!');

        $this->reset(['nome', 'email', 'senha']);
    }



    public function render()
    {
        return view('livewire.cadastro');
    }
}
