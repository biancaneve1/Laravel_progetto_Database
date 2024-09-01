<x-layout>


<div class="sfondo-1">
<div class="container py-5">
    <div class="row mt-5 ">
<div class="col-12 justify-content-center align-items-center">
<h1 class="display-1 text-center titolo-Blog mt-5">Blog di dolci</h1>
<h2 class="titolo p-5 text-center">Gustose ricette, golose idee</h2>
     </div>
    </div>
</div>
</div>

<div class="sfondo-richiesti" >
    <div class="container">
        <div class="row d-flex" >
            <div class="col-12 mt-5" >
                <h2 class="text-center titolo mt-5 " >I più richiesti ...</h2>
            </div>
        </div>
    </div>
    
<div class="container-fluid m-5">
    <div class="row">
        @foreach ($sweets as $sweet )
            <div class="col-12 col-md-4 my-3">
            {{-- card --}}
        <x-card
        {{-- bundling esplicito --}}
        :sweet="$sweet"
        {{-- altro modo passando tutti i singoli attributi --}}
        {{-- title="{{$sweet->title}}" --}}
        />
              {{-- fine card --}}
            </div>
        @endforeach
     </div>
     @if(session('RicettaCreata'))
    <div class="alert alert-success text-center m-5">
        {{session('RicettaCreata')}}
    </div>
    @elseif(session('RecipeCreated'))
    <div class="alert alert-success text-center m-5">
        {{session('RecipeCreated')}}
    @endif
</div>
</x-layout>