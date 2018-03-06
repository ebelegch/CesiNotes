<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eleve;

class EleveController extends Controller
{
    //
    public function index()
    {
        return Eleve::all();
    }

    public function show(Eleve $eleve)
    {
        return $eleve;
    }

    public function store(Request $request)
    {
        $eleve = Eleve::create($request->all());

        return response()->json($eleve, 201);
    }

    public function update(Request $request, Article $article)
    {
        $eleve->update($request->all());

        return response()->json($eleve, 200);
    }

    public function delete(Eleve $eleve)
    {
        $eleve->delete();

        return response()->json(null, 204);
    }
}
