<x-layout>



    <div class="sfondo-edit">
        <div class="container pt-0">
            <div class="row d-flex">
                <div class="col-12">
                    <h2 class="text-start titolo">Modifica</h2>
                </div>
            </div>
        </div>

        <div class="sfondo-edit">
            <div class="container">
                <div class="row d-flex ">
                    <div class="col-12 col-md-8 mt-5">
                        <form method="POST" action="{{route('sweets.update', $sweet)}}" enctype="multipart/form-data">
         @if ($errors->any())
            <div class="alert-2 alert-danger">
               <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
               </ul>
            </div>
          @endif
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                              <label for="title" class="form-label">Titolo</label>
                              <input type="text" class="form-control input-edit" id="title" name="title" value="{{$sweet->title}}">
                              
                            </div>
                            <div class="mb-3">
                              <label for="producer" class="form-label">Produttore</label>
                              <input type="text" class="form-control input-edit" id="producer" name="producer" value="{{$sweet->producer}}">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Prezzo</label>
                                <input type="number" class="form-control input-edit" id="price" name="price" value="{{$sweet->price}}">
                              </div>
                              <div class="mb-3">
                                <label for="category_id" class="form-label">Categoria</label>
                                 <select class="form-select" id="category_id" name="category_id">
                                 @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="mb-3 d-flex flex-column">
                                <label for="actual-cover" class="form-label">Copertina Attuale</label>
                                <img src="{{Storage::url($sweet->cover)}}" alt="{{$sweet->title}}" class="img-modifica">
                              </div>
                              <div class="mb-3 mt-3">
                                <label class="form-label">Ricette disponibili</label><br>
                                @foreach ($recipes as $recipe)
                                    <input type="checkbox" class="form-check-input" value="{{$recipe->id}}" id="{{$recipe->id}}" name="recipes[] @if($sweet->recipes->contains($recipe->id)) checked @endif">
                                    <label for="{{$recipe->id}}" class="form-check-label">{{$recipe->name}}</label>
                                @endforeach
                             </div>
                              <div class="mb-3">
                                <label for="cover" class="form-label">Copertina</label>
                                <input type="file" class="form-control input-edit" id="cover" name="cover" value="{{$sweet->cover}}">
                              </div>
                              
                              <div class="mb-3">
                                <label for="description" class="form-label">{{$sweet->description}}"</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control input-edit" ></textarea>
                                
                               </div>
                               <button type="submit" class="btn text-white input-edit" style="margin-top: 7%">Submit</button>
                        </form>
                    </div>
                </div>
            </div>










</x-layout>