<?php

namespace App\Http\Controllers;

use App\Models\Sweet;
use App\Models\Recipe;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\SweetRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class SweetController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [

            new Middleware('auth', only: ['create']), // aggiungo edit all'array se voglio che solo gli utenti loggati possano effettuare modifiche

            // new Middleware('subscribed', except: ['store']),
        ];
    }



    public function create()
    {
        $categories = Category::all();
        $recipes = Recipe::all();
        return view('sweets.create', compact('categories', 'recipes'));
    }


    public function store(SweetRequest $request)
    {
        // metodo - corretto per salvare dati nel database
        // @dd($request->all());
        //    $sweet=new Sweet();
        //    $sweet->title=$request->title;
        //    $sweet->producer=$request->producer;
        //    $sweet->price=$request->price;
        //    $sweet->description=$request->description;
        //    $sweet->save();
        // protected mass assignment


        //metodo ripetitivo di evaluation
        // if (!$request->file('cover')){
        // $img='default/torta.jpeg';
        // } else{
        //     $img=$request->file('cover')->store('public/covers');
        // }


        // metodo + corretto per salvare dati nel database
        $sweet = Sweet::create([

            'title' => $request->title,
            'producer' => $request->producer,
            'price' => $request->price,
            'description' => $request->description,
            // 'cover'=>$img,

            //alternativa alla condizione if creata sopra
            //evaluation
            'cover' => $request->file('cover') ? $request->file('cover')->store('public/covers') : $img = 'default/torta.jpeg',
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id
        ]);
        $sweet->recipes()->attach($request->recipes);
        return redirect()->route('home')->with('RicettaCreata', 'Ricetta inserita con successo!');
    }

    public function index()
    {
        $sweets = Sweet::all();
        // @dd($sweets);
        return view('sweets.index', compact('sweets'));
    }


    public function show(Sweet $sweet)
    {

        // dd($sweet);

        return view('sweets.show', compact('sweet'));
    }




    public function edit(Sweet $sweet)
    {
        if (Auth::user()->id == $sweet->user_id) {


            $categories = Category::all();
            $recipes = Recipe::all();
            return view('sweets.edit', compact('sweet', 'categories', 'recipes'));
        }

        return redirect()->back()->with('denied', 'Accesso negato');
    }


    public function update(SweetRequest $request, Sweet $sweet)
    {

        $sweet->update([

            'title' => $request->title,
            'producer' => $request->producer,
            'price' => $request->price,
            'description' => $request->description,
            'description' => $request->description,
            'description' => $request->description,
            //creo la condizione pr l'immagine
            'cover' => $request->file('cover') ? $request->file('cover')->store('public/covers') : $sweet->cover,
            'category_id' => $request->category_id
        ]);
        $sweet->recipes()->detache();
        $sweet->recipes()->attach($request->recipes);
        return redirect(route('sweets.show', $sweet))->with('RicettaCreata', 'Ricetta modificata');
    }

    public function destroy(Sweet $sweet)
    {


        $sweet->recipes()->detach();
        $sweet->delete();

        return redirect(route('sweets.index'))->with('RicettaEliminata', 'Ricetta eliminata');
    }
}
