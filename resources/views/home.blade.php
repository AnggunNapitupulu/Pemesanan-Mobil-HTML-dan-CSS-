@extends('layouts.master')

@include('layouts.navigation')

@section('content')


<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<!-- ***** Preloader End ***** -->

<!-- Header -->

@extends('layouts.navigation')

<div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h2>Temukan Mobil Terbaikmu</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h2>Tersedia banyak mobil keren yang bisa kamu rental</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h2>Ayo Pesan Sekarang Juga!</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Mobil Terbaik</h2>
              <a href="/daftarmobil">Lihat Lebih banyak mobil <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="/daftarmobil"><img src="{{ asset('images/offer-1-370x270.jpg') }}" alt=""></a>
              <div class="down-content">
                <a href="/daftarmobil"><h6><small>mulai</small> Rp 7500000 <small>per minggu</small></h6>

                <p>Ayo pesan sekarang sebelum kehabisan</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="/daftarmobil"><img src="{{ asset('images/offer-2-370x270.jpg') }}" alt=""></a>
              <div class="down-content">
                <a href="/daftarmobil"><h6><small>mulai</small> Rp 7500000 <small>per minggu</small></h6>
                  <p>Ayo pesan sekarang sebelum kehabisan</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="/daftarmobil"><img src="{{ asset('images/offer-3-370x270.jpg') }}" alt=""></a>
              <div class="down-content">
                <a href="/daftarmobil"><h6><small>mulai</small> Rp 7500000 <small>per minggu</small></h6>
                  <p>Ayo pesan sekarang sebelum kehabisan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('layouts.footer')
</body>
@endsection
