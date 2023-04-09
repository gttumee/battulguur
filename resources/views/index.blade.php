@extends('layouts.app') 
@section('title', 'БАТТУЛГУУР | Эхлэл')
@section('content')
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail_box">
              <h1>
                Цахилгаан <br>
                Эрчим хүч <br>
                Хяналтын камер
              </h1>
              <p>
                Манай компани нь 2010 оноос хойш тасралтгүй цахилгаан эрчим хүч хяналтын камер дохиолол хамгаалалтын
                чиглэлээр мэргэшсэн хамт олон танд чанартай
                найдвартай үйлчилгээ үзүүлэх болно.
              </p>
              <a href="{{route('contact')}}" class="">
                Холбоо барих
            </div>
          </div>
          <div class="col-lg-5 col-md-6 offset-lg-1">
            <div class="img_content">
              <div class="img_container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="img-box">
                        <img src="images/slider-img.jpg" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="images/slider-img.jpg" alt="">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                        <img src="images/slider-img.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->
  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Манай үйлчилгээ
        </h2>
        <img src="images/plug.png" alt="">
      </div>

      <div class="service_container">
        <div class="box">
          <div class="img-box">
            <img src="images/s1.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Цахилгаан эрчим хүч суурьлуулалт
            </h5>
            <p>
              Бүх төрлийн цахилгаан хэрэгсэл холболт чанарын өндөр төвшинд суурлуулна
            </p>
          </div>
        </div>
        <div class="box active">
          <div class="img-box">
            <img src="images/s2.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Хяналтын камер суурлуулалт
            </h5>
            <p>
              Хяналтын камерийг чанарын өндөр төвшинд суурьлуулна
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s3.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Өндөр хүчдэл суурьлуулалт
            </h5>
            <p>
              Өндөр хүчдэл суурьлуулалт болон засвар үйлчилгээ чанарын өндөр түвшинд гүйцэтгэнэ.
            </p>
          </div>
        </div>
        <div class="box ">
          <div class="img-box">
            <img src="images/s4.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Бүх төрлийн цахилгаан барааны завсар үйлчилгээ
            </h5>
            <p>
              Бүх төрлийн цахилгаан барааны завсар үйлчилгээ чанарын өндөр түвшинд гүйцэтгэнэ.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s5.png" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Цахилгаан эрчим хүчний зөвөлгөө сургалт
            </h5>
            <p>
              Цахилгаан эрчим хүчний зөвөлгөө сургалт семинар байнга зохион байгуулж байна.
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Илүү ихийг
        </a>
      </div>
    </div>
  </section>
  <!-- end service section -->
  <!-- end service section -->

  <!-- about section -->
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

  <!-- end about section -->

  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Гүйцэтгэсэн ажилууд
        </h2>
        <img src="images/plug.png" alt="">
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/blog1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Өндөр хүчдэл суурлуулалт
              </h5>
              <p>
                Баянхонгор аймгын сумд өндөр хүчдэл суурьлуулсан
              </p>
              <a href="{{route('performed')}}">
                дэлгэрэнгүй үзэх
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/blog2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Хяналтын камер суурьлуулалт
              </h5>
              <p>
                үйлдвэрийн бүрэн камержуулалт
              </p>
                <a href="{{route('performed')}}">
                  дэлгэрэнгүй үзэх
                </a>
                </button>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Холбоо барих
        </h2>
        <img src="images/plug.png" alt="">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Нэр" />
            </div>
            <div>
              <input type="email" placeholder="И-мэйл" />
            </div>
            <div>
              <input type="text" placeholder="Утасны дугаар" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Зурвас" />
            </div>
            <div class="d-flex ">
              <button>
                Илгээх
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
              <iframe
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
  @endsection