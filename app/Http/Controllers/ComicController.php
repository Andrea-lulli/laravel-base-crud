<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $comics = Comic::All();
        //dd($comics);

        return view('component-menu.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('component-menu.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate(
            [
                'title' => 'required|max:100'
            ],
            [
                'title.required' => 'Attenzione il campo title è obbligatorio',
                'title.max' => 'Attenzione il campo non deve superare i 100 caratteri'
            ]
        );

        $new_record = new Comic();
        $new_record->title = $data['title'];
        $new_record->description = $data['description'];
        $new_record->thumb = $data['thumb'];
        $new_record->price = $data['price'];
        $new_record->series = $data['series'];
        $new_record->sale_date = $data['sale_date'];
        $new_record->type = $data['type'];
        $new_record->save();




        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elem = Comic::findOrFail($id);
        // dd($elem);
        return view('component-menu.comics.show', compact('elem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $comics = Comic::findOrFail($id);

        return view('component-menu.comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $comics = Comic::findOrFail($id);
        $comics->update($data);

        return redirect()->route('comics.show', $comics->id)->with('success', "Hai modificato con successo la card: $comics->title");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index')->with('success', "Hai cancellato con successo la card: $comic->title");
    }
}
