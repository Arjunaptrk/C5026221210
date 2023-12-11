@extends('master2')
@section('judulhalaman', 'Data Counter')

@section('konten')

<h1> Anda telah membuka URL ini sebanyak {{ $counter->Jumlah }} kali </h1>
@endsection
