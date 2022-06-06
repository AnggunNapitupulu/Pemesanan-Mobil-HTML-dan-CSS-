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
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Bro <em>Mobil</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item">
                    <a class="nav-link" href="/information">Informasi
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>

                <li class="nav-item"><a class="nav-link" href="/daftarmobil">Daftar Mobil</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="/login">Login
                    <span class="sr-only">(current)</span>
                  </a>
              </li> 
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h2>Proses Pembayaran</h2>
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

    <!-- Main -->
    <div class="container-fluid px-0" id="bg-div">
    <div class="row justify-content-center">
        <div class="col-lg-9 col-12">
            <div class="card card0">
                <div class="d-flex" id="wrapper">
                    <!-- Sidebar --> <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <div class="row pt-3" id="border-btm">
                            <div class="col-8">
                                <div class="row justify-content-right">
                                    <div class="col-12">
                                        <p class="mb-0 mr-4 mt-4 text-right">customer@email.com</p>
                                    </div>
                                </div>
                                <div class="row justify-content-right">
                                    <div class="col-12">
                                        <p class="mb-0 mr-4 text-right">Pay <span class="top-highlight">$ 100</span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center" id="test">Pay</div>
                        </div>
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Enter bank details to pay</h3>
                                            <form onsubmit="event.preventDefault()">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="bk_nm" placeholder="Bank krut"> <label>BANK NAME</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" name="ben_nm" id="ben-nm" placeholder="Pinem"> <label>BENEFICIARY NAME</label> </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" name="scode" placeholder="ABCDAB1S" class="placeicon" minlength="8" maxlength="11"> <label>SWIFT CODE</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12"> <input type="submit" value="Pay $ 100" class="btn btn-success placeicon"> </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane in active">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Enter your card details to pay</h3>
                                            <form onsubmit="event.preventDefault()">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="cr_no" placeholder="0000 0000 0000 0000" minlength="19" maxlength="19"> <label>CARD NUMBER</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="input-group"> <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5"> <label>CARD EXPIRY</label> </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="input-group"> <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3"> <label>CVV</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12"> <input type="submit" value="Pay $ 100" class="btn btn-success placeicon"> </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <h3 class="mt-0 mb-4 text-center">Scan the QR code to pay</h3>
                                        <div class="row justify-content-center">
                                            <div id="qr"> <img src="{{ asset('images/qr-code.png') }}" width="200px" height="200px"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <!-- End Main -->

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

@endsection


<!-- Additional CSS For pembayaran -->

<style>
* {
    margin: 0;
    padding: 0
}

body {
    overflow-x: hidden;
}

#bg-div {
    margin: 0;
    margin-top: 100px;
    margin-bottom: 100px
}

#border-btm {
    padding-bottom: 20px;
    margin-bottom: 0px;
    box-shadow: 0px 35px 2px -35px lightgray
}

#test {
    margin-top: 0px;
    margin-bottom: 40px;
    border: 1px solid #FFE082;
    border-radius: 0.25rem;
    width: 60px;
    height: 30px;
    background-color: #FFECB3
}

.active1 {
    color: #00C853 !important;
    font-weight: bold
}

.bar4 {
    width: 35px;
    height: 5px;
    background-color: #ffffff;
    margin: 6px 0
}

.list-group .tabs {
    color: #000000
}

#menu-toggle {
    height: 50px
}

#new-label {
    padding: 2px;
    font-size: 10px;
    font-weight: bold;
    background-color: red;
    color: #ffffff;
    border-radius: 5px;
    margin-left: 5px
}

#sidebar-wrapper {
    min-height: 100vh;
    margin-left: -15rem;
    -webkit-transition: margin .25s ease-out;
    -moz-transition: margin .25s ease-out;
    -o-transition: margin .25s ease-out;
    transition: margin .25s ease-out
}

#sidebar-wrapper .sidebar-heading {
    padding: 0.875rem 1.25rem;
    font-size: 1.2rem
}

#sidebar-wrapper .list-group {
    width: 15rem
}

#page-content-wrapper {
    min-width: 100vw;
    padding-left: 20px;
    padding-right: 20px
}

#wrapper.toggled #sidebar-wrapper {
    margin-left: 0
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #fff !important;
    border-color: #fff !important
}

@media (min-width: 768px) {
    #sidebar-wrapper {
        margin-left: 0
    }

    #page-content-wrapper {
        min-width: 0;
        width: 100%
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: -15rem;
        display: none
    }
}

.card0 {
    margin-top: 10px;
    margin-bottom: 10px
}

.top-highlight {
    color: #00C853;
    font-weight: bold;
    font-size: 20px
}

.form-card input,
.form-card textarea {
    padding: 10px 15px 5px 15px;
    border: none;
    border: 1px solid lightgrey;
    border-radius: 6px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: arial;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

.form-card input:focus,
.form-card textarea:focus {
    -moz-box-shadow: 0px 0px 0px 1.5px skyblue !important;
    -webkit-box-shadow: 0px 0px 0px 1.5px skyblue !important;
    box-shadow: 0px 0px 0px 1.5px skyblue !important;
    font-weight: bold;
    border: 1px solid skyblue;
    outline-width: 0
}

input.btn-success {
    height: 50px;
    color: #ffffff;
    opacity: 0.9
}

#below-btn a {
    font-weight: bold;
    color: #000000
}

.input-group {
    position: relative;
    width: 100%;
    overflow: hidden
}

.input-group input {
    position: relative;
    height: 90px;
    margin-left: 1px;
    margin-right: 1px;
    border-radius: 6px;
    padding-top: 30px;
    padding-left: 25px
}

.input-group label {
    position: absolute;
    height: 24px;
    background: none;
    border-radius: 6px;
    line-height: 48px;
    font-size: 15px;
    color: gray;
    width: 100%;
    font-weight: 100;
    padding-left: 25px
}

input:focus+label {
    color: #1E88E5
}

#qr {
    margin-bottom: 150px;
    margin-top: 50px
}
</style>

<!-- Additional javascript for pembayaran -->

<script>

</script>