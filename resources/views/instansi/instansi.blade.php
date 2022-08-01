@extends('layout.body')

@section('container')

<div class="container mt-10">
    @php
        $id = 0;
    @endphp

    <br><br>
    <table class="mt-10 table mb-2">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Instansi</th>
                <th scope="col">id Instansi</th>
                <th scope="col">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instansi as $ins)
            <tr>
                <th scope="row"></th>
                <th scope="row">{{$ins->nama}}</th>
                <th scope="row">{{$ins->id}}</th>
                <th>
                    {{-- <form action="/instansi/{{$ins->getKey()}}" method="POST">
                        @csrf
                        @method('delete')
                        <button style="border:none;" type="submit" class="badge bg-danger"
                            onclick="return confirm('yakin ingin menghapus data ini?')">hapus</button>
                    </form> --}}

                    <a href="/instansi/{{$ins->getKey()}}/edit"><span class="badge bg-primary"
                            type="submit">Edit</span></a>
                </th>
            </tr>
            @endforeach

            <form action="/instansi" method="POST" class="form-group ">
                @csrf

                <tr>
                    <th> </th>

                    <th scope="row">
                        <input type="input" name="nama" id="nama"
                            class="form-control @error('nama') is-invalid @enderror" placeholder="Instansi Baru"
                            value="{{old('tanggal')}}">
                    </th>
                    @php
                        $id = intval($id) + 1;
                    @endphp
                    <th>
                        {{-- <input type="input" name="id" value="{{old('id',$id)}}" id="id_instansi"  class="form-control @error('id_instansi') is-invalid @enderror" placeholder="id"> --}}
                    </th>
                    <th></th>
                    <th></th>
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
