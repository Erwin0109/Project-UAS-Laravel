@extends('client.template.base')

@section('content')
<section class="section db p120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tagline-message page-title text-center">
                    <h3>Shoping</h3>
                    <ul class="breadcrumb">
                        <li><a href="javascript:void(0)">Edulogy</a></li>
                    </ul>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end section -->

<section class="section gb nopadtop">
    <div class="container">
        <div class="boxed boxedp4">
            <div class="row">
                @include('client.template.section.sidebar')
                <div class="col-md-10">
                    <div class="row blog-grid shop-grid">
                    @foreach($list_produk as $item)
                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img  alt="" class="img-responsive" src="{{url("public/$item->foto")}}">
                                    <div class="magnifier">
                                        <a href="{{url('produk_detail',$item->id)}}" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="{{url('produk_detail',$item->id)}}" title="">{{$item->nama}}</a>
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-shopping-basket"></i> Beli</a></li>
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
                    
                    <div class="row text-center float-right">
                        <div class="col-md-12">
                            <ul class="pagination">
                                {!! $list_produk->links() !!}
                            </ul>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end boxed -->
    </div><!-- end container -->
</section>
@endsection