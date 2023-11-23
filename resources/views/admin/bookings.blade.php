@extends('layouts.layout')
@section('content')

<style>
    .clicked-card {
        background-color:#F5F5F5; 
    }
    .light-blue {
        background-color: #fff; 
    }
    
    .card-body, .card-body * {
        line-height: 0.5;
    }
    
    .tags {
        margin-top: 10px; 
    }
    .reserve-card{
        border: 1px solid #ccc;
        margin: 5px;
        border-radius: 5px
    }
    .btn-claim{
   
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
        border-bottom-style: solid;
        border-bottom-width: 1.11667px;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-image-slice: 100%;
        border-image-source: none;
        border-image-width: 1;
        border-left-color: rgb(104, 179, 200);
        border-left-style: solid;
        border-left-width: 1.11667px;
        border-right-color: rgb(104, 179, 200);
        border-right-style: solid;
        border-right-width: 1.11667px;
        border-top-color: rgb(104, 179, 200);
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
        border-top-style: solid;
        border-top-width: 1.11667px;
        box-sizing: border-box;
        color: rgba(255, 255, 255, 0.7);
        cursor: pointer;
        display: inline-block;
        font-family: Muli, Arial, sans-serif;
        font-feature-settings: normal;
        font-kerning: auto;
        font-language-override: normal;
        font-optical-sizing: auto;
        font-size: 18px;
        font-size-adjust: none;
        font-stretch: 100%;

        font-weight: 400;
        line-height: 24px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        outline-color: rgba(255, 255, 255, 0.7);
        outline-style: none;
        outline-width: 0px;

        padding-bottom: 10px;
        padding-left: 16px;
        padding-right: 16px;
        padding-top: 10px;
        text-align: center;
    }
</style>

<div class="card custom-card ">
    <h5 class="card-header">Booking Details</h5>
   @foreach ($booking as $index => $bookings)
    
   <div class="card-body d-flex flex-column pt-3 reservation-card reserve-card" id="reservation-card-{{ $index }}">
    <p class="card-text">
        <span class="booking-date"> Event date: {{ $bookings->event_date }}</span>
        <div class="name-part">
            <span class="person-name"><strong>{{ ucwords($bookings->title) }} {{ ucwords($bookings->first_name) }} {{ ucwords($bookings->last_name) }}</strong></span>
        </div>
    </p>
    <div class="d-flex justify-content-between">
        <div>
            <p class="property-name">{{ $bookings->product_title }}  - {{ $bookings->product_city }} </p>
            <p>1 Deluxe Room, Pool View (1 Adult)</p>
            <p>Client Number: {{ $bookings->phone }}</p>
            <div class="extra-info">
                Booked On {{ $bookings->created_at }}
                <small><em>{{ $bookings->created_at->diffForHumans() }}</em></small>
                |
                <span class="orange">Pay@Hotel</span>
            </div>
        </div>
        <div>
            <button class="btn btn-info btn-lg btn-claim claim-button" id="claim-button-{{ $index }}">Claim</button>
        </div>
    </div>
    <div class="tags">
        <span class="label label-default hot-green">PARTNER</span>
        <span class="label label-default" style="background-color: rgb(216, 27, 96);">STRICTLY PAY ON ARRIVAL</span>
        <span class="label label-default " style="background-color: rgb(245, 105, 84);">DO NOT DEDUCT COMMISSION FROM PREPAID BOOKINGS</span>
    </div>
</div>
       
   @endforeach

   <nav aria-label="Page navigation">
    <ul class="pagination justify-content-end">
        @if ($booking->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $booking->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        @endif

        @for ($i = 1; $i <= $booking->lastPage(); $i++)
            <li class="page-item {{ $booking->currentPage() == $i ? 'active' : '' }}">
                <a class="page-link" href="{{ $booking->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        @if ($booking->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $booking->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">Next</span>
            </li>
        @endif
    </ul>
</nav>


</div>

<hr class="my-5" />

<script>
    var claimButtons = document.querySelectorAll('.claim-button');
    var reservationCards = document.querySelectorAll('.reservation-card');

    claimButtons.forEach((button, index) => {
        var isClaimed = localStorage.getItem('isClaimed-' + index) === 'true';

        if (isClaimed) {
            button.innerText = 'Unclaim';
            reservationCards[index].classList.remove('light-blue');
            reservationCards[index].classList.add('clicked-card');
        }

        button.addEventListener('click', function () {
            if (isClaimed) {
                button.innerText = 'Claim';
                reservationCards[index].classList.remove('clicked-card');
                reservationCards[index].classList.add('light-blue');
            } else {
                button.innerText = 'Unclaim';
                reservationCards[index].classList.remove('light-blue');
                reservationCards[index].classList.add('clicked-card');
            }
            isClaimed = !isClaimed;
            localStorage.setItem('isClaimed-' + index, isClaimed);
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
