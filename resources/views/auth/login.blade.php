<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login Sistem Pakar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body{
            background:#f4f6f9;
        }

        .login-box{
            margin-top:100px;
        }

        .card{
            border:none;
            border-radius:20px;
            box-shadow:0 3px 15px rgba(0,0,0,0.1);
        }

    </style>

</head>

<body>

<div class="container">

    <div class="row justify-content-center login-box">

        <div class="col-md-5">

            <div class="card p-5">

                <h2 class="text-center mb-4">

                    Sistem Pakar ISPA

                </h2>

                <p class="text-center text-muted mb-4">

                    Pilih role untuk masuk

                </p>

                <a href="/user"
                   class="btn btn-primary mb-3">

                   Masuk Sebagai User

                </a>

                <a href="/admin"
                   class="btn btn-dark">

                   Masuk Sebagai Admin

                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>