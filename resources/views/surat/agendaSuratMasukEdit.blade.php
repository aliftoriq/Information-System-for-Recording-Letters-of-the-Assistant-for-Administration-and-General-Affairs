@extends('layout.body')

@section('container')

<div class="container mt-10">
{{--
    @php
        dd($surat);
    @endphp --}}

    <form action="/agenda-surat-masuk/{{$surat->getKey()}}" method="POST" class="form-group ">
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
                    <th scope="col">Tindakan</th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row"> <br></th>
                    <th scope="row">
                        <input type="date" name="tanggal" id="tanggal"
                            class="form-control @error('tanggal') is-invalid @enderror" placeholder="no arsip"
                            value="{{old('tanggal', $surat->tanggal)}}">
                    </th>
                    <th scope="row">
                        <input type="input" name="no_arsip" id="no_arsip"
                            class="form-control @error('no_arsip') is-invalid @enderror" placeholder="no arsip"
                            value={{$surat->no_arsip}}>
                    </th>
                    <th scope="row">
                        <input type="input" name="no_surat" id="no_surat"
                            class="form-control  @error('no_surat') is-invalid @enderror" placeholder="no surat"
                            value="{{old('no_surat', $surat->no_surat)}}">
                    </th>


                    <th scope="row">
                        <input type="input" name="instansi" id="instansi"
                            class="form-control @error('instansi') is-invalid @enderror" placeholder="instansi"
                            value="{{old('instansi',$surat->instansi)}}">
                    </th>
                    <th scope="row">
                        <input type="input" name="hal" id="hal" class="form-control @error('hal') is-invalid @enderror"
                            placeholder="Hal" value="{{old('hal', $surat->hal)}}">
                    </th>
                    <th scope="row">

                    </th>


                </tr>

            </tbody>
        </table>

        <br>

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
