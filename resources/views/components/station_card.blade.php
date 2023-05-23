



<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel" style=" margin: 2rem auto; width:60%">
    <h2>Discover Our stations
        <br> all over Luxembourg
    </h2>
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="2"
        aria-label="Slide 3"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="3"
        aria-label="Slide 4"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="4"
        aria-label="Slide 5"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="5"
        aria-label="Slide 6"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselBasicExample"
        data-mdb-slide-to="6"
        aria-label="Slide 1"
      ></button>
    </div>
  
    <!-- Inner -->
    <div class="carousel-inner">
      <!-- Single item -->
<div class="carousel-item active">
    <img    src="{{asset('images/kirchberg.jpeg')}}" 
            class="d-block w-100"  
            alt="Sunset Over the City"
            style="height:25rem"/>
            <div class="carousel-caption text-end top-0">
        <h4 style="text-shadow: #34b38a 1px 0 10px;"> Kirchberg - Lux Expo</h4>
    </div>
</div>

  <!-- Single item -->
  <div class="carousel-item">
    <img    src="{{asset('images/clochedor.jpeg')}}" 
            class="d-block w-100"  
            alt="Sunset Over the City"
            style="height:25rem"/>
            <div class="carousel-caption text-start top-0">
        <h4 style="text-shadow: #34b38a 1px 0 10px;">Cloche d'Or</h4>
    </div>
</div>

  <!-- Single item -->
  <div class="carousel-item">
    <img    src="{{asset('images/gare.jpg')}}" 
            class="d-block w-100"  
            alt="Sunset Over the City"
            style="height:25rem"/>
            <div class="carousel-caption text-start top-0">
        <h4 style="text-shadow: #34b38a 1px 0 10px;">Central Station</h4>
    </div>
</div>

<!-- Single item -->
<div class="carousel-item">
    <img    src="{{asset('images/glacis.jpg')}}"  
            class="d-block w-100" 
            alt="Sunset Over the City"
            style="height:25rem"/>
    <div class="carousel-caption text-end top-0">
        <h4 style="text-shadow: #34b38a 1px 0 10px;">Theater</h4>
    </div>
</div>

<!-- Single item -->
<div class="carousel-item">
  <img  src="{{asset('images/grund.jpg')}}" 
        class="d-block w-100" 
        alt="Sunset Over the City" 
        style="height:25rem"/>
  <div class="carousel-caption text-start bottom-0">
      <h4 style="text-shadow: #34b38a 2px 2px 2px 2px;">Grund</h4>
  </div>
</div>

<!-- Single item -->

<div class="carousel-item">
  <img  src="{{ asset('images/hamilius.jpg') }}" 
        class="d-block w-100" 
        alt="Sunset Over the City" 
        style="height:25rem">
  <div class="carousel-caption position-absolute top-0 end-0">
    <h4 style="text-shadow: #34b38a 1px 0 10px;">Hamilius</h4>
  </div>
</div>
    <!-- Inner -->
  
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Carousel wrapper -->