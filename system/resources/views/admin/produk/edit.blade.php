@extends ('admin.template.base')

@section('content')
<div class="container">
	<div class="row mt-3">
		<div class="col-md-3">
			<div class="card">
				<div class="card-body">
					<img alt="" class="img-fluid" src="{{url("public/$produk->foto")}}">				
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					EDIT DATA PRODUK
				</div>
				<div class="card-body">
					<form action="{{url('admin/produk', $produk->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					@method("PUT")
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$produk->nama}}">
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Harga</label>
									<input type="text" name="harga" class="form-control" value="{{$produk->harga}}">
								</div>							
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Foto</label>
									<input type="file" name="foto" accept=".png, .jpg, .jpeg" class="form-control">
								</div>							
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Stock</label>
									<input type="text" name="stock" class="form-control" value="{{$produk->stock}}">
								</div>								
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Berat</label>
									<input type="text" name="berat" class="form-control" value="{{$produk->berat}}">
								</div>								
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" id="deskripsi" class="form-control">
								{{$produk->deskripsi}}
							</textarea>
						</div>
						<button class="btn btn-dark float-right">
							<i class="fa fa-save"> Simpan</i>
						</button>
					</form>
				</div>
			</div>				
		</div>
	</div>
</div>
@endsection

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
		  $('#deskripsi').summernote();
		});
	</script>
@endpush