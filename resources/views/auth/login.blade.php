<x-layout>


    <div class="sfondo-2">
        <div class="container">
            <div class="row d-flex ">
                <div class="col-12">
                    <h2 class="text-start titolo m-5" >Login</h2>
                </div>
            </div>
        </div>

        <div>
            <div class="container">
                <div class="row d-flex ">
                    <div class="col-12 col-dm-6">
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="mb-3 form-login">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="email" name="email">
                              
                            </div>
                            <div class="mb-3  form-login">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" id="password" name="password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>












</x-layout>