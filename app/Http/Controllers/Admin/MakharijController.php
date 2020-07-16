<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Makharij;
use Illuminate\Http\Request;

class MakharijController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makharij = Makharij::all();
        return view('admin.makharij.index', compact('makharij'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.makharij.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:makharijs',
            'details' => 'required'
        ]);

        $requestData = $request->all();
        $requestData['slug'] = str_slug($request->name);
        Makharij::create($requestData);
        return redirect('admin/makharij');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Makharij  $makharij
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Makharij  $makharij
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $makharij = Makharij::findOrFail($id);

        return view('admin.makharij.edit', compact('makharij'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Makharij  $makharij
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'details' => 'required'
        ]);
        $requestData = $request->all();

        $Makharij = Makharij::findOrFail($id);
        // dd($requestData['slug']);
        $Makharij->update($requestData);
        return redirect('admin/makharij');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Makharij  $makharij
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Makharij::destroy($id);
        return redirect('admin/makharij');
    }
}
