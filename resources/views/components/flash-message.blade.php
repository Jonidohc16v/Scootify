@if (session()->has('message'))
    <div class="mx-auto text-center translate-middle-x  text-white px-2 py-1 mb-4 rounded text-center" id="userMsg" style="background-color:#34b38a; margin:15px auto;">
        
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
