@extends('master2')
@section('judulhalaman', 'Tambah sepedah')

@section('konten')

    <br/>
	<h3>Tambah Sepedah</h3>

	<a href="/sepedah" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/sepedah/store" method="post">
		{{ csrf_field() }}
		<div class="form-group row">
            <label for="inputmerk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="text" name="merk" class="form-control" id="inputmerk">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputstock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="number" name="stock" class="form-control" id="inputstock">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-info">
	</form>

@endsection
