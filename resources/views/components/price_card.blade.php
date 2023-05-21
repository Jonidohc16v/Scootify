<div class="row row-cols-1 row-cols-md-3 g-4 container-fluid" style="height:30rem; width: 60%; margin: 1rem auto">

  
  <div class="col">
   
      
    <div class="card h-100" style="box-shadow: 0 0 20px #34b38a">
      
      <div class="card-body" style="margin-top: 45%; text-align:center">
        @foreach($products as $product)
        <h2 class="card-title pb-3"><b>{{ $product->name }}</b></h2>
        <h5> {{ $product->description }} </h5>
        <p style="font-size:4rem">{{ $product->price }}</p>   
        <hr style="font-size: 1rem; border:1px solid #34b38a;">      
        @endforeach
        {{-- <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-primary pull-right">Choose</a>          --}}
      </div>
     
    </div>
    
    
  </div>

  
</div>