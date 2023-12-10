@extends('master2')
@section('judulhalaman', 'Data sepedah')

@section('konten')
    <br/>
	<h3>Data sepedah</h3>

	<a href="/sepedah/tambahsepedah" class="btn btn-primary"> + Tambah Sepedah Baru</a>

	<br/>
    <p>Cari Data Sepedah :</p>
	<form action="/sepedah/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk sepedah .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br/>
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover" style="width: 100%">
		<tr>
			<th style="width: 15%">Kode Sepedah</th>
			<th style="width: 30%">Merk Sepedah</th>
			<th style="width: 17%">Stock Sepedah</th>
			<th style="width: 17%">Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($sepedah as $l)
		<tr>
			<td>{{ $l->kodesepedah }}</td>
			<td>{{ $l->merksepedah }}</td>
			<td>{{ $l->stocksepedah }}</td>
			<td>
                @if ($l->tersedia == 0) Tidak Tersedia
                @elseif ($l->tersedia == 1) Tersedia
                @endif
            </td>
			<td>
                <a href="/sepedah/view/{{ $l->kodesepedah }}" class="btn btn-info">View</a>
                |
				<a href="/sepedah/edit/{{ $l->kodesepedah }}" class="btn btn-warning">Edit</a>
				|
				<a href="/sepedah/hapus/{{ $l->kodesepedah }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


@endsection
