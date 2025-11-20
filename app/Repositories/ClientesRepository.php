<?php

namespace App\Repositories;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Clientes();
    }

    public function listagem()
    {
        return $this->model->all();
    }

    public function capturar($id)
    {
        return $this->model->find($id);
    }

    public function salvar($dados)
    {
        $id = null;

        if (isset($dados['id'])) {
            $id = $dados['id'];
        }

        $model = $this->model->findOrNew($id);
        $model->fill($dados);
        $model->save();

        return $model;
    }

    public function excluir($id)
    {
        $model = $this->model->find($id);

        // validacoes
        // return false

        $model->delete();

        return true;
    }
}
