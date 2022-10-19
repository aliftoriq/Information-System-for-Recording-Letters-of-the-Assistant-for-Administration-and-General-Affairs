@extends('layout.body') @section('container')

<div class="container-fluid px-0">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/1.jpg" class="d-block w-100" alt="..." id="gambarC">
            </div>
            <div class="carousel-item">
                <img src="assets/2.jpg" alt="..." id="gambarC">
            </div>
            <div class="carousel-item">
                <img src="assets/3.jpg" alt="..." id="gambarC">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="row my-4 mx-auto">
        <div class="d-flex justify-content-center">
            <h1>Pencatatan Surat Masuk dan Keluar Provinsi Sumatera Selatan
            </h1>
        </div>
    </div>
    <div class="row mr-auto px-3 mx-auto">
        <h4>Pilih menu opsi pencatatan:</h4>
    </div>
    <div class="row mt-4 px-3 mx-auto">
        <div class="d-flex justify-content-center">
            <div class="col-3">
                <a href="/Surat masuk/index.html"><button type="button" class="btn btn-primary btn-lg btn-dark"
                        style="height: 80px; width: 300px">
                        Agenda Surat Masuk
                    </button>
                </a>
            </div>
            <div class="col-3">
                <a href="/Surat masuk/index.html"><button type="button" class="btn btn-primary btn-lg btn-dark"
                        style="height: 80px; width: 300px">
                        Surat Keluar
                    </button>
                </a>

            </div>
            <div class="col-3">
                <a href="/Surat masuk/index.html"><button type="button" class="btn btn-primary btn-lg btn-dark" style="height: 80px; width: 300px">
                    Surat Tugas Masuk
                </button>
            </a>
            </div>
            <div class="col-3">
                <a href="/Surat masuk/index.html"><button type="button" class="btn btn-primary btn-lg btn-dark" style="height: 80px; width: 300px">
                    Surat Sekda Keluar
                </button>
            </a>
            </div>
        </div>
    </div>
</div>

@endsection