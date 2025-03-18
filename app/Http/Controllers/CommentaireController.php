<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Commentaires =Commentaire::paginate(10);
        
        return view('proprietaires.Commentaires', compact('Commentaires'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Commentaire $Commentaire)
    {
        return view('proprietaires.Voircommentaire', compact('Commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaire $Commentaire)
    {
        $Commentaire->delete();
        return back()->with('info', 'Le commentaire a bien été supprimé dans la base de données.');
    }
}
