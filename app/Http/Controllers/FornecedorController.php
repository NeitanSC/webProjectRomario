<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            'EA',
            'Ubisoft',
            'Bestesda',
            'Coca',
            'Nescafé',
            'Italac',
            'Trinter',
            'Nescau',
            'Nestlé',
            'outro fornecedor',
            'mais um fornecedor',
            'eita, outro',
            'olha só, mais um',
            'e mais outro',
        ];

        return view('fornecedores.index', compact('fornecedores'));
    }

    public function show($id)
    {
        $fornecedores = [
            1 => 'EA',
            2 => 'Pepsi',
            // ... outros fornecedores
        ];

        if (isset($fornecedores[$id])) {
            return "O fornecedor com o ID $id é: {$fornecedores[$id]}";
        } else {
            return "Fornecedor não encontrado.";
        }
    }
}