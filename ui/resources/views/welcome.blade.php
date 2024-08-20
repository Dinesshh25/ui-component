<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<body>

<section>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box logo-area">
                <div class="logo mb-3 text-center text-wrap">
                    <img src="{{ asset('image/logo2.png') }}" class="img-fluid">
                    <p class="text-white fs-3">Selamat datang di Urban Access.</p>
                    <small class="text-white text-wrap">Silakan masuk untuk melanjutkan dan mengakses layanan serta informasi yang tersedia.</small>
                </div>
            </div>

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h3>Hallo, Selamat datang!</h3>
                        <p>Kami siap menyambut Anda kembali. <br>Masukkan informasi login Anda untuk melanjutkan. </p>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <img src="{{ asset('image/user.svg') }}">
                        </span>
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address">
                    </div>
                    <div class="input-group mb-5">
                    <span class="input-group-text">
                            <img src="{{ asset('image/file-lock.svg') }}">
                        </span>
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="input-group mb-3"> 
                        <button class="btn btn-lg btn-primary w-100 fs-6">Masuk</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>