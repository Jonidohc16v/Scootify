<x-layout>
    <!-- Your HTML code for the ride page -->
    {{-- @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif --}}


    <div style="display: flex; justify-content: space-between;">
        <!-- Ride Form -->
        <div id="pickup-form-container">
            <form action="{{ route('ride.pickup') }}" method="POST" id="firstForm" style="height: 50%;">
                @csrf
                <label for="station">Select Station:</label>
                <select name="station" id="station" style="width: 100%;">
                    @foreach ($stations as $station)
                        <option value="{{ $station->id }}">{{ $station->name }}</option>
                    @endforeach
                </select>
                <label for="escooter">Select E-scooter:</label>
                <select name="escooter" id="escooter" style="width: 100%;">
                    @foreach (\App\Models\Escooter::all() as $escooter)
                        <option value="{{ $escooter->id }}" data-station-id="{{ $escooter->station_id }}">
                            {{ $escooter->id }}</option>
                    @endforeach
                </select>
                <br><br>
                <button type="submit" name="action" value="pickup" class="btn btn-primary me-3 btn-sm"
                    style="background-color: #34b38a">Pickup E-scooter</button>
            </form>

            {{-- DROP OFF SCOOTER FORM --}}

            <form action="{{ route('ride.dropoff') }}" method="POST" id="secondForm" style="height: 50%;">
                @csrf
                <label for="station">Select Station:</label>
                <select name="station" id="station1" style="width: 100%;">
                    @foreach ($stations as $station)
                        <option value="{{ $station->id }}">{{ $station->name }}</option>
                    @endforeach
                </select>
                <label for="escooter">Select E-scooter:</label>
                <select name="escooter" id="escooter1" style="width: 100%;">
                    @foreach (\App\Models\Escooter::all() as $escooter)
                        <option value="{{ $escooter->id }}" data-station-id="{{ $escooter->station_id }}">
                            {{ $escooter->id }}</option>
                    @endforeach
                </select>
                <br><br>
                <button type="submit" name="action" value="park" class="btn btn-primary me-3 btn-sm"
                    style="background-color: #34b38a">Park E-scooter</button>
            </form>
        </div>


        <!-- Stations cards -->
        <div style="width: 60%; height: 100%; padding: 1rem; overflow-y: auto;">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($stations as $station)
                    <div class="col mb-4">
                        <div class="card" style="box-shadow: 0 0 20px #34b38a; height: 100%;">
                            <div class="card-body" style="text-align: center">
                                <h2 class="card-title pb-3"><b>{{ $station->name }}</b></h2>

                                <p>{{ $station->address }}</p>

                                <div>
                                    <p>Capacity: {{ $station->capacity }}</p>
                                    <p><i class="fa fa-battery-full" aria-hidden="true"></i>
                                        {{ $station->available_escooters }}
                                        <i class="fa-solid fa-square-parking"></i> {{ $station->parked_escooters }}
                                    </p>
                                    <img src="/images/{{ $station->photo }}" alt="photo"
                                        style="width: 100%; height: 50%; object-fit:cover">

                                    <hr style="font-size: 1rem; border:1px solid #34b38a;">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</x-layout>
