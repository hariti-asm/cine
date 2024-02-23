<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/booking.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="jquery-3.7.1.min.js"></script>


</head>
<body>
<div class="theatre">
    @foreach(range(1, $schema->rows) as $row)
    <div class="cinema-seats left">
        <div class="cinema-row row-{{ $row }}">
            @foreach(range(1, $seatsPerRow) as $seatNumber)
                @php
                    $currentSeat = $seats->where('id', $row)->where('seat_number', $seatNumber)->first();

                    $seatClass = $currentSeat && $currentSeat->status === 'taken' ? 'seat active' : 'seat';
                    // dd($seatClass);
                @endphp
                <div class="{{ $seatClass }}"></div>
            @endforeach
        </div>
    </div>
@endforeach


@if($schema->sides === 'double')
    @foreach(range(1, $schema->rows) as $index => $row)
        <div class="cinema-seats left {{ $index == 0 ? 'ml-16' : '' }}">
            <div class="cinema-row row-{{ $row }}">
                @foreach(range(1, $seatsPerRow) as $seatNumber)
                {{-- @dd($seatNumber); --}}
                    @php
                        $currentSeat = $seats->firstWhere('id', $seatNumber);
                        // @dd($currentSeat);

                        $seatClass = $currentSeat && $currentSeat->status === 'taken' ? 'seat active' : 'seat';
                    @endphp
                    <div class="{{ $seatClass }}"></div>
                @endforeach
            </div>
        </div>
    @endforeach
@endif




</div>
<script>
    var seats = document.querySelectorAll('.cinema-seats .seat');
    seats.forEach(function(seat) {
        seat.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });
</script>

</body>
</html>
