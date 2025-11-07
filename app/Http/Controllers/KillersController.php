<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Killers;
use App\Models\Dojo;

class KillersController extends Controller
{
    public function index()
    {
        //route --> /killer/
        //fetch all killers from database and return to view
        $killer = Killers::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        return view('killer.index', ["killer" => $killer]);
    }

    public function show(killers $killers)
    {
        //route --> /killer/{id}
        //fetch a single killer by id from database and return to view
        $killers->load('dojo');
        return view('killer.show', ["killer" => $killers]);
    }

    public function create()
    {
        //route --> /killer/create
        //render a form to create a new killer (view) to the user
        $dojos = Dojo::all();

        return view('killer.create', ["dojos" => $dojos]);
    }

    public function contact()
    {
        //route --> /killer/contact
        //render a contact view to the user
        return view('killer.contact');
    }

    public function store(Request $request)
    {
        //route --> /killer/ (POST)
        //fetch all killers from database and return to view
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        killers::create($validated);
        return redirect()->route('killer.index')->with('success', 'Killer created successfully!');
    }

    public function destroy(Killers $killers)
    {

        //route --> /killer/{id} (DELETE)
        //handle delect request, to delete a killer by id from database and redirect to index view

        $killers->delete();
        return redirect()->route('killer.index')->with('success', 'Killer deleted successfully!');
    }

    public function edit()
    {
        //route --> /killer/edit/{id}
        //fetch a single killer by id from database and return to view with form to edit
    }
    public function update()
    {
        //route --> /killer/update/{id} (PUT)
        //handle update request, to update a killer by id from database and redirect to show view
    }
}
