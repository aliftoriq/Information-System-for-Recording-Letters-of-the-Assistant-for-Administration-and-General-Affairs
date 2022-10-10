@extends('layout.body')

@section('container')
<div class="container">
    <table class="table  mt-5">
        <thead>
            <tr>
                <th scope="col">No</th><th scope="col">Tanggal</th><th scope="col">No Arsip</th><th scope="col">No Surat</th><th scope="col">Instansi</th><th scope="col">Hal</th>
                <th scope="col">Tindakan</th>

            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            $noArsip = 0;
            @endphp

            @foreach($suratKeluars as $suratKeluar)
            <tr>
                @php
                // dd($surat->id)
                @endphp

                <th scope="row">{{$no}}</th>
                <th scope="row">{{$suratKeluar->tanggal}}</th>
                <th scope="row">{{$suratKeluar->no_arsip}}</th>
                <th scope="row">{{$suratKeluar->no_surat}}</th>
                <th scope="row">{{$suratKeluar->instansi->nama}}</th>
                <th scope="row">{{$suratKeluar->hal}}</th>
                <th scope="row">
                    <form action="/surat-keluar/{{$suratKeluar->getKey()}}" method="POST">
                        @csrf
                        @method('delete')
                        <button style="border:none;" type="submit" class="badge bg-danger"
                            onclick="return confirm('yakin ingin menghapus data ini?')">hapus</button>
                    </form>
                    <a href="/surat-keluar/{{$suratKeluar->getKey()}}/edit"><span class="badge bg-primary"
                            type="submit">Edit</span></a>
                </th>
                @php
                $no = $no + 1;
                // $noArsip = $suratKeluar->no_arsip + 1;
                @endphp
            </tr>
            @endforeach

        </tbody>
    </table>

    @if(session()->has('deleted'))
    <div class="alert alert-success" role="alert">{{session('deleted');}}</div>
    @endif

    {{-- <div class="tabel-belum-diambil">
        <h6>Status : Belum di ambil</h6>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">No Arsip</th>
                    <th scope="col">No Surat</th>
                    <th scope="col">Instansi</th>
                    <th scope="col">Hal</th>
                    <th scope="col">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sekdaFalse as $s)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th scope="row">{{$s->tanggal}}</th>
                    <th scope="row">{{$s->no_arsip}}</th>
                    <th scope="row">{{$s->no_surat}}</th>
                    <th scope="row">{{$s->instansi->nama}}</th>
                    <th scope="row">{{$s->hal}}</th>
                    <th scope="row">
                        <form action="/surat-sekda/{{$s->getKey()}}" method="POST">
                            @csrf
                            @method('delete')
                            <button style="border:none;" type="submit" class="badge bg-danger"
                                onclick="return confirm('yakin ingin menghapus data ini?')">hapus</button>
                        </form>
                        <a href="/surat-sekda/{{$s->getKey()}}/edit"><span class="badge bg-primary"
                                type="submit">Edit</span></a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}



    <h3 class="mt-10">Pilih Surat</h3>
    <div class="container">
        <table class="table  mt-5">
            <thead>
                <tr>
                    <th scope="col">No</th><th scope="col">Tanggal</th><th scope="col">No Arsip</th><th scope="col">No Surat</th><th scope="col">Instansi</th><th scope="col">Hal</th>
                    <th scope="col">Tindakan</th>

                </tr>
            </thead>
            <tbody>
                @php
                // dd($surats);
                $no = 1;
                $noArsip = 0;
                @endphp
                @foreach($surats as $surat)
                <tr>
                    <th scope="row">{{$no}}</th>
                    <th scope="row">{{$surat->tanggal}}</th>
                    <th scope="row">{{$surat->no_arsip}}</th>
                    <th scope="row">{{$surat->no_surat}}</th>
                    <th scope="row">{{$surat->instansi->nama}}</th>
                    <th scope="row">{{$surat->hal}}</th>
                    <th scope="row">
                        <form action="/surat-keluar" method="POST">
                            @csrf
                            {{-- @method('put') --}}
                            <input type="text" name="id" value="{{$surat->getKey()}}" hidden>
                            <button style="border:none;" type="submit" class="badge bg-success">Tambahkan</button>
                        </form>
                        <a href="/agenda-surat-masuk/{{$surat->getKey()}}/edit"><span class="badge bg-primary"
                                type="submit">Edit</span></a>
                    </th>
                    @php
                    $no = $no + 1;
                    // $noArsip = $surat->no_arsip + 1;
                    @endphp
                </tr>
                @endforeach

            </tbody>
        </table>

</div>
@endsection
