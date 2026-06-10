<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
        }

        .sidebar{
            width:250px;
            height:100vh;
            background:#0d6efd;
            position:fixed;
            color:white;
        }

        .sidebar h3{
            text-align:center;
            padding:20px;
            border-bottom:1px solid rgba(255,255,255,.2);
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:15px 20px;
        }

        .sidebar a:hover{
            background:rgba(255,255,255,.15);
        }

        .content{
            margin-left:250px;
            padding:30px;
        }

        .card-stat{
            border:none;
            border-radius:15px;
            color:white;
        }

        .bg-penyakit{
            background:#dc3545;
        }

        .bg-gejala{
            background:#198754;
        }

        .bg-rule{
            background:#fd7e14;
        }

        .bg-diagnosa{
            background:#0dcaf0;
        }
    </style>
</head>
<body>

<div class="sidebar">

    <h3>SISPAK ISPA</h3>

    <a href="/admin/dashboard">
        Dashboard
    </a>

    <a href="/admin/penyakit">
        Data Penyakit
    </a>

    <a href="/admin/gejala">
        Data Gejala
    </a>

    <a href="/admin/rule">
        Data Rule
    </a>

    <a href="/admin/riwayat">
        Riwayat Diagnosa
    </a>

    <a href="/admin/logout">
        Logout
    </a>

</div>

<div class="content">

    <h2 class="mb-4">
        Dashboard Admin
    </h2>

    <p>
        Selamat Datang,
        <b>{{ session('admin_nama') }}</b>
    </p>

    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="card card-stat bg-penyakit">
                <div class="card-body">
                    <h5>Total Penyakit</h5>
                    <h2>9</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card card-stat bg-gejala">
                <div class="card-body">
                    <h5>Total Gejala</h5>
                    <h2>30</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card card-stat bg-rule">
                <div class="card-body">
                    <h5>Total Rule</h5>
                    <h2>45</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card card-stat bg-diagnosa">
                <div class="card-body">
                    <h5>Total Diagnosa</h5>
                    <h2>0</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card mt-4">
        <div class="card-header">
            Informasi Sistem
        </div>

        <div class="card-body">

            <p>
                Sistem Pakar Diagnosa ISPA berbasis web.
            </p>

            <ul>
                <li>Mengelola Data Penyakit</li>
                <li>Mengelola Data Gejala</li>
                <li>Mengelola Rule Diagnosa</li>
                <li>Melihat Riwayat Diagnosa</li>
            </ul>

        </div>
    </div>

</div>

</body>
</html>