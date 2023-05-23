<x-layout>

<style>
.container {
    margin: 0 auto; 
    max-width: 100%; 
    padding: 0 20px; 
}
 

.carousel-caption .btn-primary {
    background-color: rgb(52, 179, 138);
}


</style>

<body>
    <div class="container m-2">
        <img class="" src="{{asset('images/howitworks.png')}}" alt="" style="max-width: 100%; height: auto;">      
    </div>
    @auth
    <div class="btn-reg mt-3">
        <a href="/plans">
        <button class="btn btn-primary mb-5" style="background-color: #34b38a"><i class="fa-solid fa-user"> </i>Buy Plan</button>
        </a>
    </div>
    @else
    <div class="btn-reg mt-3">
        <a href="/register">
        <button class="btn btn-primary mb-5" style="background-color: #34b38a"><i class="fa-solid fa-user"> </i>SUBSCRIBE</button>
        </a>
    </div>
    @endauth

</body>

</x-layout>

