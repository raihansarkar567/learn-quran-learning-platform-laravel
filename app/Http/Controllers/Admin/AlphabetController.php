<?php

namespace App\Http\Controllers\Admin;

use App\Alphabet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlphabetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alphabet = Alphabet::all();
        return view('admin.alphabet.index', compact('alphabet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alphabet.create');
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
            'makharij_id'=> 'required',
            'letter'=> 'required|unique:alphabets',
            'name'=> 'required',
        ]);
        $requestData = $request->all();
        $requestData['slug'] = str_slug($request->letter);
        
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
        }
        if ($request->hasFile('sound')) {
            $requestData['sound'] = $request->file('sound')->store('sounds', 'public');
        }
        
        Alphabet::create($requestData);
        return redirect('admin/alphabet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alphabet  $alphabet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alphabet = Alphabet::findOrFail($id);

        return view('admin.alphabet.show', compact('alphabet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alphabet  $alphabet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alphabet = Alphabet::findOrFail($id);

        return view('admin.alphabet.edit', compact('alphabet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alphabet  $alphabet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'makharij_id'=> 'required',
            'letter'=> 'required',
            'name'=> 'required',
        ]);
        $requestData = $request->all();
        $alphabet = Alphabet::findOrFail($id);
        // image
        if ($request->hasFile('image')) {
            if (!$request->old_image='') {
                Storage::delete('public/' . $alphabet->image);
            }
        }
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
        }else{
            $requestData['image'] = $request->old_image;
        }

        // sound
        if ($request->hasFile('sound')) {
            if (!$request->old_sound='') {
                Storage::delete('public/' . $alphabet->sound);
            }
        }
        if ($request->hasFile('sound')) {
            $requestData['sound'] = $request->file('sound')->store('sounds', 'public');
        }else{
            $requestData['sound'] = $request->old_sound;
        }

        $alphabet->update($requestData);

        return redirect('admin/alphabet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alphabet  $alphabet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alphabet = Alphabet::findOrFail($id);
        if ($alphabet->image!=null) {
            Storage::delete('public/' . $alphabet->image);
        }
        if ($alphabet->sound!=null) {
            Storage::delete('public/' . $alphabet->sound);
        }
        Alphabet::destroy($id);
        return redirect('admin/alphabet');
    }
}
