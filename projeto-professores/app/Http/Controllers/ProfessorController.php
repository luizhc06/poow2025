<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return view('professores.index', compact('professores'));
    }

    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:professors',
            'registro' => 'required|string|unique:professors',
            'telefone' => 'required|string'
        ]);

        Professor::create($request->all());

        return redirect()->route('professores.index')
            ->with('success', 'Professor criado com sucesso!');
    }

    public function edit(Professor $professor)
    {
        return view('professores.edit', compact('professor'));
    }

    public function update(Request $request, Professor $professor)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:professors,email,' . $professor->id,
            'registro' => 'required|string|unique:professors,registro,' . $professor->id,
            'telefone' => 'required|string'
        ]);

        $professor->update($request->all());

        return redirect()->route('professores.index')
            ->with('success', 'Professor atualizado com sucesso!');
    }

    public function destroy(Professor $professor)
    {
        $professor->delete();

        return redirect()->route('professores.index')
            ->with('success', 'Professor excluído com sucesso!');
    }
}