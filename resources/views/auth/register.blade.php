<x-layout>

    <div class="sfondo-register">
        <div class="container">
            <div class="row d-flex ">
                <div class="col-12">
                    <h2 class="text-start titolo m-5">Registrati</h2>
                </div>
            </div>
        </div>


        <div>
            <div class="container">
                <div class="row d-flex flex-row">
                    <div class="col-12 col-md-6">
                        <form method="POST" action="{{route('register')}}" class="form-register">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                               </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label text-white">Password</label>
                              <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label text-white">Confirm your Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                          
                    </div>
                    <div class="col-5 text-end mx-5 mt-5 text-white">
                        <h3 class="fw-bold text-center">Per Tutti I Gusti</h3>
                        <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laudantium, atque officiis ut quidem esse quas sint      corporis           fugit vel possimus quod minus veritatis ullam, obcaecati repudiandae veniam. In, eos!
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto modi architecto perspiciatis temporibus eius, repellendus provident voluptates sed animi pariatur inventore atque sunt vitae nostrum maiores itaque explicabo tempore assumenda.
                          
                        </p>
                    </div>
                </div>

            </div>















</x-layout>