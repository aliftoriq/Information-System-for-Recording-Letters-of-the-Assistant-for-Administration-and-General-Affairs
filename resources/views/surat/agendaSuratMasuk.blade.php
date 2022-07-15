@extends('layout.body')

@section('container')

<div class="container mt-10">





    @csrf
    <table class="table  mt-5">
        {{-- table-dark --}}
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

            @php
            $no = 1;

            // dd($surats);
            @endphp



            @foreach($surats as $surat)
            <tr>
                @php
                // dd($surat->id)
                @endphp

                <th scope="row">{{$no}}</th>
                <th scope="row">{{$surat->tanggal}}</th>
                <th scope="row">{{$surat->no_arsip}}</th>
                <th scope="row">{{$surat->no_surat}}</th>
                <th scope="row">{{$surat->instansi}}</th>
                <th scope="row">{{$surat->hal}}</th>
                <th scope="row">
                    <form action="/agenda-surat-masuk/{{$surat->getKey()}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="badge bg-danger"
                            onclick="return confirm('yakin ingin menghapus data ini?')">hapus</button>
                    </form>
                    {{-- <form action="/agenda-surat-masuk/{{$surat->getKey()}}/edit" method="POST" class="form-group ">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="_method" value="PUT">
                        <button class="badge bg-primary" type="submit">Edit</button>
                    </form> --}}
                    <a href="/agenda-surat-masuk/{{$surat->getKey()}}/edit"><button class="badge bg-primary" type="submit">Edit</button></a>
                </th>

                @php
                $no = $no + 1;

                $noArsip = $surat->no_arsip + 1;
                @endphp
            </tr>
            @endforeach

            <form action="/agenda-surat-masuk" method="POST" class="form-group ">
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
                            @if($noArsip !=0) value={{$noArsip}} @endif>
                    </th>
                    <th scope="row">
                        <input type="input" name="no_surat" id="no_surat"
                            class="form-control  @error('no_surat') is-invalid @enderror" placeholder="no surat"
                            value="{{old('no_surat')}}">
                    </th>


                    <th scope="row">
                        <input type="input" name="instansi" id="instansi"
                            class="form-control @error('instansi') is-invalid @enderror" placeholder="instansi"
                            value="{{old('instansi')}}">
                    </th>
                    <th scope="row">
                        <input type="input" name="hal" id="hal" class="form-control @error('hal') is-invalid @enderror"
                            placeholder="Hal" value="{{old('hal')}}">
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
    <div class="alert alert-succes" role="alert">

        {{session('deleted')}}
    </div>
    @endif


    <button type="submit" class="btn btn-dark">masukan</button>
    </form>
</div>

</div>
@endsection
