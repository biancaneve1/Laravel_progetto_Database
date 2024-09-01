<x-layout>

<div class="sfondo-3">
<div class="container-fluid  ">
        <div class="row d-flex">
            <div class="col-12 mt-5">
                <h2 class="text-center titolo mt-5" >...Tutti i nostri dolci</h2>
            </div>
        </div>
    </div>
    @if(session('RicettaEliminata'))
<div class="alert alert-success text-center m-5">
    {{session('RicettaEliminata')}}
</div>
@endif

{{-- @dd($sweets); --}}
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
</div>
</div>
</x-layout>