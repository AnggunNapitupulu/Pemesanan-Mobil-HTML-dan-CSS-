@extends('layouts.master')

@include('layouts.navigation')

@section('content')
<body style="background-color: #cdf7f2;">

<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div> 

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
    <div class="container mt-5">
        <div class="row">
                <div class="col-lg-12">
                    <h2>FORM SARAN</h2>
                    <p>Berikan saran anda Untuk Perbaikan<br>Kami kedepannya</p>
                    <a class="mt-3 mb-3 btn btn-primary" href="/">Kembali</a>

                    @if(Session::has('status'))
                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                    @endif

                    <form action="" method="post">

                        {{ csrf_field() }}

                        <label for="name">Nama</label>
                        <input class="form-control" type="text" name="name" placeholder="nama anda" required/>
                        
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="alamat email anda" required/>
                        
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="" placeholder="pesan anda" cols="30" rows="10" required></textarea>

                        <br><br>

                        <button type="submit" class="btn btn-success btn-lg">Send</button>
                    <form>
                </div>
            </div>
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

</body>

@endsection