@extends('layout.body') @section('container')

<div class="container-fluid px-0">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/ampera.jpg" class="d-block w-100" alt="..." id="gambarC">
            </div>
            <div class="carousel-item">
                <img src="assets/2.jpg" alt="..." id="gambarC">
            </div>
            <div class="carousel-item">
                <img src="assets/3.jpg" alt="..." id="gambarC">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container">
        <div class="row my-4 mx-auto">
            <div class="d-flex justify-content-center text-center">
                <h3>Pencatatan Surat Masuk dan Keluar Asisten III Bidang Administrasi dan Umum Provinsi Sumatera Selatan
                </h3>
            </div>
        </div>

        <div class="alur-surat">
            <div class="container">
                <div class="row text-center justify-content-center mb-5">
                    <div class="col-xl-6 col-lg-8">
                        <h3 class="font-weight-bold">Alur Agenda Surat Masuk</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title=""
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    data-original-title="2003">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1">Agenda Surat masuk</p>
                                    {{-- <p class="h6 text-muted mb-0 mb-lg-0">Seluruh Surat Masuk Kecuali Surat tugas
                                    </p> --}}
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title=""
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    data-original-title="2004">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1">Surat Sekertaris Daerah</p>
                                    {{-- <p class="h6 text-muted mb-0 mb-lg-0">Seluruh Surat Disalurkan Ke Gubernur
                                        Melalui Sekertaris Daerah</p> --}}
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title=""
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    data-original-title="2005">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1">Surat Keluar</p>
                                    {{-- <p class="h6 text-muted mb-0 mb-lg-0">Seluruh Surat yang Keluar dari ASisten
                                        III Gubernur Provinsi Sumatera Selatan</p> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                {{-- Surat Tugas --}}
                <div class="row text-center justify-content-center mb-5 mt-5">
                    <div class="col-xl-6 col-lg-8">
                        <h3 class="font-weight-bold">Alur Surat Tugas Masuk</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title=""
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    data-original-title="2003">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1">Surat Tugas</p>
                                    {{-- <p class="h6 text-muted mb-0 mb-lg-0">Seluruh Surat Masuk Kecuali Surat tugas
                                    </p> --}}
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title=""
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    data-original-title="2004">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1">Surat Sekertaris Daerah</p>
                                    {{-- <p class="h6 text-muted mb-0 mb-lg-0">Seluruh Surat Disalurkan Ke Gubernur
                                        Melalui Sekertaris Daerah</p> --}}
                                </div>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                    data-placement="top" title=""
                                    data-content="And here's some amazing content. It's very engaging. Right?"
                                    data-original-title="2005">
                                    <div class="inner-circle"></div>
                                    <p class="h6 mt-3 mb-1">Surat Keluar</p>
                                    {{-- <p class="h6 text-muted mb-0 mb-lg-0">Seluruh Surat yang Keluar dari ASisten
                                        III Gubernur Provinsi Sumatera Selatan</p> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>





            </div>
        </div>



        <div class="row mr-auto px-3 mx-auto">
            <h4>Pilih menu opsi pencatatan:</h4>
        </div>
        <div class="row mt-4 px-3 mx-auto">
            <div class="d-flex justify-content-center">
                <div class="col-3">
                    <!-- <<<<<<< HEAD
                    <a href="/agenda-surat-masuk">
                        <div class="card text-bg-dark m-3">
                            <div class="card-body">
                                <h5 class="card-title">Agenda Surat Masuk</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/surat-keluar">
                        <div class="card text-bg-dark m-3">
                            <div class="card-body">
                                <h5 class="card-title">Surat Keluar
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/surat-sekda">
                        <div class="card text-bg-dark m-3">
                            <div class="card-body">
                                <h5 class="card-title">Surat Sekertaris Daerah</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/surat-tugas">
                        <div class="card text-bg-dark m-3">
                            <div class="card-body">
                                <h5 class="card-title">Surat Tugas</h5></h5>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <div class="row mt-4 mb-4">
            <div class="d-flex justify-content-center">
     -->

                    <!-- ======= -->
                    <a href="/agenda-surat-masuk"><button type="button" class="btn btn-primary btn-lg btn-dark"
                            style="height: 80px; width: 300px">
                            Agenda Surat Masuk
                        </button>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/surat-keluar"><button type="button" class="btn btn-primary btn-lg btn-dark"
                            style="height: 80px; width: 300px">
                            Surat Keluar
                        </button>
                    </a>

                </div>
                <div class="col-3">
                    <a href="/surat-tugas"><button type="button" class="btn btn-primary btn-lg btn-dark"
                            style="height: 80px; width: 300px">
                            Surat Tugas Masuk
                        </button>
                    </a>
                </div>
                <div class="col-3">
                    <a href="/surat-sekda"><button type="button" class="btn btn-primary btn-lg btn-dark"
                            style="height: 80px; width: 300px">
                            Surat Sekda Keluar
                        </button>
                    </a>
                </div>
                <!-- >>>>>>> FE -->
            </div>
        </div>
    </div>

</div>

@endsection
