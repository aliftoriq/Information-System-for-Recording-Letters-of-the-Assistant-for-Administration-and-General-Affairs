@extends('layout.body')

@section('container')
<div class="container">
    <table class="table  mt-5">
        {{-- table-dark --}}
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">No Arsip</th>
                <th scope="col">Instansi</th>
                <th scope="col">Nama</th>
                <th scope="col">Lama Perjalanan</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Tindakan</th>

            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach($suratTugas as $surat)
            <tr>
                @php
                // dd($surat->id)
                @endphp

                <th scope="row">{{$loop->iteration}}</th>
                <th scope="row">{{$surat->tanggal}}</th>
                <th scope="row">{{$surat->no_arsip}}</th>
                <th scope="row">{{$surat->instansi->nama}}</th>
                <th scope="row">{{$surat->nama}}</th>
                <th scope="row">{{$surat->lama}}</th>
                <th scope="row">{{$surat->tujuan}}</th>
                <th scope="row">
                    <form action="/surat-tugas/{{$surat->getKey()}}" method="POST">
                        @csrf
                        @method('delete')
                        <button style="border:none;" type="submit" class="badge bg-danger"
                            onclick="return confirm('yakin ingin menghapus data ini?')">hapus</button>
                    </form>
                    {{-- <form action="/agenda-surat-masuk/{{$surat->getKey()}}/edit" method="POST" class="form-group ">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="_method" value="PUT">
                        <button class="badge bg-primary" type="submit">Edit</button>
                    </form> --}}
                    <a href="/surat-tugas/{{$surat->getKey()}}/edit"><span class="badge bg-primary"
                            type="submit">Edit</span></a>
                </th>

            </tr>
            @php
            $no = $loop->iteration + 1;
            @endphp
            @endforeach

            <form action="/surat-tugas" method="POST" class="form-group ">
                @csrf

                <tr>
                    <th scope="row">{{$no}}</th>
                    <th scope="row">
                        <input type="date" name="tanggal" id="tanggal"
                            class="form-control @error('tanggal') is-invalid @enderror" placeholder="no arsip"
                            value="{{old('tanggal')}}">
                    </th>
                    <th scope="row">
                        <input type="input" name="no_arsip" id="no_arsip"
                            class="form-control @error('no_arsip') is-invalid @enderror" placeholder="no arsip"
                            value={{old('no_arsip' )}}>
                    </th>

                    <th scope="row">
                        <select type="select" name="instansi_id" id="instansi_id"
                            class="form-select @error('instansi_id') is-invalid @enderror" value="{{old('instansi')}}">
                            @foreach($instansi as $ins)
                            <option value="{{$ins->getKey()}}">{{$ins->nama}}</option>
                            @endforeach
                        </select>
                    </th>

                    <th scope="row">
                        <input type="input" name="nama" id="nama"
                            class="form-control @error('nama') is-invalid @enderror" placeholder="nama"
                            value="{{old('nama')}}">
                    </th>

                    <th scope="row">
                        <input type="input" name="lama" id="lama"
                            class="form-control @error('lama') is-invalid @enderror" placeholder="lama perjalanan"
                            value="{{old('lama')}}">
                    </th>
                    <th scope="row">
                        <input type="input" name="tujuan" id="tujuan"
                            class="form-control @error('tujuan') is-invalid @enderror" placeholder="Tujuan"
                            value="{{old('tujuan')}}">
                    </th>
                    <th scope="row">
                    </th>
                </tr>

        </tbody>
    </table>

    @error('no_surat')
    <div class="alert alert-danger" role="alert">
        Nomor Surat tidak boleh Sama
    </div>
    @enderror

    @if(session()->has('deleted'))
    <div class="alert alert-success" role="alert">{{session('deleted');}}</div>
    @endif

    @if(session()->has('updated'))
    <div class="alert alert-success" role="alert">{{session('updated');}}</div>

    @endif



    <button type="submit" class="btn btn-dark">masukan</button>
    <a href="/instansi"><span class="badge bg-primary" type="submit">Tambah Instansi</span></a>
    </form>
</div>

@endsection
