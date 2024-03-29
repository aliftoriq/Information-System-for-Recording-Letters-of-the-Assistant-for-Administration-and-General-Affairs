<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid container">
        <img class="" src="assets/Coat_of_arms_of_South_Sumatra.svg" alt="" style="width:30px">
        <a class="navbar-brand px-3" href="/">Pemerintah Provinsi
            Sumatera Selatan</a>
        <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link @if($title == "Home") active @endif" aria-current="page" href="/">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/About">About</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @if($title != "Home" && $title != "About") active @endif" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Surat Masuk-Keluar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/agenda-surat-masuk">Surat Agenda Masuk</a></li>
                        <li><a class="dropdown-item" href="/surat-tugas">Surat Tugas Masuk</a></li>
                        <li><a class="dropdown-item" href="/surat-sekda">Surat Sekda Keluar</a></li>
                        <li><a class="dropdown-item" href="/surat-keluar">Surat keluar</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
