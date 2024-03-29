@extends('layout.master')
@section('title')
    Tambah Barang
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/parsleyjs/css/parsley.css')}}">
@endsection
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-left"></i></a> Halaman Tambah Barang</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Tabel</li>
                            <li class="breadcrumb-item">Barang</li>
                            <li class="breadcrumb-item active">Tambah Barang</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah baru kategori</h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" method="post" action="{{ route('barang-store') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="category" id="" class="form-control @error('category') is-invalid @enderror" required>
                                        <option value="" selected>---- Pilih Kategori ---- </option>
                                        @foreach ($category as $c)
                                        <option value="{{ $c->id }}">{{ $c->category }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" name="item_name" class="form-control @error('item_name') is-invalid @enderror">
                                    @error('item_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Stok</label>
                                    <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror">
                                    @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="">Harga Beli</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" class="form-control @error('buy_price') is-invalid @enderror" name="buy_price" placeholder="Ex: 1.000,00 Rp" id="buy_price">
                                    @error('buy_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="">Harga Jual</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" class="form-control @error('sell_price') is-invalid @enderror" name="sell_price" placeholder="Ex: 1000,00 Rp" id="sell_price">
                                    @error('sell_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button>
                                <a href="{{ route('barang')}}" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('assets/vendor/parsleyjs/js/parsley.min.js')}}"></script>
<script>
    new AutoNumeric('#sell_price', {
        digitGroupSeparator: ',',
        decimalPlaces: 0,
    });

    new AutoNumeric('#buy_price', {
        digitGroupSeparator: ',',
        decimalPlaces: 0,
    });

</script>
@endsection
