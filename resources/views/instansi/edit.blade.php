@extends('layout.body')

@section('container')

<div class="container mt-10">

    <br><br>
    <table class="mt-10 table mb-2">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Tindakan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <form action="/instansi/{{$instansi->id}}" method="POST" class="form-group ">
                @csrf
                @method('put')

                <tr>
                    <th> </th>

                    <th scope="row">
                        <input type="input" name="nama" id="nama"
                            class="form-control @error('nama') is-invalid @enderror" placeholder="Instansi Baru"
                            value="{{old('nama', $instansi->nama)}}">
                    </th>
                    <th>
                        {{-- <input type="input" name="id" value="{{old('id',$id)}}" id="id_instansi"  class="form-control @error('id_instansi') is-invalid @enderror" placeholder="id"> --}}
                    </th>
                </tr>

        </tbody>
    </table>


    <button type="submit" class="btn btn-dark">masukan</button>
    </form>

    </tbody>
    </table>
    <br>
    <br>


    @error('nama')
    <div class="alert alert-danger" role="alert">
        Nama Instansi Sudah Ada
    </div>
    @enderror

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">{{session('deleted');}}</div>
    @endif

    @if(session()->has('deleted'))

    <div class="alert alert-success" role="alert">
        {{session('deleted')}}
    </div>
    @endif
</div>


@endsection
