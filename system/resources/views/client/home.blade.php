@extends('client.template.base')

@section('content')
<section id="home" class="js-height-full">
    <div class="overlay"></div>
        <div class="home-text-wrapper relative container">
            <div class="home-message">
                <p>Belanja Lebih Murah & Aman Di Edulogy</p>
                <small>Edulogy adalah sebuah website E-Comerce yang menjual beragam barang Elektronik Seperti Handphone, Television, dan Elektronik Lainnya.</small>
                <div class="btn-wrapper">
                    <div class="text-center">
                        <a href="#" class="btn btn-primary wow slideInLeft">Read More</a> &nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-default wow slideInRight">Buy Now</a>
                    </div>
                </div><!-- end row -->
            </div>
        </div>
    <div class="slider-bottom">
        <span>Explore <i class="fa fa-angle-down"></i></span>
    </div>
</section>

<section class="section gb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Daftar Kategori Produk</h3>
            <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
        </div><!-- end title -->

        <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
        @foreach($list_kategori as $item)
            <div class="caro-item">
                <div class="course-box">
                    <div class="image-wrap entry">
                        <img alt="" class="img-responsive" src="{{url("public/$item->foto")}}">
                        <div class="magnifier">
                             <a href="#" title=""><i class="flaticon-add"></i></a>
                        </div>
                    </div><!-- end image-wrap -->
                    <div class="course-details">
                        <h4>
                            <!-- <small>{{$item->nama}}</small> -->
                            <a href="#" title="">{{$item->nama}}</a>
                        </h4>
                    </div><!-- end details -->
                    <div class="course-footer clearfix">
                        <div class="pull-left">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-clock-o"></i>{{$item->created_at->diffForHumans()}}</a></li>
                            </ul>
                        </div><!-- end left -->

                        <div class="pull-right">
                            <ul class="list-inline">
                                <li><a href="#">{{$item->harga}}</a></li>
                            </ul>
                        </div><!-- end left -->
                    </div><!-- end footer -->
                </div><!-- end box -->
            </div><!-- end col -->
        @endforeach
        </div><!-- end row -->

        <hr class="invis">

        <div class="section-button text-center">
            <a href="{{'produk'}}" class="btn btn-primary">Lihat Semua Produk</a>
        </div>
    </div><!-- end container -->
</section>
@endsection