<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/ticket.css">
    {{-- <link rel="stylesheet" href="../../css/style.css"> --}}
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
 

{{-- <x-nav></x-nav> --}}
<div class="ticket created-by-anniedotexe">
<div class="left">
<img class="image pr-[-10%]" src="../../{{$movie->image}}">
    
    <p class="admit-one">
        <span>Filmlane</span>
        <span>Filmlane</span>
        <span>Filmlane</span>
    </p>
    
</img>
<div class="ticket-info">
    <p class="date">
        <span>{{ ucfirst(\Carbon\Carbon::parse($movie->playing_date)->format('l')) }}
        </span>
        <span class="june-29">{{ ucfirst(\Carbon\Carbon::parse($movie->playing_date)->format('F jS')) }}
        </span>
        <span>{{ \Carbon\Carbon::parse($movie->playing_date)->format('Y') }}
        </span>
    </p>
    <div class="show-name">
        <h1>{{$movie->name}} </h1>
        <h2>{{$movie->producer}}</h2>
    </div>
    <div class="time">
        <p>
            {{ \Carbon\Carbon::parse($movie->start_time)->format('g:i A') }}
            <span>TO</span>
            {{ \Carbon\Carbon::parse($movie->end_time)->format('g:i A') }}
        </p>        <p>DOORS <span>@</span> 7:00 PM</p>
    </div>
    <p class="location"><span>${{$seat->price}}</span>
        <span class="separator"><i class="far fa-smile"></i></span>
        @if($seat->type === 'VIP')
            <span>Seat {{$seat->type}} , {{$seat->seat_number}}, {{$movie->hall->name}}</span>
        @else
            <span>Seat Number {{$seat->seat_number}}, {{$movie->hall->name}}</span>
        @endif
            </p>
</div>
</div>
<div class="right">
<p class="admit-one">
    <span>Filmlane</span>
    <span>Filmlane</span>
    <span>Filmlane</span>
</p>
<div class="right-info-container">
    <div class="show-name">
        <h1>{{$movie->name}} </h1>
    </div>
    <div class="time">
        <p>
            {{ \Carbon\Carbon::parse($movie->start_time)->format('g:i A') }}
            <span>TO</span>
            {{ \Carbon\Carbon::parse($movie->end_time)->format('g:i A') }}
        </p>         <p>DOORS <span>@</span> 7:00 PM</p>
    </div>
    <div class="barcode">
        <img
         src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb"
         
         alt="QR code">
    </div>
    <p class="ticket-number">
        #20030220
    </p>
</div>
</div>
</div> 
<button >Send Ticket by Email</button>

</body>
</html>

