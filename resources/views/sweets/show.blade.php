<x-layout>


    <div class="container-fluid" style="background-color: rgb(166, 182, 185); ">
        <div class="row d-flex">
            <div class="col-12 mb-3">
                <h2 class="text-center titolo m-5">{{$sweet->title}}</h2>
            </div>
        </div>
    </div>
    @if(session('RicettaAggiornata'))
    <div class="alert alert-success text-center m-5">
        {{session('RicettaAggiornata')}}
    </div>
    @endif
    <div class="container-fluid sfondo-richiesti">
        <div class="row d-flex">
            <div class="col-12 col-md-6 ">
          <img src="{{Storage::url($sweet->cover)}}" alt="" class="img-fluid m-5 img-card">
            </div>
            <div class="col-12 col-md-6 mt-5">
                
                <div class="mx-auto text-center mt-5">
               
                    <h4><span class="fw-bold">Categoria : {{$sweet->category->name ?? 'Nessuna categoria'}}</span></h4>
                    {{-- {{ optional($post->category)->name }}{{$sweet->category->name ?? ' non rilevata ' }} --}}
                    <div class="text-center mt-5">
                        @if(count($sweet->recipes))
                        <h3>Ricette disponibili</h3>
                        <ul>
                           @foreach($sweet->recipes as $recipe)
                              <li class="text-center">{{$recipe->name}}, prodotto da{{$recipe->name}}</li>
                           @endforeach
                        </ul>
                        @endif
                       </div>
                    <p class="text-center mt-5">{{$sweet->description}}</p>
                    {{-- <p class="text-center mt-5">Dolce inserito da : {{$sweet->user_id ? $sweet->user->name : 'Utente sconosciuto'}}</p> --}}
                    {{-- metodo più contratto --}}
                    <p class="text-center mt-5">Dolce inserito da : {{$sweet->user->name ?? 'Utente sconosciuto'}}</p>
                    @if(Auth::user()&& Auth::user()->id==$sweet->user_id)
                    <form method="POST" action="{{route('sweets.destroy',$sweet)}}">
                        @csrf
                        @method('DELETE')
                <div>
                       <button type="submit" class="btn-delete btn-danger">Elimina</button>
                    <button style="margin-top:20%;" class="btn-edit">
                        <a style="color:white;text-decoration:none;" class="mt-5" href="{{route('sweets.edit', $sweet)}}">Modifica</a>
                    </button>
                </div>
                    </form>
                    @endif
                </div>
             </div>
        </div>
    </div>













</x-layout>