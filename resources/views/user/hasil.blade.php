<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Hasil Diagnosa ISPA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

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
                    rgba(8,15,35,0.92),
                    rgba(8,15,35,0.92)
                ),

                url('https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=2070&auto=format&fit=crop');

            background-size: cover;

            background-position: center;

            padding: 40px 20px;
        }

        .main-card{

            max-width: 1250px;

            margin: auto;

            background:
                rgba(255,255,255,0.08);

            backdrop-filter: blur(15px);

            border:
                1px solid rgba(255,255,255,0.1);

            border-radius: 35px;

            overflow: hidden;

            box-shadow:
                0 20px 60px rgba(0,0,0,0.35);
        }

        .top-section{

            padding: 45px;
        }

        .tag{

            display: inline-block;

            padding:
                10px 20px;

            border-radius: 999px;

            background:
                rgba(255,255,255,0.12);

            color: white;

            font-size: 14px;

            margin-bottom: 25px;
        }

        .title{

            color: white;

            font-size: 55px;

            font-weight: 700;

            line-height: 1.2;
        }

        .subtitle{

            color: rgba(255,255,255,0.75);

            margin-top: 18px;

            font-size: 18px;

            line-height: 1.8;
        }

        .prediction-grid{

            display: grid;

            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));

            gap: 25px;

            margin-top: 45px;
        }

        .prediction-card{

            background:
                rgba(255,255,255,0.08);

            border:
                1px solid rgba(255,255,255,0.12);

            border-radius: 30px;

            padding: 35px;

            position: relative;

            overflow: hidden;
        }

        .prediction-card::before{

            content: '';

            position: absolute;

            width: 220px;

            height: 220px;

            background:
                rgba(125,196,255,0.08);

            border-radius: 50%;

            top: -50px;

            right: -50px;

            filter: blur(20px);
        }

        .ranking{

            width: 55px;

            height: 55px;

            border-radius: 18px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 700;

            font-size: 24px;

            color: white;

            margin-bottom: 25px;
        }

        .rank-1{

            background:
                linear-gradient(135deg,#4facfe,#00f2fe);
        }

        .rank-2{

            background:
                linear-gradient(135deg,#8e2de2,#4a00e0);
        }

        .penyakit{

            color: white;

            font-size: 38px;

            font-weight: 700;

            margin-bottom: 10px;
        }

        .persen{

            font-size: 75px;

            font-weight: 700;

            color: #74c0ff;

            line-height: 1;
        }

        .status{

            display: inline-block;

            margin-top: 20px;

            padding:
                10px 20px;

            border-radius: 999px;

            font-size: 14px;

            font-weight: 600;
        }

        .tinggi{

            background:
                rgba(40,167,69,0.2);

            color: #6dff8f;
        }

        .sedang{

            background:
                rgba(255,193,7,0.18);

            color: #ffd65a;
        }

        .rendah{

            background:
                rgba(220,53,69,0.18);

            color: #ff7c8d;
        }

        .section-card{

            margin-top: 30px;

            background:
                rgba(255,255,255,0.08);

            border:
                1px solid rgba(255,255,255,0.1);

            border-radius: 30px;

            padding: 35px;
        }

        .section-title{

            color: white;

            font-size: 32px;

            font-weight: 700;

            margin-bottom: 25px;
        }

        .chip{

            display: inline-block;

            padding:
                12px 18px;

            border-radius: 999px;

            background:
                rgba(116,192,255,0.12);

            border:
                1px solid rgba(116,192,255,0.25);

            color: #9fd5ff;

            margin:
                8px 8px 0 0;

            font-size: 14px;
        }

        .solusi{

            color: rgba(255,255,255,0.82);

            line-height: 2;

            font-size: 17px;
        }

        .deskripsi{

            color: rgba(255,255,255,0.82);

            line-height: 2;

            font-size: 17px;
        }

        .ranking-item{

            background:
                rgba(255,255,255,0.06);

            border-radius: 22px;

            padding: 20px;

            margin-bottom: 18px;
        }

        .ranking-top{

            display: flex;

            justify-content: space-between;

            margin-bottom: 12px;

            color: white;

            font-weight: 600;
        }

        .progress{

            height: 12px;

            border-radius: 999px;

            background:
                rgba(255,255,255,0.08);
        }

        .progress-bar{

            border-radius: 999px;
        }

        .disclaimer{

            margin-top: 35px;

            padding: 22px;

            border-radius: 20px;

            background:
                rgba(255,193,7,0.08);

            border:
                1px solid rgba(255,193,7,0.15);

            color: #ffe28a;

            line-height: 1.8;
        }

        @media(max-width:768px){

            .title{
                font-size: 38px;
            }

            .persen{
                font-size: 55px;
            }

            .penyakit{
                font-size: 30px;
            }

            .top-section{
                padding: 30px;
            }
        }

    </style>

</head>

<body>

    <div class="main-card">

        <div class="top-section">

            <div class="tag">

                Sistem Pakar Analisis ISPA

            </div>

            <div class="title">

                Hasil Diagnosa Penyakit ISPA

            </div>

            <div class="subtitle">

                Sistem menganalisis gejala menggunakan metode
                Forward Chaining dan Certainty Factor untuk
                menentukan kemungkinan penyakit berdasarkan
                gejala yang dipilih pengguna.

            </div>

            {{-- TOP HASIL --}}

            <div class="prediction-grid">

                @foreach(array_slice($hasilDiagnosa,0,2) as $index => $hasil)

                    <div class="prediction-card">

                        <div class="ranking
                            {{ $index == 0 ? 'rank-1' : 'rank-2' }}">

                            {{ $index + 1 }}

                        </div>

                        <div class="penyakit">

                            {{ $hasil['penyakit'] }}

                        </div>

                        <div class="persen">

                            {{ $hasil['persentase'] }}%

                        </div>

                        @php

                            $status = 'Kemungkinan Rendah';
                            $class = 'rendah';

                            if($hasil['persentase'] >= 70){

                                $status = 'Kemungkinan Tinggi';
                                $class = 'tinggi';
                            }

                            elseif($hasil['persentase'] >= 40){

                                $status = 'Kemungkinan Sedang';
                                $class = 'sedang';
                            }

                        @endphp

                        <div class="status {{ $class }}">

                            {{ $status }}

                        </div>

                    </div>

                @endforeach

            </div>

            {{-- GEJALA USER --}}

            <div class="section-card">

                <div class="section-title">

                    Gejala yang Dipilih

                </div>

                @foreach($detail as $d)

                    <div class="chip">

                        ✓ {{ $d->gejala->nama_gejala }}

                    </div>

                @endforeach

            </div>

            {{-- DESKRIPSI PENYAKIT --}}

            <div class="section-card">

                <div class="section-title">

                    Deskripsi Penyakit

                </div>

                <div class="deskripsi">

                    {!! nl2br(
                        $hasilDiagnosa[0]['deskripsi']
                        ??
                        'Belum tersedia deskripsi penyakit.'
                    ) !!}

                </div>

            </div>

            {{-- SOLUSI --}}

            <div class="section-card">

                <div class="section-title">

                    Saran Penanganan Awal

                </div>

                <div class="solusi">

                    {!! nl2br(
                        $hasilDiagnosa[0]['solusi']
                        ??
                        'Disarankan untuk beristirahat, menjaga pola makan, memperbanyak cairan, dan melakukan pemeriksaan lebih lanjut ke tenaga medis.'
                    ) !!}

                </div>

            </div>

            {{-- RANKING --}}

            <div class="section-card">

                <div class="section-title">

                    Ranking Kemungkinan Penyakit

                </div>

                @foreach($hasilDiagnosa as $hasil)

                    @if($hasil['persentase'] > 0)

                        <div class="ranking-item">

                            <div class="ranking-top">

                                <div>

                                    {{ $hasil['penyakit'] }}

                                </div>

                                <div>

                                    {{ $hasil['persentase'] }}%

                                </div>

                            </div>

                            <div class="progress">

                                <div class="progress-bar bg-info"
                                     style="width: {{ $hasil['persentase'] }}%">

                                </div>

                            </div>

                        </div>

                    @endif

                @endforeach

            </div>

            {{-- DISCLAIMER --}}

            <div class="disclaimer">

                <b>Disclaimer:</b>
                Sistem ini hanya memberikan prediksi awal berdasarkan
                gejala yang dipilih pengguna dan tidak menggantikan
                diagnosis dokter atau tenaga medis profesional.

            </div>

            {{-- BUTTON --}}

            <div class="mt-5 d-flex gap-3 flex-wrap justify-content-center">

                <a href="/user"
                   class="btn btn-primary px-4 py-3 rounded-4 fw-semibold">

                    Diagnosa Ulang

                </a>

                <a href="/"
                   class="btn btn-outline-light px-4 py-3 rounded-4 fw-semibold">

                    Kembali Home

                </a>

            </div>

        </div>

    </div>

</body>

</html>