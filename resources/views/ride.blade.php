<x-layout>
    <div class="container-fluid" style="display: flex; height: 30rem;">
        <div style="width: 30%; height: 100%; padding: 1rem;">
            <form action="/ride" method="POST" style="height: 100%;">
                @csrf
                <label for="start_station">Select starting station</label>
                <select class="form-select" name="start_station" aria-label="Default select example">
                    <option selected disabled>Select starting station</option>
                    @foreach ($stations as $station)
                        <option value="{{ $station->id }}">{{ $station->name }}</option>
                    @endforeach
                </select>

                <label for="end_station">Select destination station</label>
                <select class="form-select" name="end_station" aria-label="Default select example">
                    <option selected disabled>Select destination station</option>
                    @foreach ($stations as $station)
                        <option value="{{ $station->id }}">{{ $station->name }}</option>
                    @endforeach
                </select>

                <button type="submit">Submit</button>
            </form>
        </div>
        <div style="width: 60%; height: 100%; padding: 1rem; overflow-y: auto;">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($stations as $station)
                    <div class="col mb-4">
                        <div class="card" style="box-shadow: 0 0 20px #34b38a; height: 100%;">
                            <div class="card-body" style="text-align: center">
                                <h2 class="card-title pb-3"><b>{{ $station->name }}</b></h2>
                                {{-- <p>ID: {{ $station->id }}</p> --}}
                                <p>Address: {{ $station->address }}</p>                            
                                <p>Capacity: {{ $station->capacity }}</p> 
                                <i class="fa fa-battery-full" aria-hidden="true"></i>
                                <i class="fa-solid fa-square-parking"></i>                       
                                <img src="/images/{{ $station->photo }}" alt="photo" style="width: 100%; height: 50%; object-fit:cover">
                                <hr style="font-size: 1rem; border:1px solid #34b38a;">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
