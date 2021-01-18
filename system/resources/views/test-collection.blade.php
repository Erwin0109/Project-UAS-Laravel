@extends('admin.template.base')

@section('content')
<table>
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Harga</th>
	</thead>
	<tbody>
		@foreach($list->sortByDesc('harga')->skip(1)->take(1) as $item)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$item->nama}}</td>
			<td>{{$item->harga}}</td>
			<td>{{$item->berat}}</td> 
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
