@extends('layout')
@section('title', 'fitness_centers')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/fitness_centers.css') }}">
@endsection

@section('content')
<div class="background-section">
    <div class="title">
        <p>PlaySpace</p>
    </div>

    <div class="fitness_image">
        <img src="{{ asset('images/png-transparent-woman-badminton-player-sport-badminton-ball-game-poster-playing-badminton-beauty-physical-fitness-fitness-sports-equipment-removebg-preview.png') }}">
    </div>

    <div class="sub_title">
        <p>Indoor Stadiums</p>
    </div>
    
    <div class="container mt-5 mb-5">
        
        
        <!-- Flexbox Container -->
        <div class="fitness-center-wrapper d-flex justify-content-around flex-wrap mt-4">
            <!-- Indoor stadium 1 -->
            <div class="fitness-card">
                <img src="{{ asset('images/supermind.jpg') }}" class="fitness-image" alt="SuperMind Indoor Sports Complex">
                <div class="fitness-card-body">
                    <h5 class="fitness-title">SuperMind</h5>
                    <p class="fitness-details">
                        <strong>Sports Complex in MATARA</strong><br>
                        7+ years in business<br>
                        <i>Open: 08.00 am</i><br>
                        <i>Close: 08.00 pm</i><br>
                        070 150 2150<br>
                        XG4G+3M5, Matara.
                    </p>
                    <a href="#" class="btn-booking">Booking</a>
                </div>
            </div>
            <!-- Indoor stadium 2 -->
            <div class="fitness-card">
                <img src="{{ asset('images/Ausway.jpg') }}" class="fitness-image" alt="Ausway Fustal">
                <div class="fitness-card-body">
                    <h5 class="fitness-title">Ausway Futsal</h5>
                    <p class="fitness-details">
                        <strong>Indoor playground in MATARA</strong><br>
                        3+ years in business<br>
                        <i>Open: 08.00 am</i><br>
                        <i>Close: 08.00 pm</i><br>
                        077 347 2389<br>
                        133 Kotikagoda Road,Matara.
                    </p>
                    <a href="#" class="btn-booking">Booking</a>
                </div>
            </div>
            <!-- Indoor stadium 3 -->
            <div class="fitness-card">
                <img src="{{ asset('images/kotiwala.jpg') }}" class="fitness-image" alt="Kotawila Indoor Games">
                <div class="fitness-card-body">
                    <h5 class="fitness-title">Kotawila Indoor</h5>
                    <p class="fitness-details">
                        <strong>Indoor Stadium in MATARA</strong><br>
                        2+ years in business<br>
                        <i>Open: 08.00 am</i><br>
                        <i>Close: 08.00 pm</i><br>
                        077 212 5449<br>
                        XF8W+WF7, Kotawila North.
                    </p>
                    <a href="#" class="btn-booking">Booking</a>
                </div>
            </div>
        </div>
    </div><br><br><br><br>

    <div class="contact_cont">
        
        <div class="address">
            <p>No 138/1,<br> Kumarathunga Rd,<br> Matara.</p>
        </div>
        
        <div class="phone">
            <p>+94 717730317 - Udara
            <br>+94 717853639 - Thisari
            </p>
        </div>
        
        <div class="email">
            <p>udarasandakelum@gmail.com
            <br>thisarijayawickrama@gmail.com
            </p>
        </div>
    </div>

    <!-- <div class="contact_icon">
        <div class="address_icon">
            <img src="{{ asset('images/location icon.png') }}">
        </div>

        <div class="phone_icon">
            <img src="{{ asset('images/phone icon.png') }}">
        </div>

        <div class="email_icon">
            <img src="{{ asset('images/email icon.png') }}">
        </div>
    </div> -->

    <div class="social_media">
        <div class="telegram">
            <img src="{{ asset('images/icons8-telegram-app-96.png') }}">
        </div>
        <div class="inster">
            <img src="{{ asset('images/icons8-instagram-96.png') }}">
        </div>
        <div class="tiktok">
            <img src="{{ asset('images/icons8-tiktok-96.png') }}">
        </div>
        <div class="x">
            <img src="{{ asset('images/icons8-twitterx-96.png') }}">
        </div>
        <div class="messanger">
            <img src="{{ asset('images/icons8-facebook-messenger-96.png') }}">
        </div>
        <div class="whatsapp">
            <img src="{{ asset('images/icons8-whatsapp-96.png') }}">
        </div>
    </div>

    <div class="payment_meth">
        <div class="visa">
            <img src="{{ asset('images/1156753_finance_payment_visa_icon.png') }}">
        </div>
        <div class="master">
            <img src="{{ asset('images/1156750_finance_mastercard_payment_icon.png') }}">
        </div>
        <div class="paypal">
            <img src="{{ asset('images/206675_paypal_method_payment_icon.png') }}">
        </div>
        <div class="rupay">
            <img src="{{ asset('images/701549_bank_card_payment_rupay_icon.png') }}">
        </div>
        <div class="american">
            <img src="{{ asset('images/1933704_american express_amex_charge_credit card_payment_icon.png') }}">
        </div>
    </div>
    <div class="footer1">
        <p>Copyright © 2024 Arena S.p.A - Registered office: C.da Cisterna, 84/85 62029 Tolentino (MC) SriLanka</p>
    </div>

    <div class="footer2">
        <p>Capital 3.000.000 euros - VAT/Tax code 00660160433 - registered in the Macerata companies register under no. 00660160433</p>
    </div>
</div>
@endsection