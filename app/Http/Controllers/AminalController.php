<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aminal;

class AminalController extends Controller
{
    public function index()
    {
        $animals = Aminal::all();
        return view('animal.index', ['animals' => $animals]);
    }

    public function show(Aminal $animal)
    {
        return view('animal.show', ['animal' => $animal]);
    }

    public function create()
    {
        return view('animal.create');
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName(); // you can also use file name
        $path = public_path() . '/img';
        $file->move($path, $fileName);
        $animalPhoto = explode('.', $fileName)[0];

        $data = $request->except(['image', '_token']);
        $data['photo'] = $animalPhoto;

        Aminal::create($data);
        return redirect()->back()->with("success", "Vous avez bien ajouté un animal");
    }

    public function adopte(Aminal $animal)
    {
        $animal->adopteIt();
        return redirect()->back();
    }
}
