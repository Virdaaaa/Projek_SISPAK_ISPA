<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Sistem Pakar ISPA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body{
            background:#f4f6f9;
        }

        .navbar{
            background:#0d6efd;
        }

        .navbar-brand{
            color:white !important;
            font-weight:bold;
        }

        .card{
            border:none;
            border-radius:15px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

    </style>

</head>

<body>

    {{-- <nav class="navbar navbar-expand-lg">

        <div class="container">

            <a class="navbar-brand"
               href="/">

               Sistem Pakar ISPA

            </a>

            {{-- <div>

                <a href="/"
                   class="btn btn-light btn-sm">

                   User

                </a>

                <a href="/admin"
                   class="btn btn-dark btn-sm">

                   Admin

                </a>

            </div> --}}

        {{-- </div> --}}

    {{-- </nav> --}} 

    <div class="container mt-5">

        @yield('content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>