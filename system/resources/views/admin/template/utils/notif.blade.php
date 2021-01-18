@foreach(['success', 'warning', 'danger'] as $status)
	@if (session($status))
	<div class="text-white alert alert-{{$status}} alert-dimissable custom-{{$status}}-box">
		<a href="#" class="close" data-dismiss="alert" aria-labe="close">&times;</a>
		<strong>{{ session($status) }}</strong>
	</div>
	@endif
@endforeach

<!-- @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif -->