@extends('layouts.app') 
@section('title', 'БАТТУЛГУУР | Бидний тухай')
@section('content')
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Бидний тухай
              </h2>
              <img src="images/plug.png" alt="">
            </div>
            <p>
              Манай компани нь 2010 оноос хойш тасралтгүй цахилгаан эрчим хүч хяналтын камер дохиолол хамгаалалтын
              чиглэлээр мэргэшсэн хамт олон танд чанартай
              найдвартай үйлчилгээ үзүүлэх болно.
            </p>
            <a href="">
              Илүү ихийг
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="images/about-img1.jpg" alt="" />
            </div>
            <div class="img-box b2">
              <img src="images/about-img2.jpg" alt="" />
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>
  @endsection