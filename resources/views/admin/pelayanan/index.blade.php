@extends('layouts.apps')
@section('content')


<h3>Data SKCK</h3>

<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

<br/>
<br/>

<table border="1">
    <tr>
        <th>Nik</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Pekerjaan</th>
        <th>Status</th>
        <th>Alamat</th>
        <th>No KK</th>
        <th>Keperluan</th>
        <th>Yang Tanda Tangan</th>

    </tr>
    @foreach($skck as $p)
    <tr>
        <td>{{ $p->Nama }}</td>
        <td>{{ $p->Tempat_Lahir }}</td>
        <td>{{ $p->Tanggal_Lahir }}</td>
        <td>{{ $p->Agama }}</td>
        <td>{{ $p->Pekerjaan }}</td>
        <td>{{ $p->Status }}</td>
        <td>{{ $p->Alamat }}</td>
        <td>{{ $p->No_KK }}</td>
        <td>{{ $p->Keperluan }}</td>
        <td>{{ $p->Yang_Tanda_Tangan }}</td>
        <td>
            <a href="/skck/edit/{{ $p->id }}">Edit</a>
            |
            <a href="/skck/hapus/{{ $p->id }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
