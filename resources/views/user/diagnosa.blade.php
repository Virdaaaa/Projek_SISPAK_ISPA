@extends('layout.app')

@section('content')

<style>

    body{

        background:
            linear-gradient(
                rgba(8,15,35,0.82),
                rgba(8,15,35,0.82)
            ),

            url('https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=2070&auto=format&fit=crop');

        background-size: cover;

        background-position: center;

        min-height: 100vh;

        font-family: 'Poppins', sans-serif;
    }

    .diagnosa-wrapper{

        min-height: 100vh;

        display: flex;

        align-items: center;

        justify-content: center;

        padding: 40px 20px;
    }

    .diagnosa-card{

        width: 100%;

        max-width: 900px;

        background:
            rgba(255,255,255,0.10);

        backdrop-filter: blur(18px);

        border:
            1px solid rgba(255,255,255,0.12);

        border-radius: 35px;

        padding: 50px;

        box-shadow:
            0 20px 60px rgba(0,0,0,0.35);

        color: white;

        position: relative;

        overflow: hidden;
    }

    .diagnosa-card::before{

        content: '';

        position: absolute;

        width: 300px;

        height: 300px;

        background:
            rgba(125,196,255,0.12);

        border-radius: 50%;

        top: -120px;

        right: -100px;

        filter: blur(70px);
    }

    .step-badge{

        display: inline-block;

        background:
            rgba(255,255,255,0.15);

        padding:
            10px 20px;

        border-radius: 999px;

        font-size: 14px;

        margin-bottom: 25px;
    }

    .main-title{

        font-size: 42px;

        font-weight: 700;

        margin-bottom: 10px;
    }

    .main-desc{

        color:
            rgba(255,255,255,0.75);

        margin-bottom: 40px;

        font-size: 17px;
    }

    .progress-custom{

        height: 10px;

        border-radius: 999px;

        background:
            rgba(255,255,255,0.12);

        overflow: hidden;

        margin-bottom: 45px;
    }

    .progress-custom div{

        height: 100%;

        background:
            linear-gradient(
                90deg,
                #3b82f6,
                #7dc4ff
            );

        border-radius: 999px;

        transition: 0.4s;
    }

    .question-icon{

        font-size: 65px;

        margin-bottom: 20px;
    }

    .question-title{

        font-size: 38px;

        font-weight: 700;

        line-height: 1.4;

        margin-bottom: 15px;
    }

    .question-sub{

        color:
            rgba(255,255,255,0.75);

        margin-bottom: 40px;

        font-size: 17px;
    }

    .answer-btn{

        width: 100%;

        background:
            rgba(255,255,255,0.08);

        border:
            1px solid rgba(255,255,255,0.12);

        border-radius: 22px;

        padding:
            22px 25px;

        margin-bottom: 18px;

        color: white;

        font-size: 18px;

        font-weight: 500;

        text-align: left;

        transition: 0.3s;

        position: relative;

        overflow: hidden;
    }

    .answer-btn:hover{

        transform:
            translateY(-4px);

        background:
            rgba(59,130,246,0.18);

        border-color:
            #7dc4ff;

        box-shadow:
            0 10px 25px rgba(0,0,0,0.25);
    }

    .answer-btn span{

        float: right;

        opacity: 0.7;
    }

    .footer-note{

        text-align: center;

        margin-top: 25px;

        color:
            rgba(255,255,255,0.65);

        font-size: 14px;
    }

    @media(max-width: 768px){

        .diagnosa-card{

            padding: 30px;
        }

        .main-title{

            font-size: 30px;
        }

        .question-title{

            font-size: 28px;
        }
    }

</style>

<div class="diagnosa-wrapper">

    <div class="diagnosa-card">

        {{-- STEP --}}
        <div class="step-badge">

            Pertanyaan {{ $index + 1 }}
            dari
            {{ count($gejalas) }}

        </div>

        {{-- TITLE --}}
        <div class="main-title">

            Diagnosa Penyakit ISPA

        </div>

        <div class="main-desc">

            Jawab pertanyaan berikut sesuai kondisi yang Anda alami
            untuk membantu sistem menganalisis penyakit ISPA.

        </div>

        {{-- PROGRESS --}}
        <div class="progress-custom">

            <div style="width:
                {{ (($index + 1) / count($gejalas)) * 100 }}%;
            ">
            </div>

        </div>

        {{-- QUESTION --}}
        <div class="text-center">

            <div class="question-icon">

                🤒

            </div>

            <div class="question-title">

                Apakah Anda mengalami
                <span style="color:#7dc4ff">

                    {{ $gejala->nama_gejala }}

                </span>
                ?

            </div>

            <div class="question-sub">

                Pilih tingkat keyakinan Anda terhadap gejala tersebut.

            </div>

        </div>

        {{-- FORM --}}
        <form action="/next-diagnosa"
              method="POST">

            @csrf

            <input type="hidden"
                   name="konsultasi_id"
                   value="{{ $konsultasi->id }}">

            <input type="hidden"
                   name="gejala_id"
                   value="{{ $gejala->id }}">

            <input type="hidden"
                   name="index"
                   value="{{ $index }}">

            {{-- TIDAK --}}
            <button type="submit"
                    name="cf_user"
                    value="0"
                    class="answer-btn">

                Tidak

                

            </button>

            {{-- SEDIKIT --}}
            <button type="submit"
                    name="cf_user"
                    value="0.2"
                    class="answer-btn">

                Sedikit Yakin

                

            </button>

            {{-- CUKUP --}}
            <button type="submit"
                    name="cf_user"
                    value="0.4"
                    class="answer-btn">

                Cukup Yakin

                

            </button>

            {{-- YAKIN --}}
            <button type="submit"
                    name="cf_user"
                    value="0.6"
                    class="answer-btn">

                Yakin

                

            </button>

            {{-- SANGAT --}}
            <button type="submit"
                    name="cf_user"
                    value="0.8"
                    class="answer-btn">

                Sangat Yakin

                

            </button>

            {{-- PASTI --}}
            <button type="submit"
                    name="cf_user"
                    value="1"
                    class="answer-btn">

                Pasti

                

            </button>

        </form>

        <div class="footer-note">

            Sistem menggunakan metode
            Forward Chaining dan Certainty Factor.

        </div>

    </div>

</div>

@endsection