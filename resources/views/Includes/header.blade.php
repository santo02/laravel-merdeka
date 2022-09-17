<div class="navigation mb-3">
    <nav class="navbar navbar-expand-lg bg-light fixed-top w-100 shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('Image/logo.png') }}" class="logo" alt=""
                    srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark active" href="{{'/'}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#trending">Trending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#pria">Pria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#wanita">Wanita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#about">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{'kelola-product'}}">Kelola Product</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link text-dark " href="#loginModal" data-bs-toggle="modal"
                            data-bs-target="#loginModal"><i class="fa-solid fa-user"></i> Login</a>
                    </li>
                </ul>
                <div class="bod">
                    <form class="d-flex search">
                        <input class="me-2  input" type="text" placeholder="Search..">
                        <button class="btns" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </nav>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog shadow">
            <div class="modal-content">
                <div class="header">
                    <h1>Masuk</h1>
                    <label for="" class="mt-2">
                        Untuk mendapatkan hasil maksimal dari converse.id, masukkan alamat email dan kata sandi akun
                        Anda di bawah ini.
                    </label>
                    <br><br>
                    <p>Belum Punya Akun? <a href="#">Daftar</a></p>
                </div>
                <div class="modal-body">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Email">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Password">
                    <button>Masuk</button>
                    <a href="#">Lupa Kata sandi?</a>
                </div>
            </div>
        </div>
    </div>
</div>
