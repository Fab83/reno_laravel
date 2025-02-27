<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use App\Models\Contact;
use Illuminate\Http\Request;

class LogementController extends Controller
{
    public function index()
    {
        $logements = Logement::all();
        return view('logements.index', compact('logements'));
    }

    public function create()
    {
        $contacts = Contact::all();
        return view('logements.create', compact('contacts'));
    }

    public function store(Request $request)
    {
        $logement = new Logement($request->all());
        $logement->save();
        return redirect()->route('logements.index');
    }

    public function show($id)
    {
        $logement = Logement::findOrFail($id);
        return view('logements.show', compact('logement'));
    }

    public function edit($id)
    {
        $logement = Logement::findOrFail($id);
        $contacts = Contact::all();
        return view('logements.edit', compact('logement', 'contacts'));
    }

    public function update(Request $request, $id)
    {
        $logement = Logement::findOrFail($id);
        $logement->update($request->all());
        return redirect()->route('logements.index');
    }

    public function destroy($id)
    {
        $logement = Logement::findOrFail($id);
        $logement->delete();
        return redirect()->route('logements.index');
    }
}
