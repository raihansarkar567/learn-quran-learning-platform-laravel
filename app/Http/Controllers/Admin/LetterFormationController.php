<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\LetterFormation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LetterFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letter_formation = LetterFormation::all();
        return view('admin.letter_formation.index', compact('letter_formation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.letter_formation.create');
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
            'name'=> 'required|unique:letter_formations',
            'description'=> 'required',
            'type'=> 'required',
            'detached_image' => 'required | mimes:jpeg,jpg,png | max:100',
            'initial_image' => 'required | mimes:jpeg,jpg,png | max:100',
            'medial_image' => 'required | mimes:jpeg,jpg,png | max:100',
            'final_image' => 'required | mimes:jpeg,jpg,png | max:100',
        ]);
        $requestData = $request->all();
        
        if ($request->hasFile('detached_image')) {
            $requestData['detached_image'] = $request->file('detached_image')->store('uploads', 'public');
        }
        if ($request->hasFile('initial_image')) {
            $requestData['initial_image'] = $request->file('initial_image')->store('uploads', 'public');
        }
        if ($request->hasFile('medial_image')) {
            $requestData['medial_image'] = $request->file('medial_image')->store('uploads', 'public');
        }
        if ($request->hasFile('final_image')) {
            $requestData['final_image'] = $request->file('final_image')->store('uploads', 'public');
        }
        if ($request->hasFile('sound')) {
            $requestData['sound'] = $request->file('sound')->store('sounds', 'public');
        }
        
        LetterFormation::create($requestData);
        return redirect('admin/letter_formation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LetterFormation  $letterFormation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $letter_formation = LetterFormation::findOrFail($id);

        return view('admin.letter_formation.show', compact('letter_formation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LetterFormation  $letterFormation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $letter_formation = LetterFormation::findOrFail($id);

        return view('admin.letter_formation.edit', compact('letter_formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LetterFormation  $letterFormation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=> 'required',
            'description'=> 'required',
            'type'=> 'required',
            'detached_image' => 'mimes:jpeg,jpg,png | max:100',
            'initial_image' => 'mimes:jpeg,jpg,png | max:100',
            'medial_image' => 'mimes:jpeg,jpg,png | max:100',
            'final_image' => 'mimes:jpeg,jpg,png | max:100',
        ]);
        $requestData = $request->all();
        $letter_formation = LetterFormation::findOrFail($id);
        // detached_image
        if ($request->hasFile('detached_image')) {
            if (!$request->old_detached_image='') {
                Storage::delete('public/' . $letter_formation->detached_image);
            }
            $requestData['detached_image'] = $request->file('detached_image')->store('uploads', 'public');
        }
        else{
            $requestData['detached_image'] = $request->old_detached_image;
        }
        // initial_image
        if ($request->hasFile('initial_image')) {
            if (!$request->old_initial_image='') {
                Storage::delete('public/' . $letter_formation->initial_image);
            }
            $requestData['initial_image'] = $request->file('initial_image')->store('uploads', 'public');
        }
        else{
            $requestData['initial_image'] = $request->old_initial_image;
        }
        // medial_image
        if ($request->hasFile('medial_image')) {
            if (!$request->old_medial_image='') {
                Storage::delete('public/' . $letter_formation->medial_image);
            }
            $requestData['medial_image'] = $request->file('medial_image')->store('uploads', 'public');
        }
        else{
            $requestData['medial_image'] = $request->old_medial_image;
        }
        // final_image
        if ($request->hasFile('final_image')) {
            if (!$request->old_final_image='') {
                Storage::delete('public/' . $letter_formation->final_image);
            }
            $requestData['final_image'] = $request->file('final_image')->store('uploads', 'public');
        }
        else{
            $requestData['final_image'] = $request->old_final_image;
        }

        // sound
        if ($request->hasFile('sound')) {
            if (!$request->old_sound='') {
                Storage::delete('public/' . $letter_formation->sound);
            }
            $requestData['sound'] = $request->file('sound')->store('sounds', 'public');
        }
        else{
            $requestData['sound'] = $request->old_sound;
        }

        $letter_formation->update($requestData);

        return redirect('admin/letter_formation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LetterFormation  $letterFormation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $letter_formation = LetterFormation::findOrFail($id);
        if ($letter_formation->detached_image!=null) {
            Storage::delete('public/' . $letter_formation->detached_image);
        }
        if ($letter_formation->initial_image!=null) {
            Storage::delete('public/' . $letter_formation->initial_image);
        }
        if ($letter_formation->medial_image!=null) {
            Storage::delete('public/' . $letter_formation->medial_image);
        }
        if ($letter_formation->final_image!=null) {
            Storage::delete('public/' . $letter_formation->final_image);
        }
        
        if ($letter_formation->sound!=null) {
            Storage::delete('public/' . $letter_formation->sound);
        }
        LetterFormation::destroy($id);
        return redirect('admin/letter_formation');
    }
}
