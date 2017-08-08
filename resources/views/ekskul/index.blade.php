@extends('layouts.app')
@section('content')
<div class="row">

<center><h1>ekskul</h1></center>
<div class="panel panel-primary">
	<div class="panel-heading">ekskul
	<div class="panel-title pull-right"><a href="/fasilitas/create">Tambah data</a></div>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					
					<th>nama</th>
					<th>foto</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>

			@foreach($perusahaan as $data)
			<tr>
			<td>{{$data->nama}}</td>
			<td>{{$data->foto}}</td>
		<td>
				<a class="btn btn-warning" href="/ekskul/{{$data->id}}/edit">edit</a></td>
			<td>
				<a class="btn btn-primary" href="/ekskul/{{$data->id}}">show</a></td>
				<td>
				<form action="{{route('ekskul.destroy',$data->id)}}" method="post">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token">
					<input class="btn btn-danger" type="submit" value="delete">{{csrf_field()}}
				</form>
			</td>
			</tr>
			@endforeach

			</tbody>
		</table>
	</div>
</div>
</div>
@endsection