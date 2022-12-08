<?php

namespace App\Http\Controllers;

use App\Models\Inscriptionsin;
use Illuminate\Http\Request;

/**
 * Class InscriptionsinController
 * @package App\Http\Controllers
 */
class InscriptionsinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscriptionsins = Inscriptionsin::paginate();

        return view('inscriptionsin.index', compact('inscriptionsins'))
            ->with('i', (request()->input('page', 1) - 1) * $inscriptionsins->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inscriptionsin = new Inscriptionsin();
        return view('inscriptionsin.create', compact('inscriptionsin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inscriptionsin::$rules);

        $inscriptionsin = Inscriptionsin::create($request->all());

        return redirect()->route('inscriptionsins.index')
            ->with('success', 'Inscriptionsin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscriptionsin = Inscriptionsin::find($id);

        return view('inscriptionsin.show', compact('inscriptionsin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inscriptionsin = Inscriptionsin::find($id);

        return view('inscriptionsin.edit', compact('inscriptionsin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inscriptionsin $inscriptionsin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscriptionsin $inscriptionsin)
    {
        request()->validate(Inscriptionsin::$rules);

        $inscriptionsin->update($request->all());

        return redirect()->route('inscriptionsins.index')
            ->with('success', 'Inscriptionsin updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inscriptionsin = Inscriptionsin::find($id)->delete();

        return redirect()->route('inscriptionsins.index')
            ->with('success', 'Inscriptionsin deleted successfully');
    }
}
