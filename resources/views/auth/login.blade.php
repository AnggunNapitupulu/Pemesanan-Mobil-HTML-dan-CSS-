<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Bro Mobil - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
  </head>
  <body>
        <div class="results">
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif

            @error('name')
                <div class="alert alert-danger"> {{ $message }} 
            @enderror
                </div>

            @error('email')
                <div class="alert alert-danger"> {{ $message }} 
            @enderror
                </div>
                
            @error('password')
                <div class="alert alert-danger"> {{ $message }} </div>
            @enderror
            @error('captcha')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
                        
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route('auth.create') }}" method="POST">
            @csrf

                <input type="text" placeholder="NAMA" name="name" style="margin: 10px;" value="{{ old('name') }}">
                <input type="email" placeholder="EMAIL" name="email" style="margin: 10px;" value="{{ old('email') }}">
                <input type="password" placeholder="PASSWORD" name="password" style="margin: 10px;" value="{{ old('password') }}">
                <div class="form-group mt-4 mb-4" style="margin-top: 20px;">
                <div class="captcha">
                    <span>{!! captcha_img() !!}</span>
                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                        &#x21bb;
                    </button>
                </div>
            </div>

            <div class="form-group mb-4">
                <input id="captcha" type="text" class="form-control" placeholder="jawaban kamu" name="captcha">
            </div>
                <button type="submit">SIGN UP</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
        <form method="post" action="{{route('auth.check')}}">
            @csrf
                <h1 style="text-transform: uppercase;">Login</h1>
                <input type="text" placeholder="EMAIL" style="margin: 10px;" name="email" value="{{ old('email') }}">
                <input type="password" placeholder="PASSWORD" style="margin: 10px;" name="password" />
                <a style="text-transform: uppercase;" href="#">Lupa Password?</a>
                <span style="text-transform: uppercase;">atau klik <a style="text-transform: uppercase;" href="/">disini</a> untuk masuk sebagai guest</span>
                <button>LOGIN</button>
                <div id="myModal" class="modal fade">
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 style="text-transform: uppercase;">Daftar</h1>
                    <br>
                    <br>
                    <br>
                    <p style="text-transform: uppercase; color: white; ">Sudah punya akun?
                    </p>
                    <button type="submit" class="ghost" id="signIn">SIGN IN</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h4 style="text-transform: uppercase; margin-bottom: 20px;">kamu belum punya akun?</h4>
                    <p style="text-transform: uppercase; color: white;">klik tombol <button class="ghost" id="signUp" style="text-transform: uppercase;">Sign Up</button> untuk mendaftar</p>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <p>Copyright © 2020 Kel 3</p>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
  </body>

  <script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

    $(function(){
    $('#myModal').on('show.bs.modal', function(){
        var myModal = $(this);
        clearTimeout(myModal.data('hideInterval'));
        myModal.data('hideInterval', setTimeout(function(){
            myModal.modal('hide');
        }, 3000));
    });
});

</script>

  </html>
