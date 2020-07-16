<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Vowel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VowelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vowel = Vowel::all();
        return view('admin.vowel.index', compact('vowel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vowel.create');
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
            'name'=> 'required|unique:vowels',
            'letter'=> 'required',
            'pronounced'=> 'required',
            'description'=> 'required',
            'type'=> 'required',
        ]);
        $requestData = $request->all();
        
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
        }
        if ($request->hasFile('sound')) {
            $requestData['sound'] = $request->file('sound')->store('sounds', 'public');
        }
        
        Vowel::create($requestData);
        return redirect('admin/vowel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vowel  $vowel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vowel = Vowel::findOrFail($id);

        return view('admin.vowel.show', compact('vowel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vowel  $vowel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vowel = Vowel::findOrFail($id);

        return view('admin.vowel.edit', compact('vowel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vowel  $vowel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=> 'required',
            'letter'=> 'required',
            'pronounced'=> 'required',
            'description'=> 'required',
            'type'=> 'required',
        ]);
        $requestData = $request->all();
        $vowel = Vowel::findOrFail($id);
        // image
        if ($request->hasFile('image')) {
            if (!$request->old_image='') {
                Storage::delete('public/' . $vowel->image);
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
                Storage::delete('public/' . $vowel->sound);
            }
        }
        if ($request->hasFile('sound')) {
            $requestData['sound'] = $request->file('sound')->store('sounds', 'public');
        }else{
            $requestData['sound'] = $request->old_sound;
        }

        $vowel->update($requestData);

        return redirect('admin/vowel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vowel  $vowel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vowel = Vowel::findOrFail($id);
        if ($vowel->image!=null) {
            Storage::delete('public/' . $vowel->image);
        }
        if ($vowel->sound!=null) {
            Storage::delete('public/' . $vowel->sound);
        }
        Vowel::destroy($id);
        return redirect('admin/vowel');
    }
}
