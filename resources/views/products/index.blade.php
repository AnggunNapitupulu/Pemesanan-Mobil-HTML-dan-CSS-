@extends('layouts.master')

@extends('layouts.navigation')

@section('content')

@include('sweetalert::alert')

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
<br>
<br>
<br>
<br>
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2 class="mt-5">ADMIN PANEL</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary mt-5" href="{{ route('products.create') }}">Tambah Mobil Baru</a>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <table class="table table-bordered mt-5">
        <tr class="table table-primary">
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Harga Sewa</th>
            <th>Stok</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->harga}}</td>
            <td>{{ $product->stok}}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-primary" href="{{ route('products.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-success" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    <a href="#myModal" data-toggle="modal" type="submit" id="box" class="btn btn-danger">Delete</a>
                    <div id="dialog-confirm"></div>
                </form>
                <div id="myModal" class="modal fade">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                @csrf
                <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                        <div class="modal-header flex-column">						
                            <h4 class="modal-title w-100">Are you sure?</h4>	
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p style="text-decoration-thickness:initial;">Apakah anda yakin ingin menghapus {{$product->name}}</p>
                        </div>
                        
                        <div class="modal-footer justify-content-center">
                        @method('DELETE')
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
                </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>  
    <div class="d-flex justify-content-center">
    {!! $products->links() !!}
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
    <br>
    <br>
    <br>
@endsection