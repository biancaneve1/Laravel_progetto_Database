<x-layout>

    <div class="sfondo-ricetta">
        <div class="container-fluid  ">
                <div class="row d-flex">
                    <div class="col-12 ">
                        <h2 class="text-center titolo mt-5" >Inserisci una ricetta</h2>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="container-fluid  ">
                        <div class="row d-flex">
                            <div class="col-12 col-md-8">
                              {{-- @dd($sweets) --}}
                                <form method="POST" action="{{route('recipes.store')}}" enctype="multipart/form-data" class="col-lg-8 offset-lg-5 mt-5">
                                    @csrf
                                    <div class="mb-3">
                                      <label for="name" class="form-label">Nome Ricetta</label>
                                      <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label"></label>
                                        <input type="file" class="form-control" id="image" name="image">
                                      </div>
                                      <div class="mb-3 mt-3">
                                        <label class="form-label">Ricette disponibili</label><br>
                                        @foreach ($sweets as $sweet)
                                            <input type="checkbox" class="form-check-input" value="{{$sweet->id}}" id="{{$sweet->id}}" name="sweets[]">
                                            <label for="{{$sweet->id}}" class="form-check-label">{{$sweet->title}}</label>
                                        @endforeach
                                     </div>
                                    <div class="mb-3">
                                        <label for="time" class="form-label">Miunti di preparazione</label>
                                        <input type="number" class="form-control" id="time" name="time" value="{{old('time')}}">
                                      </div>
                                    </div>
                                    <div class="mb-3 col-lg-7 offset-lg-3"><br>
                                      <p class="passaggi">Passaggi</p>
                                      <label for="instructions" class="form-label"></label>
                                      <div>
                                      <textarea class="textarea-ricette " name="instructions" id="" cols="77" rows="10">{{old('instructions')}}</textarea>
                                      <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                    </div>
                                  </form>
                              </div>
                        </div>
                    </div>
        












</x-layout>