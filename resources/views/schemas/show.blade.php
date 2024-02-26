<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/booking.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="jquery-3.7.1.min.js"></script>
</head>
<body>
    <x-nav></x-nav>
    <div class="pt-[6%]">
        <div class="">
            <img src="../{{ $movie->image }}" alt="{{ $movie->name }}" class="w-full max-w-64 max-h-72">
            <div class="movie-description">
                <h2 class="text-white">{{ $movie->name }}</h2>
                <p class="text-white">Running Time: {{ $movie->running_time }} minutes</p>
                <p  class="text-white">Genre: {{ $movie->genre->name }}</p>
                <p  class="text-white">Place: {{ $movie->hall->name }}</p>
            </div>
        </div>
    <div class="theatre">
        @foreach(range(1, $schema->rows) as $row)
        <div class="cinema-seats left">
            <div class="cinema-row row-{{ $row }}">
                @foreach(range(1, $seatsPerRow) as $seatNumber)
                    @php
                        $currentSeat = $seats->firstWhere('id', ($row - 1) * $seatsPerRow + $seatNumber);
                        $seatClass = $currentSeat && $currentSeat->status === 'taken' ? 'seat active' : 'seat';
                    @endphp
<div class="seat {{ $seatClass }}" data-seat-id="{{ $currentSeat ? $currentSeat->id : '' }}"></div>
@endforeach
            </div>
        </div>
    @endforeach
    
    @if($schema->sides === 'double')
        @foreach(range(1, $schema->rows) as $index => $row)
            <div class="cinema-seats left {{ $index == 0 ? 'ml-16' : '' }}">
                <div class="cinema-row row-{{ $row }}">
                    @foreach(range(1, $seatsPerRow) as $seatNumber)
                        @php
                            $currentSeat = $seats->firstWhere('id', ($row - 1) * $seatsPerRow + $seatNumber);
                            $seatClass = $currentSeat && $currentSeat->status === 'taken' ? 'seat active' : 'seat';
                        @endphp
<div class="seat {{ $seatClass }}" data-seat-id="{{ $currentSeat ? $currentSeat->id : '' }}"></div>
@endforeach
                </div>
            </div>
        @endforeach
    @endif
    
    
    </div>

    <!-- Reserve Form -->
    <div class="flex justify-center items-center mt-12 ml-52 ">
        <form id="reserve-form" method="POST" action="{{ route('seats.update', ['id' => ':seatId']) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="seat_id" id="seat-id">

            <button type="submit" id="reserve-btn" class="btn btn-primar">Reserve</button>
        </form>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var seats = document.querySelectorAll('.seat');
    seats.forEach(function(seat) {
        seat.addEventListener('click', function() {
            this.classList.toggle('active');
            var seatId = this.dataset.seatId;
            document.getElementById('seat-id').value = seatId;
            var formAction = "/seats/update/" + seatId; // Define the route dynamically
            document.getElementById('reserve-form').setAttribute('action', formAction);
        });
    });
});

    </script>
</body>
</html>
