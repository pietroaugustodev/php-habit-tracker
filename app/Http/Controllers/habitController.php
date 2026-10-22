<?php

namespace App\Http\Controllers;

use App\Http\Requests\habitRequest;
use App\Models\habit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class habitController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('habito');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(habitRequest $request): RedirectResponse
    {
        $validated = $request->validated();
    
        Auth::user()->habits()->create($validated);

        return redirect()->route('site.dashboard')->with('success', 'Habito cadastrado com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(habit $habit)
    {
        return view('habitoEdit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(habitRequest $request, habit $habit)
    {
        if ($habit->user_id != Auth::user()->id) {
            abort(403, 'Você não tem acesso para editar esse habito');
        }

        $validated = $request->only('name');

        $habit->update($validated);

        return redirect()->route('site.dashboard')->with('success', 'Habito editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(habit $habit)
    {
        if ($habit->user_id != Auth::user()->id) {
            abort(403, 'Você não tem acesso para deletar esse habito');
        }

        $habit->delete();
        return redirect()->route('site.dashboard')->with('success', 'Habito deletado com sucesso.');
    }
}
