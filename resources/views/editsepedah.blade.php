@extends('master2')
@section('judulhalaman', 'Edit Data Sepedah')

@section('konten')

    <br/>
	<h3>Edit Data Sepedah</h3>

	<a href="/sepedah" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepedah as $l)
	<form action="/sepedah/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $l->kodesepedah }}"> <br/>
        <div class="form-group row">
            <label for="inputmerk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="text" name="merk" class="form-control" id="inputmerk" value="{{ $l->merksepedah }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputjumlah" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="number" name="stock" class="form-control" id="inputstock" value="{{ $l->stocksepedah }}">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-info">
	</form>
	@endforeach

@endsection
