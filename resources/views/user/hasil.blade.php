@extends('layout.app')

@section('content')

<style>

    body{

        background:
            linear-gradient(
                rgba(8,15,35,0.88),
                rgba(8,15,35,0.88)
            ),

            url('https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=2070&auto=format&fit=crop');

        background-size: cover;

        background-position: center;

        min-height: 100vh;

        font-family: 'Poppins', sans-serif;

        padding:
            50px 20px;
    }

    .result-wrapper{

        max-width: 1200px;

        margin: auto;
    }

    .glass-card{

        background:
            rgba(255,255,255,0.10);

        backdrop-filter: blur(18px);

        border:
            1px solid rgba(255,255,255,0.12);

        border-radius: 30px;

        box-shadow:
            0 20px 60px rgba(0,0,0,0.35);

        overflow: hidden;
    }

    .hero-section{

        padding:
            60px;

        position: relative;
    }

    .hero-section::before{

        content: '';

        position: absolute;

        width: 320px;

        height: 320px;

        background:
            rgba(125,196,255,0.15);

        border-radius: 50%;

        top: -100px;

        right: -100px;

        filter: blur(80px);
    }

    .badge-modern{

        display: inline-block;

        background:
            rgba(255,255,255,0.12);

        color: white;

        padding:
            10px 20px;

        border-radius: 999px;

        font-size: 14px;

        margin-bottom: 25px;
    }

    .title{

        color: white;

        font-size: 48px;

        font-weight: 700;

        margin-bottom: 10px;
    }

    .subtitle{

        color:
            rgba(255,255,255,0.75);

        font-size: 18px;

        margin-bottom: 50px;
    }

    .result-card{

        background:
            rgba(255,255,255,0.08);

        border:
            1px solid rgba(255,255,255,0.12);

        border-radius: 30px;

        padding:
            40px;

        text-align: center;

        position: relative;

        overflow: hidden;
    }

    .result-card::before{

        content: '';

        position: absolute;

        width: 250px;

        height: 250px;

        background:
            rgba(59,130,246,0.18);

        border-radius: 50%;

        top: -80px;

        right: -80px;

        filter: blur(70px);
    }

    .diagnosa-icon{

        font-size: 70px;

        margin-bottom: 20px;
    }

    .penyakit-name{

        color: white;

        font-size: 40px;

        font-weight: 700;

        margin-bottom: 15px;
    }

    .persen{

        font-size: 90px;

        font-weight: 700;

        background:
            linear-gradient(
                90deg,
                #60a5fa,
                #7dd3fc
            );

        -webkit-background-clip: text;

        -webkit-text-fill-color: transparent;

        line-height: 1;
    }

    .status{

        display: inline-block;

        margin-top: 20px;

        background:
            rgba(34,197,94,0.15);

        color: #4ade80;

        padding:
            10px 22px;

        border-radius: 999px;

        font-weight: 600;
    }

    .section-card{

        background:
            rgba(255,255,255,0.08);

        border:
            1px solid rgba(255,255,255,0.10);

        border-radius: 25px;

        padding:
            30px;

        margin-top: 30px;
    }

    .section-title{

        color: white;

        font-size: 28px;

        font-weight: 600;

        margin-bottom: 25px;
    }

    .tag-gejala{

        display: inline-block;

        background:
            rgba(59,130,246,0.15);

        color: #93c5fd;

        border:
            1px solid rgba(147,197,253,0.25);

        padding:
            12px 20px;

        border-radius: 999px;

        margin:
            8px;

        font-size: 15px;
    }

    .solusi-box{

        background:
            rgba(255,255,255,0.05);

        border-radius: 20px;

        padding:
            25px;

        color:
            rgba(255,255,255,0.85);

        line-height: 2;

        font-size: 16px;
    }

    .ranking-card{

        background:
            rgba(255,255,255,0.06);

        border:
            1px solid rgba(255,255,255,0.08);

        border-radius: 22px;

        padding:
            25px;

        margin-bottom: 20px;

        transition: 0.3s;
    }

    .ranking-card:hover{

        transform:
            translateY(-5px);

        background:
            rgba(59,130,246,0.12);
    }

    .ranking-top{

        display: flex;

        justify-content: space-between;

        align-items: center;

        margin-bottom: 15px;
    }

    .ranking-name{

        color: white;

        font-size: 22px;

        font-weight: 600;
    }

    .ranking-percent{

        color: #7dd3fc;

        font-size: 24px;

        font-weight: 700;
    }

    .progress-modern{

        height: 12px;

        background:
            rgba(255,255,255,0.08);

        border-radius: 999px;

        overflow: hidden;
    }

    .progress-modern div{

        height: 100%;

        background:
            linear-gradient(
                90deg,
                #3b82f6,
                #7dd3fc
            );

        border-radius: 999px;
    }

    .btn-modern{

        border-radius: 18px;

        padding:
            14px 28px;

        font-weight: 600;

        font-size: 16px;

        transition: 0.3s;
    }

    .btn-modern:hover{

        transform:
            translateY(-4px);
    }

    @media(max-width: 768px){

        .hero-section{

            padding: 30px;
        }

        .title{

            font-size: 35px;
        }

        .persen{

            font-size: 60px;
        }

        .penyakit-name{

            font-size: 30px;
        }
    }

</style>

<div class="result-wrapper">

    <div class="glass-card">

        <div class="hero-section">

            <div class="badge-modern">

                Sistem Pakar Diagnosis ISPA

            </div>

            <div class="title">

                Hasil Diagnosis Penyakit

            </div>

            <div class="subtitle">

                Analisis gejala menggunakan metode
                Forward Chaining dan Certainty Factor.

            </div>

            {{-- HASIL UTAMA --}}
            <div class="result-card">

                <div class="diagnosa-icon">

                    🩺

                </div>

                <div class="penyakit-name">

                    {{ $hasilUtama['penyakit'] }}

                </div>

                <div class="persen">

                    {{ round($hasilUtama['persentase'], 2) }}%

                </div>

                @php

                $persen = $hasilUtama['persentase'];

                if($persen >= 80){

                    $status = 'Tingkat Keyakinan Sangat Tinggi';
                    $badgeClass = 'high';

                }elseif($persen >= 60){

                    $status = 'Tingkat Keyakinan Tinggi';
                    $badgeClass = 'medium';

                }elseif($persen >= 40){

                    $status = 'Tingkat Keyakinan Sedang';
                    $badgeClass = 'low';

                }elseif($persen > 0){

                    $status = 'Tingkat Keyakinan Rendah';
                    $badgeClass = 'very-low';

                }else{

                    $status = 'Tidak Terdeteksi';
                    $badgeClass = 'not-detected';
                }

            @endphp

            <div class="status {{ $badgeClass }}">

                {{ $status }}

            </div>

            </div>

            {{-- GEJALA --}}
            <div class="section-card">

                <div class="section-title">

                    Gejala yang Dipilih

                </div>

                @foreach($detail as $detail)

                    <div class="tag-gejala">

                        ✓ {{ $detail->gejala->nama_gejala }}

                    </div>

                @endforeach

            </div>

            {{-- SOLUSI --}}
            <div class="section-card">

                <div class="section-title">

                    Solusi & Saran Penanganan

                </div>

                <div class="solusi-box">

                    {!! nl2br(e($hasilUtama['solusi'])) !!}

                </div>

            </div>

            {{-- RANKING --}}
            <div class="section-card">

                <div class="section-title">

                    Kemungkinan Penyakit Lain

                </div>

                @foreach($hasilDiagnosa as $item)

                    <div class="ranking-card">

                        <div class="ranking-top">

                            <div class="ranking-name">

                                {{ $item['penyakit'] }}

                            </div>

                            <div class="ranking-percent">

                                {{ round($item['persentase'], 2) }}%

                            </div>

                        </div>

                        <div class="progress-modern">

                            <div style="width:
                                {{ $item['persentase'] }}%;
                            "></div>

                        </div>

                    </div>

                @endforeach

            </div>

            {{-- BUTTON --}}
            <div class="mt-5 d-flex gap-3 flex-wrap justify-content-center">

                <a href="/user"
                   class="btn btn-primary btn-modern">

                    Diagnosa Ulang

                </a>

                <button class="btn btn-light btn-modern">

                    Cetak PDF

                </button>

                <a href="/"
                   class="btn btn-outline-light btn-modern">

                    Kembali Home

                </a>

            </div>

        </div>

    </div>

</div>

@endsection