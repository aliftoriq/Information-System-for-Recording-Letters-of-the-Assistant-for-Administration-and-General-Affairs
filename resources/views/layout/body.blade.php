<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/99dbf29e38.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Web | {{$title}}</title>
</head>

<body>

    @include('layout.nav')

    @yield('container')
    @include('layout.footer')


    <footer class="bg-dark text-center text-lg-start text-white mt-5">

      <div class="container p-4">

          <div class="row mt-4 mb-2">

              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5 class="text-uppercase">Social Media</h5>

                  <ul class="list-unstyled mb-0">
                      <li>
                          <a href="#!" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>Facebook</a>
                      </li>
                      <li>
                          <a href="#!" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>Twitter</a>
                      </li>
                      <li>
                          <a href="#!" class="text-white"><i
                                  class="fas fa-user-edit fa-fw fa-sm me-2"></i>Instagram</a>
                      </li>
                      <li>
                          <a href="#!" class="text-white"><i class="fas fa-user-edit fa-fw fa-sm me-2"></i>Telegram
                              Channel</a>
                      </li>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5 class="text-uppercase">Contact Us</h5>
                  <ul class="list-unstyled mb-0">
                      <li>
                          <a href="#!" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>Facebook</a>
                      </li>
                      <li>
                          <a href="#!" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>Twitter</a>
                      </li>
                      <li>
                          <a href="#!" class="text-white"><i
                                  class="fas fa-user-edit fa-fw fa-sm me-2"></i>Instagram</a>
                      </li>
                      <li>
                          <a href="#!" class="text-white"><i class="fas fa-user-edit fa-fw fa-sm me-2"></i>Telegram
                              Channel</a>
                      </li>
                  </ul>
              </div>

              <div class="col-lg-4 ms-auto">

                  <img class="logo2" src="/asset/Coat_of_arms_of_South_Sumatra.svg" alt="">
                  <h5 class="text-uppercase">Pemerintah Provinsi Sumatera Selatan</h5>
                  <p>Permudah Pencatatan Surat</p>


              </div>

          </div>

      </div>



      <div class="footer text-center p-3">
          © 2022 Copyright:<a class="text-white" href="#">Pemerintah Provinsi Sumatera Selatan</a>
      </div>

  </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>