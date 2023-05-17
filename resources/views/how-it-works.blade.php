<x-layout>

<style>
.container {
    margin: 0 auto; 
    max-width: 100%; 
    padding: 0 20px; 
    /*position: relative;
}

.btn-reg {
    position: absolute;
    top:80%;
    left: 43%;
    transform: translateX(-50%);
}
*/

.carousel-caption .btn-primary {
    background-color: rgb(52, 179, 138);
}


</style>

<body>
    <div class="container m-2">
        <img class="" src="{{asset('images/howitworks.png')}}" alt="" style="max-width: 100%; height: auto;">      
    </div>
    <div class="btn-reg">
        <button class="btn btn-primary mb-5" style="background-color: #34b38a">Register</button>
    </div>
</body>

</x-layout>
