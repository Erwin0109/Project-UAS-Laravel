<!-- sidebar -->
<div class="sidebar col-md-2">
    <div class="widget clearfix">
        <h3 class="widget-title">Ayo Belanja Sekarang...</h3>
        <div class="newsletter-widget">
            <form action="{{('filter')}}" method="post" class="form-inline" role="search">
                @csrf
                <div class="form-1">
                    <input type="text" name="nama" value="{{$nama ?? ""}}" class="form-control" placeholder="Cari Produk Anda">
                    <button class="btn btn-primary"><i class="fa fa-search"></i>Filter</button>
                </div>
            </form>
        </div><!-- end newsletter -->
    </div><!-- end widget -->
    
    <div class="widget clearfix">
        <h3 class="widget-title">Kategori</h3>
        <div class="tags-widget">
            <ul class="list-inline">
                @foreach($list_kategori as $item) 
                <li><a href="#">{{$item->nama}}</a></li>
                @endforeach
            </ul>
        </div><!-- end list-widget -->
    </div><!-- end widget -->
</div>
<!-- end sidebar -->