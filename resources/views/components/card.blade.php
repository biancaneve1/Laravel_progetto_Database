


<div class="card">
        <img src="{{Storage::url($sweet->cover)}}" class="card-img-top" alt="">
        <div class="card-body">
           <h5 class="card-title text-center">{{$sweet->title}}</h5>
             <p class="card-text">{{$sweet->producer}}</p>
             <p class="card-text">{{Str::limit($sweet->description,10)}}</p>
             <p class="card-number">€{{$sweet->price}},00</p>
          <a href="{{route('sweets.show', $sweet)}}" class="btn-card p-1" >Go somewhere</a>
        </div>
</div>

