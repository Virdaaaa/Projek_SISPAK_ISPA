@extends('layout.app')

@section('content')

<style>

    body{

        background:
            linear-gradient(
                rgba(10,20,40,0.78),
                rgba(10,20,40,0.78)
            ),

            url('https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=2070&auto=format&fit=crop');

        background-size: cover;

        background-position: center;

        min-height: 100vh;
    }

    .main-card{

        background:
            rgba(255,255,255,0.10);

        backdrop-filter: blur(14px);

        border:
            1px solid rgba(255,255,255,0.10);

        border-radius: 35px;

        overflow: hidden;

        box-shadow:
            0 20px 60px rgba(0,0,0,0.35);
    }

    .left-side{

        padding: 60px;

        color: white;

        height: 100%;
    }

    .step-badge{

        display: inline-block;

        padding:
            10px 22px;

        border-radius: 999px;

        background:
            rgba(255,255,255,0.12);

        margin-bottom: 30px;

        font-size: 14px;
    }

    .main-title{

        font-size: 54px;

        font-weight: 700;

        line-height: 1.2;
    }

    .main-title span{

        color: #7dc4ff;
    }

    .desc{

        margin-top: 25px;

        color:
            rgba(255,255,255,0.8);

        line-height: 1.9;

        font-size: 17px;
    }

    .feature{

        margin-top: 18px;

        font-size: 17px;
    }

    .doctor-image{

        width: 100%;

        max-width: 340px;

        margin-top: 40px;

        animation:
            float 3s ease-in-out infinite;

        filter:
            drop-shadow(
                0 0 35px rgba(125,196,255,0.25)
            );
    }

    @keyframes float{

        0%{
            transform: translateY(0px);
        }

        50%{
            transform: translateY(-10px);
        }

        100%{
            transform: translateY(0px);
        }
    }

    .right-side{

        background:
            rgba(255,255,255,0.95);

        padding: 60px;
    }

    .form-title{

        font-size: 42px;

        font-weight: 700;

        margin-bottom: 10px;

        color: #111827;
    }

    .form-subtitle{

        color: #6b7280;

        margin-bottom: 40px;
    }

    .form-label{

        font-weight: 600;

        margin-bottom: 10px;

        color: #374151;
    }

    .form-control,
    .form-select{

        height: 58px;

        border-radius: 18px;

        border:
            1px solid #dbe3ee;

        padding-left: 20px;

        font-size: 16px;

        transition: 0.3s;
    }

    textarea.form-control{

        height: auto;

        padding-top: 15px;
    }

    .form-control:focus,
    .form-select:focus{

        border-color: #60a5fa;

        box-shadow:
            0 0 0 5px rgba(96,165,250,0.18);
    }

    .btn-next{

        width: 100%;

        height: 60px;

        border: none;

        border-radius: 18px;

        background: #1f6fff;

        color: white;

        font-size: 18px;

        font-weight: 600;

        transition: 0.3s;
    }

    .btn-next:hover{

        background: #0f5ae0;

        transform:
            translateY(-3px);

        box-shadow:
            0 12px 25px rgba(31,111,255,0.25);
    }

    .progress-wrapper{

        margin-bottom: 35px;
    }

    .progress{

        height: 10px;

        border-radius: 999px;

        overflow: hidden;

        background: #e5e7eb;
    }

    .progress-bar{

        width: 33%;

        background:
            linear-gradient(
                90deg,
                #1f6fff,
                #7dc4ff
            );
    }

    @media(max-width: 992px){

        .left-side{

            display: none;
        }

        .right-side{

            padding: 35px;
        }

        .form-title{

            font-size: 34px;
        }
    }

</style>

<div class="container py-5">

    <div class="main-card">

        <div class="row g-0">

            <!-- LEFT -->

            <div class="col-lg-5">

                <div class="left-side">

                    <div class="step-badge">

                        Sistem Pakar Diagnosis ISPA

                    </div>

                    <div class="main-title">

                        Form <span>Data Diri</span>
                        Pasien

                    </div>

                    <div class="desc">

                        Silakan lengkapi data diri pasien
                        sebelum memulai proses diagnosis
                        penyakit ISPA menggunakan metode
                        Forward Chaining dan Certainty Factor.

                    </div>

                    <div class="mt-4">

                        <div class="feature">
                            ✔ Diagnosa Cepat dan Interaktif
                        </div>

                        <div class="feature">
                            ✔ Perhitungan Tingkat Keyakinan
                        </div>

                        <div class="feature">
                            ✔ Berbasis Knowledge Base
                        </div>

                        <div class="feature">
                            ✔ Hasil Akurat dan Modern
                        </div>

                    </div>

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/2785/2785544.png"
                        class="doctor-image">

                </div>

            </div>

            <!-- RIGHT -->

            <div class="col-lg-7">

                <div class="right-side">

                    <div class="progress-wrapper">

                        <div class="d-flex justify-content-between mb-2">

                            <small>
                                Step 1 of 3
                            </small>

                            <small>
                                Data Diri Pasien
                            </small>

                        </div>

                        <div class="progress">

                            <div class="progress-bar"></div>

                        </div>

                    </div>

                    <div class="form-title">

                        Lengkapi Data Diri

                    </div>

                    <div class="form-subtitle">

                        Pastikan data yang dimasukkan sudah benar.

                    </div>

                    <form action="/diagnosa"
                          method="POST">

                        @csrf

                        <div class="row">

                            <!-- Nama -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label">

                                    Nama Lengkap

                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="nama"
                                       placeholder="Masukkan nama lengkap"
                                       required>

                            </div>

                            <!-- Jenis Kelamin -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label">

                                    Jenis Kelamin

                                </label>

                                <select class="form-select"
                                        name="jk"
                                        required>

                                    <option value="">
                                        -- Pilih --
                                    </option>

                                    <option value="Laki-Laki">
                                        Laki-Laki
                                    </option>

                                    <option value="Perempuan">
                                        Perempuan
                                    </option>

                                </select>

                            </div>

                            <!-- Tempat Lahir -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label">

                                    Tempat Lahir

                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="tempat_lahir"
                                       placeholder="Contoh: Yogyakarta"
                                       required>

                            </div>

                            <!-- Tanggal Lahir -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label">

                                    Tanggal Lahir

                                </label>

                                <input type="date"
                                       class="form-control"
                                       name="tanggal_lahir"
                                       required>

                            </div>

                            <!-- Tinggi Badan -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label">

                                    Tinggi Badan (cm)

                                </label>

                                <input type="number"
                                       class="form-control"
                                       name="tinggi_badan"
                                       placeholder="Contoh: 170"
                                       required>

                            </div>

                            <!-- Berat Badan -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label">

                                    Berat Badan (kg)

                                </label>

                                <input type="number"
                                       class="form-control"
                                       name="berat_badan"
                                       placeholder="Contoh: 55"
                                       required>

                            </div>

                            <!-- Alamat -->

                            <div class="col-md-12 mb-4">

                                <label class="form-label">

                                    Alamat Rumah

                                </label>

                                <textarea class="form-control"
                                          rows="4"
                                          name="alamat"
                                          placeholder="Masukkan alamat lengkap"
                                          required></textarea>

                            </div>

                        </div>

                        <button class="btn-next">

                            Lanjutkan Diagnosis →

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection