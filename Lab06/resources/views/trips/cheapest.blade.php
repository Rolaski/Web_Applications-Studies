<!doctype html>
<html lang="pl" data-bs-theme="">
    @include('shared.head', ['pageTitle' => 'Losowe wycieczki'])
<body>
@include('shared.navbar')

<div id="cheapest-trips" class="container mt-5">
    <div class="row">
        <h1>Najtańsze wycieczki</h1>
    </div>
    <div class="row">
        @forelse ($cheapestTrips as $trip)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/' . $trip->img) }}" class="card-img-top" alt="{{ $trip->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $trip->name }}</h5>
                        <p class="card-text">{{ $trip->description }}</p>
                        <a href="{{ route('trips.show', ['id' => $trip->id]) }}" class="btn btn-primary">Więcej szczegółów...</a>
                    </div>
                </div>
            </div>
        @empty
            <p>Brak dostępnych wycieczek.</p>
        @endforelse
    </div>
</div>

@include('shared.footer')
</body>
</html>
