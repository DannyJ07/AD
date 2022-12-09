<?php

namespace App\Http\Controllers;

use App\Models\Inscriptionsgr;
use Illuminate\Http\Request;

/**
 * Class InscriptionsgrController
 * @package App\Http\Controllers
 */
class InscriptionsgrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscriptionsgrs = Inscriptionsgr::paginate();

        return view('inscriptionsgr.index', compact('inscriptionsgrs'))
            ->with('i', (request()->input('page', 1) - 1) * $inscriptionsgrs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inscriptionsgr = new Inscriptionsgr();
        return view('inscriptionsgr.create', compact('inscriptionsgr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inscriptionsgr::$rules);

        $inscriptionsgr = Inscriptionsgr::create($request->all());

        return redirect()->route('inscriptionsgrs.index')
            ->with('success', 'Inscriptionsgr created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscriptionsgr = Inscriptionsgr::find($id);

        return view('inscriptionsgr.show', compact('inscriptionsgr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inscriptionsgr = Inscriptionsgr::find($id);

        return view('inscriptionsgr.edit', compact('inscriptionsgr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inscriptionsgr $inscriptionsgr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscriptionsgr $inscriptionsgr)
    {
        request()->validate(Inscriptionsgr::$rules);

        $inscriptionsgr->update($request->all());

        return redirect()->route('inscriptionsgrs.index')
            ->with('success', 'Inscriptionsgr updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inscriptionsgr = Inscriptionsgr::find($id)->delete();

        return redirect()->route('inscriptionsgrs.index')
            ->with('success', 'Inscriptionsgr deleted successfully');
    }
}
