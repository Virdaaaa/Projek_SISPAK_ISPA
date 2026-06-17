@extends('layout.app')

@section('content')

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body{

        background:
            linear-gradient(
                rgba(8,15,35,0.92),
                rgba(8,15,35,0.92)
            ),

            url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=2070&auto=format&fit=crop');

        background-size: cover;
        background-position: center;

        min-height: 100vh;

        overflow-x: hidden;
    }

    .admin-wrapper{

        display: flex;

        min-height: 100vh;
    }

    /*
    |--------------------------------------------------------------------------
    | SIDEBAR
    |--------------------------------------------------------------------------
    */

    .sidebar{

        width: 230px;

        background:
            rgba(255,255,255,0.08);

        backdrop-filter: blur(18px);

        border-right:
            1px solid rgba(255,255,255,0.08);

        padding: 22px 18px;

        position: fixed;

        top: 0;
        left: 0;
        bottom: 0;

        z-index: 1000;
    }

    .logo{

        color: white;

        font-size: 28px;

        font-weight: 700;

        margin-bottom: 45px;
    }

    .logo span{

        color: #60a5fa;
    }

    .menu-title{

        color:
            rgba(255,255,255,0.45);

        font-size: 12px;

        margin-bottom: 18px;

        text-transform: uppercase;

        letter-spacing: 1px;
    }

    .menu-item{

        display: flex;

        align-items: center;

        gap: 14px;

        padding: 14px 16px;

        border-radius: 16px;

        color:
            rgba(255,255,255,0.85);

        text-decoration: none;

        margin-bottom: 12px;

        font-size: 15px;

        transition: 0.3s;
    }

    .menu-item:hover{

        background:
            rgba(96,165,250,0.15);

        transform:
            translateX(5px);

        color: white;
    }

    .menu-active{

        background:
            linear-gradient(
                135deg,
                #2563eb,
                #60a5fa
            );

        color: white;
    }

    /*
    |--------------------------------------------------------------------------
    | MAIN CONTENT
    |--------------------------------------------------------------------------
    */

    .main-content{

        margin-left: 230px;

        width: calc(100% - 230px);

        min-height: 100vh;

        padding:
            22px 28px;

        display: flex;

        justify-content: center;
    }

    .dashboard-container{

        width: 100%;

        max-width: 920px;
    }

    /*
    |--------------------------------------------------------------------------
    | TOPBAR
    |--------------------------------------------------------------------------
    */

    .topbar{

        display: flex;

        justify-content: space-between;

        align-items: center;

        margin-bottom: 35px;
    }

    .page-title{

        color: white;

        font-size: 32px;

        font-weight: 700;

        line-height: 1.2;
    }

    .page-subtitle{

        color:
            rgba(255,255,255,0.65);

        margin-top: 8px;

        font-size: 15px;
    }

    .admin-badge{

        background:
            rgba(255,255,255,0.10);

        border:
            1px solid rgba(255,255,255,0.10);

        padding:
            10px 18px;

        border-radius: 14px;

        color: white;

        font-size: 14px;
    }

    /*
    |--------------------------------------------------------------------------
    | STATS GRID
    |--------------------------------------------------------------------------
    */

    .stats-grid{

        display: grid;

        grid-template-columns:
            repeat(2, 1fr);

        gap: 18px;

        margin-top: 25px;

        margin-bottom: 25px;
    }

    .stat-card{

        background:
            rgba(255,255,255,0.08);

        border:
            1px solid rgba(255,255,255,0.10);

        backdrop-filter: blur(14px);

        border-radius: 22px;

        padding: 22px;

        min-height: 160px;

        position: relative;

        overflow: hidden;
    }

    .stat-card::before{

        content: '';

        position: absolute;

        width: 160px;
        height: 160px;

        background:
            rgba(96,165,250,0.12);

        border-radius: 50%;

        top: -60px;
        right: -60px;

        filter: blur(35px);
    }

    .stat-icon{

        width: 50px;
        height: 50px;

        border-radius: 16px;

        display: flex;

        align-items: center;

        justify-content: center;

        font-size: 20px;

        margin-bottom: 14px;
    }

    .icon-blue{

        background:
            linear-gradient(
                135deg,
                #2563eb,
                #60a5fa
            );
    }

    .icon-purple{

        background:
            linear-gradient(
                135deg,
                #7c3aed,
                #c084fc
            );
    }

    .icon-green{

        background:
            linear-gradient(
                135deg,
                #16a34a,
                #4ade80
            );
    }

    .icon-red{

        background:
            linear-gradient(
                135deg,
                #dc2626,
                #fb7185
            );
    }

    .stat-title{

        color:
            rgba(255,255,255,0.65);

        font-size: 14px;

        margin-bottom: 10px;
    }

    .stat-number{

        color: white;

        font-size: 30px;

        font-weight: 700;
    }

    /*
    |--------------------------------------------------------------------------
    | CONTENT CARD
    |--------------------------------------------------------------------------
    */

    .content-card{

        background:
            rgba(255,255,255,0.08);

        border:
            1px solid rgba(255,255,255,0.10);

        border-radius: 24px;

        padding: 24px;

        backdrop-filter: blur(14px);
    }

    .content-title{

        color: white;

        font-size: 26px;

        font-weight: 700;

        margin-bottom: 25px;
    }

    .activity-item{

        display: flex;

        justify-content: space-between;

        align-items: center;

        padding:
            18px 20px;

        border-radius: 18px;

        background:
            rgba(255,255,255,0.05);

        margin-bottom: 14px;
    }

    .activity-left{

        color: white;

        font-size: 15px;
    }

    .activity-small{

        color:
            rgba(255,255,255,0.55);

        font-size: 13px;

        margin-top: 5px;
    }

    .badge-status{

        padding:
            9px 14px;

        border-radius: 999px;

        font-size: 12px;

        font-weight: 600;
    }

    .success{

        background:
            rgba(34,197,94,0.18);

        color: #4ade80;
    }

    .warning{

        background:
            rgba(251,191,36,0.18);

        color: #facc15;
    }

    /*
    |--------------------------------------------------------------------------
    | RESPONSIVE
    |--------------------------------------------------------------------------
    */

    @media(max-width: 992px){

        .sidebar{

            width: 100%;

            height: auto;

            position: relative;
        }

        .main-content{

            margin-left: 0;

            width: 100%;

            padding: 25px;
        }

        .admin-wrapper{

            flex-direction: column;
        }

        .stats-grid{

            grid-template-columns: 1fr;
        }

        .page-title{

            font-size: 32px;
        }
    }

</style>

<div class="admin-wrapper">

    {{-- SIDEBAR --}}
    <div class="sidebar">

        <div class="logo">

            Admin<span>ISPA</span>

        </div>

        <div class="menu-title">

            Main Menu

        </div>

        <a href="/admin"
           class="menu-item menu-active">

            📊 Dashboard

        </a>

        <a href="/admin/penyakit"
           class="menu-item">

            🦠 Data Penyakit

        </a>

        <a href="/admin/gejala"
           class="menu-item">

            🤒 Data Gejala

        </a>

        <a href="/admin/rule"
           class="menu-item">

            🔗 Data Rule

        </a>

        <a href="/admin/konsultasi"
           class="menu-item">

            📋 Data Konsultasi

        </a>

       
        <a href="/"
           class="menu-item">

            🚪 Logout

        </a>

    </div>

    {{-- MAIN --}}
    <div class="main-content">

        <div class="dashboard-container">

            <div class="topbar">

                <div>

                    <div class="page-title">

                        Dashboard Admin

                    </div>

                    <div class="page-subtitle">

                        Monitoring sistem pakar diagnosa penyakit ISPA

                    </div>

                </div>

                <div class="admin-badge">

                    👨‍⚕️ Administrator

                </div>

            </div>

            {{-- STATS --}}
            <div class="stats-grid">

                <div class="stat-card">

                    <div class="stat-icon icon-blue">

                        🦠

                    </div>

                    <div class="stat-title">

                        Total Penyakit

                    </div>

                    <div class="stat-number">

                        {{ $totalPenyakit }}

                    </div>

                </div>

                <div class="stat-card">

                    <div class="stat-icon icon-purple">

                        🤒

                    </div>

                    <div class="stat-title">

                        Total Gejala

                    </div>

                    <div class="stat-number">

                        {{ $totalGejala }}

                    </div>

                </div>

                <div class="stat-card">

                    <div class="stat-icon icon-green">

                        🔗

                    </div>

                    <div class="stat-title">

                        Total Rule

                    </div>

                    <div class="stat-number">

                        {{ $totalRule }}

                    </div>

                </div>

                <div class="stat-card">

                    <div class="stat-icon icon-red">

                        📋

                    </div>

                    <div class="stat-title">

                        Total Konsultasi

                    </div>

                    <div class="stat-number">

                        {{ $totalKonsultasi }}

                    </div>

                </div>

            </div>

            {{-- CONTENT --}}
            <div class="content-card">

                <div class="content-title">

                    Aktivitas Sistem Terbaru

                </div>

                <div class="activity-item">

                    <div class="activity-left">

                        Diagnosa Epiglotitis berhasil diproses

                        <div class="activity-small">

                            2 menit yang lalu

                        </div>

                    </div>

                    <div class="badge-status success">

                        Sukses

                    </div>

                </div>

                <div class="activity-item">

                    <div class="activity-left">

                        Data gejala berhasil diperbarui

                        <div class="activity-small">

                            15 menit yang lalu

                        </div>

                    </div>

                    <div class="badge-status warning">

                        Update

                    </div>

                </div>

                <div class="activity-item">

                    <div class="activity-left">

                        Sistem diagnosa berjalan normal

                        <div class="activity-small">

                            Hari ini

                        </div>

                    </div>

                    <div class="badge-status success">

                        Online

                    </div>

                </div>

            </div>

>>>>>>> cc121af (perbaikan program setelah revisi oleh pak bayu)
        </div>

    </div>

<<<<<<< HEAD
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
=======
</div>

@endsection

