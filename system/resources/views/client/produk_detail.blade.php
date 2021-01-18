@extends('client.template.base')

@section('content')
<section class="section cb">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tagline-message page-title">
                    <h3>Detail Produk</h3>
                </div>
            </div><!-- end col -->
            <div class="col-md-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="javascript:void(0)">Edulogy</a></li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="section">
    <div class="container">
        <div class=" ">
            <div class="row">
                <div class="col-md-6 shop-media">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="image-wrap entry">
                            <img alt="" class="img-responsive" src="{{url("public/$produk->foto")}}">
                            <div class="magnifier">
                                <a rel="prettyPhoto[inline]" title="" href="{{url("public/$produk->foto")}}"><i class="flaticon-add"></i></a>
                            </div>
                        </div><!-- end image-wrap -->
                        </div>
                    </div><!-- end row -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="shop-desc">
                        <h3>{{$produk->nama}}</h3>
                        <small>{{$produk->harga}}</small>
                        <p>{!! nl2br($produk->deskripsi)!!}</p>
                        <div class="shop-meta">
                            <a href="#" class="btn btn-primary">Tambah Ke Keranjang</a>
                        </div><!-- end shop meta -->
                    </div><!-- end desc -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">   
                <div class="col-md-12">
                    <div class="shop-extra">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Deskripsi Produk</a></li>
                            <li><a data-toggle="tab" href="#menu1">Detail Produk</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <p>{!! nl2br($produk->deskripsi)!!}</p>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <h3>Informasi Produk</h3>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Berat</strong></td>
                                            <td>{{$produk->berat}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Stock</strong></td>
                                            <td>{{$produk->stock}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end shop-extra -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end boxed -->
    </div><!-- end container -->
</section>
@endsection