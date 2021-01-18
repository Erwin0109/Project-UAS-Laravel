@extends ('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					TAMBAH DATA PRODUK
				</div>
				<div class="card-body">
					<form action="{{url('admin/produk')}}" method="post" enctype="multipart/form-data">
					@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							@include('admin.template.utils.error', ['item' => 'nama'])
							<input type="text" name="nama" class="form-control">
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Harga</label>
									@include('admin.template.utils.error', ['item' => 'harga'])
									<input type="text" name="harga" class="form-control">
								</div>								
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Foto</label>
									@include('admin.template.utils.error', ['item' => 'foto'])
									<input type="file" name="foto" accept=".png, .jpg, .jpeg" class="form-control">
								</div>							
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Stock</label>
									@include('admin.template.utils.error', ['item' => 'stock'])
									<input type="text" name="stock" class="form-control">
								</div>								
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Berat</label>
									@include('admin.template.utils.error', ['item' => 'berat'])
									<input type="text" name="berat" class="form-control">
								</div>								
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Deskripsi</label>
							@include('admin.template.utils.error', ['item' => 'deskripsi'])
							<textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
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