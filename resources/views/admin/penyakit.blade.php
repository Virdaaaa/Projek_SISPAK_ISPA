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
    | MAIN
    |--------------------------------------------------------------------------
    */

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

        transition: 0.3s;
    }

    .btn-add:hover{

        transform:
            translateY(-3px);
    }

    /*
    |--------------------------------------------------------------------------
    | GRID CARD
    |--------------------------------------------------------------------------
    */

    .grid{

        display: grid;

        grid-template-columns:
            repeat(auto-fill,minmax(260px,1fr));

        gap: 20px;
    }

    .card-penyakit{

        background:
            rgba(255,255,255,0.08);

        border:
            1px solid rgba(255,255,255,0.10);

        border-radius: 24px;

        padding: 22px;

        backdrop-filter: blur(15px);

        transition: 0.3s;

        position: relative;

        overflow: hidden;
    }

    .card-penyakit::before{

        content: '';

        position: absolute;

        width: 140px;

        height: 140px;

        background:
            rgba(96,165,250,0.08);

        border-radius: 50%;

        top: -40px;

        right: -40px;

        filter: blur(30px);
    }

    .card-penyakit:hover{

        transform:
            translateY(-6px);

        border:
            1px solid rgba(96,165,250,0.30);

        box-shadow:
            0 12px 28px rgba(96,165,250,0.12);
    }

    .kode{

        display: inline-block;

        padding:
            7px 14px;

        border-radius: 999px;

        background:
            rgba(96,165,250,0.15);

        color: #93c5fd;

        font-size: 12px;

        margin-bottom: 18px;
    }

    .nama{

        color: white;

        font-size: 24px;

        font-weight: 700;

        margin-bottom: 14px;
    }

    .rule{

        color:
            rgba(255,255,255,0.65);

        font-size: 14px;

        margin-bottom: 20px;
    }

    .actions{

        display: flex;

        gap: 10px;
    }

    .btn-edit{

        flex: 1;

        border: none;

        padding: 11px;

        border-radius: 14px;

        background:
            rgba(59,130,246,0.18);

        color: #93c5fd;

        transition: 0.3s;
    }

    .btn-edit:hover{

        background:
            rgba(59,130,246,0.28);
    }

    .btn-delete{

        flex: 1;

        border: none;

        padding: 11px;

        border-radius: 14px;

        background:
            rgba(239,68,68,0.18);

        color: #fca5a5;

        transition: 0.3s;
    }

    .btn-delete:hover{

        background:
            rgba(239,68,68,0.28);
    }

    /*
    |--------------------------------------------------------------------------
    | MODAL
    |--------------------------------------------------------------------------
    */

    .modal-content{

        background:
            rgba(15,20,40,0.97);

        border:
            1px solid rgba(255,255,255,0.08);

        border-radius: 24px;

        color: white;

        backdrop-filter: blur(15px);
    }

    .modal-header,
    .modal-footer{

        border-color:
            rgba(255,255,255,0.08);
    }

    .form-control{

        background:
            rgba(255,255,255,0.08);

        border:
            1px solid rgba(255,255,255,0.08);

        color: white;

        border-radius: 14px;

        padding: 12px;
    }

    .form-control:focus{

        background:
            rgba(255,255,255,0.12);

        color: white;

        border-color:
            #60a5fa;

        box-shadow: none;
    }

    textarea{

        resize: none;
    }

</style>

<div class="wrapper">

```
{{-- SIDEBAR --}}
<div class="sidebar">

    <div class="logo">

        Admin<span>ISPA</span>

    </div>

    <a href="/admin"
       class="menu-item">

        📊 Dashboard

    </a>

    <a href="/admin/penyakit"
       class="menu-item menu-active">

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
<div class="main">

    <div class="topbar">

        <div>

            <div class="title">

                Daftar Penyakit

            </div>

            <div class="subtitle">

                Kelola data penyakit sistem pakar ISPA

            </div>

        </div>

        <button
            class="btn-add"
            data-bs-toggle="modal"
            data-bs-target="#modalTambah">

            + Tambah Penyakit

        </button>

    </div>

    <div class="grid">

        @foreach($penyakits as $penyakit)

            <div class="card-penyakit">

                <div class="kode">

                    {{ $penyakit->kode_penyakit }}

                </div>

                <div class="nama">

                    {{ $penyakit->nama_penyakit }}

                </div>

                <div class="rule">

                    Data penyakit terdaftar

                </div>

                <div class="actions">

                    <button
                        class="btn-edit"
                        data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $penyakit->id }}">

                        ✏️ Edit

                    </button>

                    <form
                        action="/admin/penyakit/{{ $penyakit->id }}"
                        method="POST"
                        style="flex:1;">

                        @csrf
                        @method('DELETE')

                        <button
                            class="btn-delete"
                            style="width:100%;"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">

                            🗑 Delete

                        </button>

                    </form>

                </div>

            </div>

            <!-- MODAL EDIT -->
            <div class="modal fade"
                 id="editModal{{ $penyakit->id }}"
                 tabindex="-1">

                <div class="modal-dialog modal-lg">

                    <div class="modal-content">

                        <form
                            action="/admin/penyakit/{{ $penyakit->id }}"
                            method="POST">

                            @csrf
                            @method('PUT')

                            <div class="modal-header">

                                <h5 class="modal-title">

                                    Edit Penyakit

                                </h5>

                                <button
                                    type="button"
                                    class="btn-close btn-close-white"
                                    data-bs-dismiss="modal">

                                </button>

                            </div>

                            <div class="modal-body">

                                <div class="mb-3">

                                    <label class="mb-2">

                                        Kode Penyakit

                                    </label>

                                    <input
                                        type="text"
                                        name="kode_penyakit"
                                        class="form-control"
                                        value="{{ $penyakit->kode_penyakit }}">

                                </div>

                                <div class="mb-3">

                                    <label class="mb-2">

                                        Nama Penyakit

                                    </label>

                                    <input
                                        type="text"
                                        name="nama_penyakit"
                                        class="form-control"
                                        value="{{ $penyakit->nama_penyakit }}">

                                </div>

                                <div class="mb-3">

                                    <label class="mb-2">

                                        Deskripsi

                                    </label>

                                    <textarea
                                        name="deskripsi"
                                        class="form-control"
                                        rows="4">{{ $penyakit->deskripsi }}</textarea>

                                </div>

                                <div class="mb-3">

                                    <label class="mb-2">

                                        Solusi

                                    </label>

                                    <textarea
                                        name="solusi"
                                        class="form-control"
                                        rows="4">{{ $penyakit->solusi }}</textarea>

                                </div>

                            </div>

                            <div class="modal-footer">

                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal">

                                    Batal

                                </button>

                                <button
                                    type="submit"
                                    class="btn btn-primary">

                                    Simpan Perubahan

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>
```

</div>

<!-- MODAL TAMBAH -->
<div class="modal fade"
     id="modalTambah"
     tabindex="-1">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <form
                action="/admin/penyakit/store"
                method="POST">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">

                        Tambah Penyakit

                    </h5>

                    <button
                        type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">

                    </button>

                </div>

                <div class="modal-body">

                    <div class="mb-3">

                        <label class="mb-2">

                            Kode Penyakit

                        </label>

                        <input
                            type="text"
                            name="kode_penyakit"
                            class="form-control"
                            placeholder="Contoh: P010">

                    </div>

                    <div class="mb-3">

                        <label class="mb-2">

                            Nama Penyakit

                        </label>

                        <input
                            type="text"
                            name="nama_penyakit"
                            class="form-control"
                            placeholder="Masukkan nama penyakit">

                    </div>

                    <div class="mb-3">

                        <label class="mb-2">

                            Deskripsi

                        </label>

                        <textarea
                            name="deskripsi"
                            class="form-control"
                            rows="4"
                            placeholder="Masukkan deskripsi penyakit"></textarea>

                    </div>

                    <div class="mb-3">

                        <label class="mb-2">

                            Solusi

                        </label>

                        <textarea
                            name="solusi"
                            class="form-control"
                            rows="4"
                            placeholder="Masukkan solusi penanganan"></textarea>

                    </div>

                </div>

                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                        Batal

                    </button>

                    <button
                        type="submit"
                        class="btn btn-primary">

                        Simpan Penyakit

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>
@endsection
