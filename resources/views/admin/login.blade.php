<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Sistem Pakar ISPA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:url('https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=1200') center center/cover;
            position:relative;
        }

        body::before{
            content:'';
            position:absolute;
            inset:0;
            background:rgba(10,20,50,0.65);
            backdrop-filter:blur(5px);
        }

        .login-container{
            width:950px;
            max-width:95%;
            min-height:550px;
            display:flex;
            overflow:hidden;
            border-radius:25px;
            position:relative;
            z-index:2;
            box-shadow:0 20px 50px rgba(0,0,0,0.3);
        }

        .left-panel{
            width:45%;
            background:rgba(255,255,255,0.08);
            color:white;
            padding:50px 40px;
            backdrop-filter:blur(12px);
        }

        .left-panel h1{
            font-size:42px;
            font-weight:700;
            margin-bottom:20px;
        }

        .left-panel span{
            color:#73b8ff;
        }

        .left-panel p{
            line-height:1.8;
            color:#ddd;
        }

        .feature{
            margin-top:25px;
        }

        .feature p{
            margin-bottom:12px;
        }

        .right-panel{
            width:55%;
            background:white;
            padding:50px;
        }

        .title{
            font-size:36px;
            font-weight:bold;
            margin-bottom:10px;
            color:#1e293b;
        }

        .subtitle{
            color:#64748b;
            margin-bottom:30px;
        }

        .form-control{
            height:50px;
            border-radius:12px;
        }

        .btn-login{
            height:50px;
            border-radius:12px;
            background:#2f6df6;
            border:none;
            width:100%;
            font-weight:600;
        }

        .btn-login:hover{
            background:#1f5ce0;
        }

        .back-link{
            text-decoration:none;
            display:block;
            text-align:center;
            margin-top:15px;
        }
    </style>
</head>
<body>

<div class="login-container">

    <div class="left-panel">
        <h1>Admin <span>Sistem Pakar</span></h1>

        <p>
            Halaman administrator digunakan untuk mengelola
            data penyakit, gejala, rule diagnosa, serta melihat
            riwayat hasil diagnosa pasien.
        </p>

        <div class="feature">
            <p>✔ Kelola Data Penyakit</p>
            <p>✔ Kelola Data Gejala</p>
            <p>✔ Kelola Rule Diagnosa</p>
            <p>✔ Lihat Riwayat Diagnosa</p>
        </div>
    </div>

    <div class="right-panel">

        <div class="title">
            Login Admin
        </div>

        <div class="subtitle">
            Masukkan username dan password administrator.
        </div>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="/admin/login">
            @csrf

            <div class="mb-3">
                <label>Username</label>
                <input
                    type="text"
                    name="username"
                    class="form-control"
                    placeholder="Masukkan username"
                    required>
            </div>

            <div class="mb-4">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Masukkan password"
                    required>
            </div>

            <button type="submit" class="btn btn-primary btn-login">
                Login
            </button>
        </form>

        <a href="/" class="back-link">
            ← Kembali ke Halaman Utama
        </a>

    </div>

</div>

</body>
</html>