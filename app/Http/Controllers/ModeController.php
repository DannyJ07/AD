<?php

namespace App\Http\Controllers;

use App\Models\Mode;
use Illuminate\Http\Request;

/**
 * Class ModeController
 * @package App\Http\Controllers
 */
class ModeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modes = Mode::paginate();

        return view('mode.index', compact('modes'))
            ->with('i', (request()->input('page', 1) - 1) * $modes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mode = new Mode();
        return view('mode.create', compact('mode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mode::$rules);

        $mode = Mode::create($request->all());

        return redirect()->route('modes.index')
            ->with('success', 'Mode created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mode = Mode::find($id);

        return view('mode.show', compact('mode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mode = Mode::find($id);

        return view('mode.edit', compact('mode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mode $mode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mode $mode)
    {
        request()->validate(Mode::$rules);

        $mode->update($request->all());

        return redirect()->route('modes.index')
            ->with('success', 'Mode updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mode = Mode::find($id)->delete();

        return redirect()->route('modes.index')
            ->with('success', 'Mode deleted successfully');
    }
}
