<?php

namespace App\Http\Controllers;

use App\Models\Sweet;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class RecipeController extends Controller implements HasMiddleware
{


    public static function middleware()
    {
        return [
            new Middleware('auth', only: ['create', 'edit']),

        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sweets = Sweet::all();
        return view('recipes.create', compact('sweets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $recipe = Recipe::create([
            'name' => $request->name,
            'time' => $request->time,
            'instructions' => $request->instructions,
            'image' => $request->file('image')->store('public/images'),
        ]);
        $recipe->sweets()->attach($request->sweets);
        return redirect(route('home'))->with('RecipeCreated', 'Ricetta creata con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        if (Auth::id() == $recipe->user_id) {
            $sweets = Sweet::all();
            return view('recipes.edit', compact('recipe', 'sweets'));
        }

        return redirect()->back()->with('denied','Accesso non consentito');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        // dd($request->all());
        $recipe->update([
            'name' => $request->name,
            'time' => $request->time,
            'instructions' => $request->instructions,
            'image' => $request->file('image') ? $request->file('image')->store('public/images') : $recipe->image,
            'user_id' => Auth::id(),
        ]);

        $recipe->sweets()->detach();
        $recipe->sweets()->attach($request->sweets);
        return redirect(route('recipes.show', $recipe))->with('RecipeUpdated', 'La ricetta ' . $recipe->name . ' è stata modificata correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {

        $recipe->sweets()->detach();
        $recipe->delete();
        return redirect(route('recipes.index'))->with('RecepieDeleted', 'Hai eliminato la ricetta');
    }
}
