


<x-layout>
  {{-- @dd($categories) --}}
<div class="sfondo-2">
<div class="container">
    <div class="row d-flex ">
        <div class="col-12">
            <h2 class="text-end titolo" >Inserisci un dolce ...</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex m-5">
        <div class="col-12 col-md-4 mb-5">
            <form class="form" method="POST" action="{{route('sweets.store')}}" enctype="multipart/form-data">
              @if ($errors->any())
    <div class="alert-2 alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                @csrf
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                  </div>
                  
                  <div class="mb-3">
                    <label for="producer" class="form-label">Produttore</label>
                    <input type="text" class="form-control" id="producer" name="producer" value="{{old('producer')}}">
                  </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}">
                  </div>

                  <div class="mb-3">
                    <label for="category_id" class="form-label">Categoria</label>
                    <select class="form-select" id="category_id" name="category_id">
                     @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
            
                  <div class="mb-3">
                    <label for="cover" class="form-label">Copertina</label>
                    {{-- per l'immagine non è possibile inserire il metodo old->() --}}
                    <input type="file" class="form-control" id="cover" name="cover">
                  </div>
                  <div class="mb-3 mt-3">
                    <label class="form-label">Ricette disponibili</label><br>
                    @foreach ($recipes as $recipe)
                        <input type="checkbox" class="form-check-input" value="{{$recipe->id}}" id="{{$recipe->id}}" name="recipes[]">
                        <label for="{{$recipe->id}}" class="form-check-label">{{$recipe->name}}</label>
                    @endforeach
                 </div>
                  <div class="mb-3">
                    <label for="description" class="form-label" >Descrizione</label>
                   <textarea name="description" id="description" cols="10" rows="10" class="form-control">{{old('description')}}</textarea>
                  </div>
                  
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label form-check" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn text-white justify-content-center m-3">Submit</button>
              </form>
        </div>
    </div>
</div>
</div>
   


</x-layout>