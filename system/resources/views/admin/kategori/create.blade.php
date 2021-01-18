@extends ('admin.template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="card">
					<div class="card-header">
						TAMBAH DATA KATEGORI
					</div>
					<div class="card-body">
						<form action="{{url('admin/kategori')}}" method="post" enctype="multipart/form-data">
						@csrf
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label for="" class="control-label">Nama</label>
										<input type="text" name="nama" class="form-control">
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