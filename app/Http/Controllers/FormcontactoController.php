<?php

namespace App\Http\Controllers;

use App\Models\Formcontacto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FormcontactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        return view ('contacto');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $request->validate([

            'email' => 'required',
            'mensaje' => 'required|min:3|max:255'
        ]);

        Formcontacto::create($request->all());
        return redirect()->route('contacto.index')->with('success', 'Nuevo mensaje enviado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formcontacto $formcontacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formcontacto $formcontacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formcontacto $formcontacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formcontacto $formcontacto)
    {
        //
    }
}
