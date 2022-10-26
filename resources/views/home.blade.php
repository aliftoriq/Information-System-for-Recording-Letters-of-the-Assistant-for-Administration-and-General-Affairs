@extends('layout.body') @section('container')

<div class="container-fluid px-0">

    <div class="card text-bg-dark" style="border: 0;">
        <img src="assets/gub.jpg" class="card-img  p-0" alt="..." style="width : 100%">
        <div class="card-img-overlay mx-auto" style="color:white ;">
            <div class="col-6 mx-auto mt-5">
                <h1 class="card-title text-center pt-16">Pencatatan Surat Masuk dan Keluar Asisten III Bidang
                    Administrasi dan Umum Provinsi Sumatera Selatan</h1>
            </div>
            <div class="col-6 mx-auto mt-5 text-center">
                <img src="assets/Coat_of_arms_of_South_Sumatra.svg" alt="" style="width: 300px;">
            </div>

        </div>
    </div>


    <div class="container">
        <div class="alur-surat">
            <div class="container">
                <div class="row text-center justify-content-center my-5">
                    <div class="col-xl-6 col-lg-8">
                        <h4 class="font-weight-bold">Alur Agenda Surat Masuk</h4>
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
                        <h4 class="font-weight-bold">Alur Surat Tugas Masuk</h4>
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