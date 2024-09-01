<x-layout>

    <div class="sfondo-edit">
        <div class="container-fluid  ">
                <div class="row d-flex">
                    <div class="col-12 mt-5">
                        <h2 class="text-center titolo mt-5" >...Tutte  le  ricette</h2>
                    </div>
                </div>
            </div>
            @if(session('RecipeDeleted'))
            <div class="alert alert-success text-center m-5">
                {{session('RecipeDeleted')}}
            </div>
            @endif
<div class="container my-5">
    <div class="row justify-content-between">

@forelse ($recipes as $recipe)
<div class="col-12 col-md-3  m-2">
    <a href="{{route('recipes.show',$recipe)}}">
    <div class="card" style="width: 20rem; height:35rem;">
        <img src="{{Storage::url($recipe->image)}}" class="card-ricette" alt="{{$recipe->name}}">
        <div class="card-body">
            <h3 class="card-text" >{{$recipe->name}}</h3>
          <p class="card-text">{{$recipe->instructions}}</p>
        </div>
      </div>
    </a>
</div> 
@empty
    <h4>Non sono ancora presenti delle ricette</h4>
@endforelse
    </div>
  </div>
</x-layout>



 

