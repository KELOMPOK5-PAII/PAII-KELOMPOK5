@extends('layouts.main')
@section('title', 'Data Saran')
@section('container')

<br>
<div class="container" >
    <H1>Data Saran</H1>
              <table class="table table-bordered" style="text-align:center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Saran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($saran as $s)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->saran }}</td>
                        <td>
                            <a href="/datasaran/hapus/{{ $s->id }}"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>


@endsection