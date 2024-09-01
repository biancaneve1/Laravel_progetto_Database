<x-layout>

    <div class="sfondo-3">
        <div class="container-fluid  ">
                <div class="row d-flex">
                    <div class="col-12 mt-5">
                        <h2 class="text-center titolo mt-5" >Modifica la ricetta{{$recipe->name}}</h2>
                    </div>
                </div>
            </div>

            <div class="sfondo-3">
                <div class="container-fluid  ">
                        <div class="row d-flex">
                            <div class="col-12 col-md-8">
                              
                                <form method="POST" action="{{route('recipes.update',$recipe)}}" enctype="multipart/form-data" class="col-lg-8 offset-lg-5 mt-5">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                      <label for="name" class="form-label fw-bold ">Nome Ricetta</label>
                                      <input type="text" class="form-control" id="name" name="name" value="{{$recipe->name}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label"></label>
                                        <input type="file" class="form-control" id="image" name="image">
                                      </div> 
                                      <div class="mb-3 mt-5">
                                      <h4>Ricetta attuale</h4>
                                      <img src="{{Storage::url($recipe->image)}}" alt="{{$recipe->name}}" class="img-fluid">
                                      </div>
                                      <div class="mb-3 mt-5">
                                        <label class="form-label fw-bold">Ricette disponibili</label><br>
                                        @foreach ($sweets as $sweet)
                                            <input type="checkbox" class="form-check-input" value="{{$sweet->id}}" id="{{$sweet->id}}" name="sweets[]"
                                            @if($recipe->sweets->contains($sweet->id)) checked @endif>
                                            <label for="{{$sweet->id}}" class="form-check-label">{{$sweet->title}}</label>
                                        @endforeach
                                     </div>
                                    <div class="mb-3">
                                        <label for="time" class="form-label mt-3">Miunti di preparazione</label>
                                        <input type="number" class="form-control" id="time" name="time" value="{{$recipe->time}}">
                                      </div>
                                    <div class="mb-3">
                                      <label for="instructions" class="form-label fw-bold mt-4 ">Passaggi</label>
                                      <div>
                                      <textarea class=" mt-3" name="instructions" id="instructions" cols="77" rows="10">{{$recipe->instructions}}</textarea>
                                    </div>
                                    </div>
                                     <button type="submit" class="btn btn-primary btn-edit-2 mt-4">Modifica</button>
                                  </form>

                            </div>
                        </div>
                    </div>
        












</x-layout>