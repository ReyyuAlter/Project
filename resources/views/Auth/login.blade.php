<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prakerim UKM | Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
    /* Background image */
    background-image: url('foto/image.png'); /* Ganti dengan URL gambar */
    background-repeat: no-repeat; /* Gambar tidak diulang */
    background-position: left top; /* Posisi gambar di atas */
    background-attachment: fixed; /* Gambar tetap saat di-scroll */
    background-size: 35%; /* Ukuran gambar, misalnya 50% dari lebar layar */
    color: #00FFEF;
    height: 100vh; /* Pastikan gambar mencakup seluruh tinggi layar */
    margin: 0;
    background-color: #0099FF; /* Warna latar belakang sebagai fallback */
}


        .login-box {
            width: 100%;
            max-width: 400px;
            margin: 10vh auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9); /* Warna putih dengan transparansi */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-logo {
            text-align: center;
        }

        .login-logo img {
            max-width: 100px; /* Ukuran logo */
            margin-bottom: 10px;
        }

        .login-logo h4 {
            color: black; /* Warna teks Prakerim UKM */
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-label {
            color: black;
        }
    </style>
</head>
<br>
<br>
<br>
<br>

<body>
    <div class="container">
        <div class="login-box">
            <!-- Logo -->
            <div class="login-logo">
                <img src="{{ asset('assets/dist/img/logo stimik.png') }}" alt="Logo">
                <!-- Ganti path sesuai logo -->
                <h4 class="mt-2"><b>Prakerim UKM</b></h4> <!-- Warna teks hitam -->
            </div>
            <br>
            <!-- Form Login -->
            <form action="{{ route('loginproccess') }}" method="POST">
                @csrf
                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
