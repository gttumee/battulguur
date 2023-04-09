@extends('layouts.app') 
@section('title', 'БАТТУЛГУУР | Үйлчилгээ')
@section('content')

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
        <div class="box">
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
  @endsection