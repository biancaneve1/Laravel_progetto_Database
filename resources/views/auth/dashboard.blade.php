<x-layout>


{{-- @dd(Auth::user()->sweets) --}}


<div class="sfondo-2">
    <div class="container">
        <div class="row d-flex ">
            <div class="col-12">
                <h2 class="text-end titolo" >Pagina di {{Auth::user()->name}}</h2>
            </div>
        </div>
    </div>

    <div >
        <div class="container">
            <div class="row d-flex ">
                <div class="col-12">
                    <h5 class="text-end titolo" >{{Auth::user()->name}}</h5>
                    <p class="text-end titolo">{{Auth::user()->email}}</p>
                    
                </div>
            </div>
        </div>
        <div>
            <div class="container ">
                <div class="row d-flex mx-5 ">
                    <div class="col-12 mt-5">
                        <h2 class="text-center titolo" >Le ricette da te inserite ...</h2>
                    </div>
                </div>
            </div>
        <div>
            <div class="container-fluid">
                <div class="row d-flex justify-content-between card-ds">
                    @foreach(Auth::user()->sweets as $sweet)
                    <div class="col-12 col-md-4">
<x-card :sweet='$sweet'/>
                    </div>
                    @endforeach
                    
                </div>
            </div>











</x-layout>