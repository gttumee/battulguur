@extends('layouts.app') 
@section('title', 'БАТТУЛГУУР | Холбоо барих')
@section('content')
  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Холбоо барих
        </h2>
        @if (session('flash_message'))
            <div class="flash_message">
                {{ session('flash_message') }}
            </div>
        @endif
        <img src="images/plug.png" alt="">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="/contact" method="POST">
            @csrf
            <div>
              <input type="text" placeholder="Нэр" name="name" />
            </div>
            <div>
              <input type="email" placeholder="И-мэйл" name="email" />
            </div>
            <div>
              <input type="text" placeholder="Утасны дугаар" name="phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Зурвас" name="text" />
            </div>
            <div class="d-flex ">
              <button type="submit">
                Илгээх
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
              <iframe
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Sukhbaatar+District+Administration+Building,+Ulaanbaatar+14525"
                width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection

  <!-- end contact section -->

  <!-- end info section -->

