


<x-layout>
    <div class="container-fluid" style="background-color: rgb(166, 182, 185); ">
        <div class="row d-flex">
            <div class="col-12 mb-3">
                <h2 class="text-center titolo">{{$recipe->name}}</h2>
            </div>
        </div>
    </div>
  
    <div class="container-fluid sfondo-richiesti  ">
        <div class="row d-flex">
            <div class="col-12 col-md-6 mt-5 ">
          <img src="{{Storage::url($recipe->image)}}" alt="{{$recipe->name}}" class="img-fluid m-5 img-card">
            </div>
          
            @if(session('RecipeUpdated'))
            <div class="alert alert-success text-center m-5">
                {{session('RecipeUpdated')}}
            </div>
            @endif
            <div class="col-12 col-md-6 mt-5">
                <div class="mx-auto text-center mt-5">
               <h5 class="text-center mt-5">{{$recipe->instructions}}</h5>
                  </div>
                  <div class="text-center mt-5">
             @if(count($recipe->sweets))
             <h3>Ricette disponibili</h3>
             <ul>
                @foreach($recipe->sweets as $sweet)
                   <li class="text-center">{{$sweet->title}}, prodotto da{{$sweet->producer}}</li>
                @endforeach
             </ul>
             @endif
            </div>
               
            <form action="{{route('recipes.destroy', $recipe)}}" method="POST">
                @csrf
                @method('DELETE')
               <button type="submit" class="btn btn-edit mt-3">Elimina</button>
            </form>
           
             <div class=" row d-flex">
                
                <a href="{{route('recipes.edit', $recipe)}}" class="btn btn-edit mt-3">Modifica</a>
            </div>
              </div>
            <a href="{{route('recipes.index')}}" class="p-5 mx-5 text-center">Ritona alla lista delle ricette</a>
        </div>
       
    </div>
</x-layout>