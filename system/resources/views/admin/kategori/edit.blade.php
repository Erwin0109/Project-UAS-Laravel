@extends ('admin.template.base')

@section('content')
	<div class="container">
		<div class="row mt-3">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<img alt="" class="img-fluid" src="{{url("public/$kategori->foto")}}">				
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						EDIT DATA KATEGORI
					</div>
					<div class="card-body">
						<form action="{{url('admin/kategori', $kategori->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						@method("PUT")
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="" class="control-label">Nama</label>
									<input type="text" name="nama" class="form-control" value="{{$kategori->nama}}">
								</div>
							</div>							
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Foto</label>
									<input type="file" name="foto" accept=".png, .jpg, .jpeg" class="form-control">
								</div>							
							</div>
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