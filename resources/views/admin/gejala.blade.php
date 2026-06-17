@extends('layout.app')

@section('content')

<style>

*{
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
}

.wrapper{
    display: flex;
}

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

.logo{

    color: white;

    font-size: 28px;

    font-weight: 700;

    margin-bottom: 45px;
}

.logo span{
    color: #60a5fa;
}

.menu-item{

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 14px 16px;

    border-radius: 16px;

    color:
        rgba(255,255,255,0.85);

    text-decoration: none;

    margin-bottom: 12px;

    transition: 0.3s;
}

.menu-item:hover{

    background:
        rgba(96,165,250,0.15);

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

.main{

    margin-left: 230px;

    width: calc(100% - 230px);

    padding: 30px;
}

.topbar{

    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-bottom: 30px;
}

.title{

    color: white;

    font-size: 32px;

    font-weight: 700;
}

.subtitle{

    color:
        rgba(255,255,255,0.65);

    margin-top: 6px;

    font-size: 14px;
}

.btn-add{

    border: none;

    padding:
        12px 20px;

    border-radius: 14px;

    background:
        linear-gradient(
            135deg,
            #2563eb,
            #60a5fa
        );

    color: white;

    font-weight: 600;
}

.list-gejala{

    display: flex;

    flex-direction: column;

    gap: 18px;
}

.card-gejala{

    background:
        rgba(255,255,255,0.08);

    border:
        1px solid rgba(255,255,255,0.10);

    border-radius: 22px;

    padding: 22px 25px;

    backdrop-filter: blur(15px);

    display: flex;

    justify-content: space-between;

    align-items: center;
}

.left{

    display: flex;

    align-items: center;

    gap: 18px;
}

.kode{

    min-width: 70px;

    text-align: center;

    padding:
        8px 14px;

    border-radius: 999px;

    background:
        rgba(96,165,250,0.15);

    color: #93c5fd;

    font-size: 13px;

    font-weight: 600;
}

.nama{

    color: white;

    font-size: 20px;

    font-weight: 600;
}

.actions{

    display: flex;

    gap: 12px;
}

.btn-edit{

    border: none;

    padding:
        10px 18px;

    border-radius: 12px;

    background:
        rgba(59,130,246,0.18);

    color: #93c5fd;
}

.btn-delete{

    border: none;

    padding:
        10px 18px;

    border-radius: 12px;

    background:
        rgba(239,68,68,0.18);

    color: #fca5a5;
}

.modal-content{

    background: #111827;

    color: white;

    border-radius: 22px;
}

.form-control{

    background:
        rgba(255,255,255,0.08);

    border:
        1px solid rgba(255,255,255,0.10);

    color: white;
}

.form-control:focus{

    background:
        rgba(255,255,255,0.08);

    color: white;
}

.form-control[readonly]{

    background:
        rgba(255,255,255,0.08);

    color: white;

    opacity: 1;
}

</style>

<div class="wrapper">

<div class="sidebar">


<div class="logo">

    Admin<span>ISPA</span>

</div>

        <a href="/admin" class="menu-item">
            📊 Dashboard
        </a>

        <a href="/admin/penyakit" class="menu-item">
            🦠 Data Penyakit
        </a>

        <a href="/admin/gejala"
        class="menu-item menu-active">
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

<div class="main">


<div class="topbar">

    <div>

        <div class="title">
            Daftar Gejala
        </div>

        <div class="subtitle">
            Kelola data gejala sistem pakar ISPA
        </div>

    </div>

    <button
        class="btn-add"
        data-bs-toggle="modal"
        data-bs-target="#modalTambah">

        + Tambah Gejala

    </button>

</div>

<div class="list-gejala">

    @foreach($gejalas as $gejala)

    <div class="card-gejala">

        <div class="left">

            <div class="kode">

                {{ $gejala->kode_gejala }}

            </div>

            <div class="nama">

                {{ $gejala->nama_gejala }}

            </div>

        </div>

        <div class="actions">

            <button
                class="btn-edit"
                data-bs-toggle="modal"
                data-bs-target="#edit{{ $gejala->id }}">

                👁 Lihat

            </button>

            <form
                action="/admin/gejala/delete/{{ $gejala->id }}"
                method="POST">

                @csrf
                @method('DELETE')

                <button
                    class="btn-delete"
                    onclick="return confirm('Hapus gejala?')">

                    🗑 Delete

                </button>

            </form>

        </div>

    </div>

    <!-- MODAL EDIT -->
    <div class="modal fade"
         id="edit{{ $gejala->id }}"
         tabindex="-1">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <h5>Detail Gejala</h5>

                    <button
                        type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">

                    </button>

                </div>

                <form
                    action="/admin/gejala/update/{{ $gejala->id }}"
                    method="POST">

                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="mb-3">

                            <label>Kode Gejala</label>

                            <input
                                type="text"
                                readonly
                                name="kode_gejala"
                                class="form-control"
                                value="{{ $gejala->kode_gejala }}"
                                required>

                        </div>

                        <div class="mb-3">

                            <label>Nama Gejala</label>

                            <input
                                type="text"
                                name="nama_gejala"
                                readonly
                                class="form-control"
                                value="{{ $gejala->nama_gejala }}"
                                required>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button
                            type="button"
                            class="btn btn-primary"
                            data-bs-dismiss="modal">

                            Tutup

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    @endforeach

</div>


</div>

</div>

<!-- MODAL TAMBAH -->

<div class="modal fade"
     id="modalTambah"
     tabindex="-1">


<div class="modal-dialog">

    <div class="modal-content">

        {{-- <div class="modal-header">

            {{-- <h5>Tambah Gejala</h5>

            <button
                type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">

            </button> --}}

        {{-- </div> --}} 

        <form
            action="/admin/gejala/store"
            method="POST">

            @csrf

            <div class="modal-body">

                <div class="mb-3">

                    <label>Kode Gejala</label>

                    <input
                        type="text"
                        name="kode_gejala"
                        class="form-control"
                        required>

                </div>

                <div class="mb-3">

                    <label>Nama Gejala</label>

                    <input
                        type="text"
                        name="nama_gejala"
                        class="form-control"
                        required>

                </div>

            </div>

            <div class="modal-footer">

                <button
                    type="submit"
                    class="btn btn-primary">

                    Simpan

                </button>

            </div>

        </form>

    </div>

</div>


</div>

@endsection
