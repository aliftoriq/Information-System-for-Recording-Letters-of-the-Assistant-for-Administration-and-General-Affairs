@extends('layout.body')

@section('container')

<div class="container mt-10">
{{--
    @php
        dd($surat);
    @endphp --}}

    <form action="/surat-keluar/{{$surat_keluar->getKey()}}/edit" method="POST" class="form-group ">
        @csrf
        @method('put')
       <br><br>
        <table class="mt-10 table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">No Arsip</th>
                    <th scope="col">No Surat</th>
                    <th scope="col">Instansi</th>
                    <th scope="col">Hal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> <br></th>
                    <th scope="row">
                        <input type="date" name="tanggal" id="tanggal"
                            class="form-control @error('tanggal') is-invalid @enderror" placeholder="no arsip"
                            value="{{old('tanggal', $surat_keluar->tanggal)}}">
                    </th>
                    <th scope="row">
                        <input type="input" name="no_arsip" id="no_arsip"
                            class="form-control @error('no_arsip') is-invalid @enderror" placeholder="no arsip"
                            value={{$surat_keluar->no_arsip}}>
                    </th>
                    <th scope="row">
                        <input type="input" name="no_surat" id="no_surat"
                            class="form-control  @error('no_surat') is-invalid @enderror" placeholder="no surat"
                            value="{{old('no_surat', $surat_keluar->no_surat)}}">
                    </th>
                    <th scope="row">
                        <input type="input" name="instansi" id="instansi"
                            class="form-control @error('instansi') is-invalid @enderror" placeholder="instansi"
                            value="{{old('instansi',$surat_keluar->instansi)}}">
                    </th>
                    <th scope="row">
                        <input type="input" name="hal" id="hal" class="form-control @error('hal') is-invalid @enderror"
                            placeholder="Hal" value="{{old('hal', $surat_keluar->hal)}}">
                    </th>
                </tr>

            </tbody>
        </table>

        <br>

        <button type="submit" class="btn btn-dark">masukan</button>
    </form>
</div>

</div>
@endsection
