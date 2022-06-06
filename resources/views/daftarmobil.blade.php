@extends('layouts.master')

@include('layouts.navigation')

@push('style')
	<style type="text/css">
		.my-active span{
			background-color: #5cb85c !important;
			color: white !important;
			border-color: #5cb85c !important;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush

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


@extends('layouts.navigation')

    <!-- Page Content -->
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

    
    <div class="products">
      <div class="container">
      <div class="col-md-4">
        <input type="text" class="form-control mb-5" placeholder="Cari Mobil..." id="search">
      </div>
        <div class="row">
        @foreach($mobil as $m)
          <div class="col-md-4">
            <div class="product-item">
              <img style="height: 250px;" src="/image/{{ $m->image }}" alt="">

              <div class="down-content">
                <h4>{{ $m->name }}</h4>

                <h6><small>mulai</small> Rp {{$m->harga}} <small>per minggu</small></h6>

                <p>{{ $m->detail }}</p>
                <small>
                    <strong title="passegengers">Stok = {{ $m->stok}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                </small>
                
                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Pesan Sekarang</a>
                </span>
              </div>
            </div>
          </div>
          @endforeach

          

          <!-- <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div> 

    <div class="col">
    <div class="d-flex justify-content-center">
    {!! $mobil->links() !!}
    </div>
    </div>
    
    

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Kel 3</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sewa Sekarang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="/pembayaran" method="POST">
              @csrf
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="date" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="date" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" value="submit" >Sewa Sekarang</button>
                  </div>
              </form>
           </div>
          </div>
        </div>
      </div>
    </div>

@endsection