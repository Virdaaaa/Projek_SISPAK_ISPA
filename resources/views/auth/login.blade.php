<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Sistem Pakar ISPA</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Google Font -->

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        *{
            font-family: 'Poppins', sans-serif;
        }

        body{

            min-height: 100vh;

            background:
                linear-gradient(
                    rgba(10,20,40,0.78),
                    rgba(10,20,40,0.78)
                ),

                url('https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=2070&auto=format&fit=crop');

            background-size: cover;

            background-position: center;

            display: flex;

            align-items: center;

            justify-content: center;

            overflow: hidden;

            padding: 30px;
        }

        .hero-card{

            width: 100%;

            max-width: 1250px;

            background:
                rgba(255,255,255,0.10);

            backdrop-filter: blur(14px);

            border:
                1px solid rgba(255,255,255,0.12);

            border-radius: 35px;

            overflow: hidden;

            box-shadow:
                0 20px 60px rgba(0,0,0,0.40);
        }

        .left-section{

            padding: 75px;

            position: relative;

            z-index: 2;
        }

        .tag{

            display: inline-block;

            background:
                rgba(255,255,255,0.12);

            color: white;

            padding:
                10px 22px;

            border-radius: 999px;

            font-size: 14px;

            margin-bottom: 28px;

            border:
                1px solid rgba(255,255,255,0.08);
        }

        .title{

            color: white;

            font-size: 64px;

            font-weight: 700;

            line-height: 1.15;
        }

        .title span{

            color: #7dc4ff;
        }

        .desc{

            color: rgba(255,255,255,0.82);

            font-size: 18px;

            margin-top: 28px;

            line-height: 1.9;

            max-width: 650px;
        }

        .feature{

            color: white;

            margin-top: 18px;

            font-size: 17px;

            display: flex;

            align-items: center;

            gap: 10px;
        }

        .btn-modern{

            border-radius: 18px;

            padding:
                15px 38px;

            font-weight: 600;

            font-size: 18px;

            transition: 0.35s;
        }

        .btn-modern:hover{

            transform:
                translateY(-5px);

            box-shadow:
                0 12px 30px rgba(0,0,0,0.25);
        }

        .btn-primary{

            background: #1f6fff;

            border: none;
        }

        .btn-primary:hover{

            background: #0f5ae0;
        }

        .btn-light{

            background: white;

            color: #111;
        }

        .right-section{

            position: relative;

            min-height: 100%;

            display: flex;

            align-items: flex-start;

            justify-content: flex-end;

            padding:
                190px 40px 0 0;
        }

        .right-section::before{

            content: '';

            position: absolute;

            width: 320px;

            height: 320px;

            background:
                rgba(125,196,255,0.14);

            border-radius: 50%;

            top: 40px;

            right: 20px;

            filter: blur(90px);

            z-index: 0;
        }

        .doctor-img{

            width: 100%;

            max-width: 360px;

            animation:
                float 3.5s ease-in-out infinite;

            filter:
                drop-shadow(
                    0 0 35px rgba(125,196,255,0.28)
                );

            opacity: 0.96;

            position: relative;

            z-index: 2;
        }

        @keyframes float{

            0%{
                transform: translateY(0px);
            }

            50%{
                transform: translateY(-12px);
            }

            100%{
                transform: translateY(0px);
            }
        }

        @media(max-width: 992px){

            body{

                padding: 20px;
            }

            .title{

                font-size: 44px;
            }

            .left-section{

                padding: 45px;
            }

            .right-section{

                display: none;
            }
        }

    </style>

</head>

<body>

    <div class="container">

        <div class="hero-card">

            <div class="row g-0">

                <!-- LEFT -->

                <div class="col-lg-7">

                    <div class="left-section">

                        <div class="tag">

                            Sistem Pakar Diagnosa Penyakit ISPA

                        </div>

                        <div class="title">

                            Deteksi Penyakit ISPA
                            Secara <span>Cepat & Cerdas</span>

                        </div>

                        <div class="desc">

                            Sistem pakar berbasis
                            Forward Chaining dan
                            Certainty Factor untuk
                            membantu proses diagnosis
                            penyakit ISPA secara interaktif,
                            modern, dan mudah digunakan.

                        </div>

                        <div class="mt-4">

                            <div class="feature">
                                ✔ Diagnosa Interaktif
                            </div>

                            <div class="feature">
                                ✔ Perhitungan Certainty Factor
                            </div>

                            <div class="feature">
                                ✔ Berbasis Knowledge Base
                            </div>

                            <div class="feature">
                                ✔ Hasil Cepat dan Akurat
                            </div>

                        </div>

                        <div class="mt-5 d-flex gap-3 flex-wrap">

                            <a href="/user"
                               class="btn btn-primary btn-modern">

                                Masuk Sebagai User

                            </a>

                            <button
                                class="btn btn-light btn-modern"
                                data-bs-toggle="modal"
                                data-bs-target="#loginModal">

                                Admin Panel

                            </button>

                        </div>

                    </div>

                </div>

                <!-- RIGHT -->

                <div class="col-lg-5">

                    <div class="right-section">

                        <img
                            src="https://cdn-icons-png.flaticon.com/512/2785/2785544.png"
                            class="doctor-img">

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- MODAL LOGIN -->

    <div class="modal fade"
        id="loginModal"
        tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content"
                style="
                    background:#111827;
                    border-radius:24px;
                    color:white;
                ">

                <div class="modal-header border-secondary">

                    <h5 class="modal-title">

                        Login Admin

                    </h5>

                    <button
                        type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">

                    </button>

                </div>

                <form action="/login"
                    method="POST">

                    @csrf

                    <div class="modal-body">

                        @if(session('error'))

                            <div class="alert alert-danger">

                                {{ session('error') }}

                            </div>

                        @endif

                        <div class="mb-3">

                            <label class="mb-2">

                                Username

                            </label>

                            <input
                                type="text"
                                name="username"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="mb-2">

                                Password

                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>

                        </div>

                    </div>

                    <div class="modal-footer border-secondary">

                        <button
                            type="submit"
                            class="btn btn-primary">

                            Login

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>