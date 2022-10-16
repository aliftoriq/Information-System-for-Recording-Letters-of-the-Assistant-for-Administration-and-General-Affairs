@extends('layout.body')

@section('container')

<div class="container">
    <div class="row my-4">
        <div class="d-flex justify-content-center">
            <h1>Pencatatan Surat Masuk dan Keluar Provinsi Sumatera Selatan
            </h1>
        </div>
    </div>
    <div class="row mr-auto">
        <h4>Pilih menu opsi pencatatan:</h4>
    </div>
    <div class="row mt-4">
        <div class="d-flex justify-content-center">
            <div class="col-3">
                <a href="/Surat masuk/index.html">
                    <div class="card text-bg-dark m-3">
                        <div class="card-body">
                            <h5 class="card-title">Agenda Surat Masuk</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="">
                    <div class="card text-bg-dark m-3">
                        <div class="card-body">
                            <h5 class="card-title">Surat Keluar
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="">
                    <div class="card text-bg-dark m-3">
                        <div class="card-body">
                            <h5 class="card-title">Sekretaris Daerah Surat Masuk</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="">
                    <div class="card text-bg-dark m-3">
                        <div class="card-body">
                            <h5 class="card-title">Surat Sekda Keluar</h5>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="d-flex justify-content-center">
            <div class="col-3">
                <a href="">
                    <div class="card text-bg-dark m-3">
                        <div class="card-body">
                            <h5 class="card-title">BKD I dan II Surat Masuk</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="">
                    <div class="card text-bg-dark m-3">
                        <div class="card-body">
                            <h5 class="card-title">BKD III Surat Masuk</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="">
                    <div class="card text-bg-dark m-3">
                        <div class="card-body">
                            <h5 class="card-title">BKD Surat Keluar</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-dark btn-lg"><a href=""> Dark</a></button>
            </div>

        </div>
    </div>
</div>

@endsection