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

/* SIDEBAR */

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

/* MAIN */

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

/* TABLE */

.table-card{

    background:
        rgba(255,255,255,0.08);

    border:
        1px solid rgba(255,255,255,0.10);

    border-radius: 24px;

    overflow: hidden;

    backdrop-filter: blur(15px);
}

table{
    width: 100%;
}

thead{

    background:
        rgba(255,255,255,0.08);
}

th{

    padding: 18px;

    color: #93c5fd;

    font-size: 14px;

    font-weight: 600;
}

td{

    padding: 18px;

    color: white;

    border-top:
        1px solid rgba(255,255,255,0.06);
}

.badge-inti{

    display: inline-block;

    padding:
        7px 14px;

    border-radius: 999px;

    background:
        rgba(34,197,94,0.18);

    color: #86efac;

    font-size: 12px;

    font-weight: 600;
}

.badge-biasa{

    display: inline-block;

    padding:
        7px 14px;

    border-radius: 999px;

    background:
        rgba(251,191,36,0.18);

    color: #fde68a;

    font-size: 12px;

    font-weight: 600;
}

.actions{

    display: flex;

    gap: 10px;
}

.btn-view{

    border: none;

    padding:
        10px 14px;

    border-radius: 12px;

    background:
        rgba(59,130,246,0.18);

    color: #93c5fd;
}

.btn-delete{

    border: none;

    padding:
        10px 14px;

    border-radius: 12px;

    background:
        rgba(239,68,68,0.18);

    color: #fca5a5;
}

/* MODAL */

.modal-content{

    background: #111827;

    color: white;

    border-radius: 24px;
}

.form-control,
.form-select{
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.10);
    color: white;
}

.form-select option{
    background: #111827;
    color: white;
}

.form-control:focus,
.form-select:focus{

    background:
        rgba(255,255,255,0.08);

    color: white;
}

.form-check-label{
    color: white;
}

.form-select:disabled{

    background:
        rgba(255,255,255,0.08);

    color: white;

    opacity: 1;
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

        <a href="/admin"
           class="menu-item">

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
           class="menu-item menu-active">

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

                    Data Rule Sistem Pakar

                </div>

                <div class="subtitle">

                    Kelola relasi penyakit dan gejala

                </div>

            </div>

            <button
                class="btn-add"
                data-bs-toggle="modal"
                data-bs-target="#modalTambah">

                + Tambah Rule

            </button>

        </div>

        <div class="table-card">

            <table>

                <thead>

                    <tr>

                        <th>Penyakit</th>

                        <th>Gejala</th>

                        <th>Bobot CF</th>

                        <th>Tipe</th>

                        <th width="180">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($rules as $rule)

                    <tr>

                        <td>
                            {{ $rule->penyakit->nama_penyakit }}
                        </td>

                        <td>
                            {{ $rule->gejala->nama_gejala }}
                        </td>

                        <td>
                            {{ $rule->bobot }}
                        </td>

                        <td>

                            @if($rule->is_gejala_inti)

                                <span class="badge-inti">

                                    Gejala Inti

                                </span>

                            @else

                                <span class="badge-biasa">

                                    Pendukung

                                </span>

                            @endif

                        </td>

                        <td>

                            <div class="actions">

                                <button
                                    class="btn-view"
                                    data-bs-toggle="modal"
                                    data-bs-target="#detail{{ $rule->id }}">

                                    👁 Lihat

                                </button>

                                <form
                                    action="/admin/rule/delete/{{ $rule->id }}"
                                    method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="btn-delete"
                                        onclick="return confirm('Hapus rule ini?')">

                                        🗑

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

{{-- MODAL DETAIL --}}

@foreach($rules as $rule)

<div class="modal fade"
     id="detail{{ $rule->id }}"
     tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header border-secondary">

                <h5 class="modal-title">

                    Detail Rule

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

                        Penyakit

                    </label>

                    <select
                        class="form-select"
                        disabled>

                        <option selected>

                            {{ $rule->penyakit->nama_penyakit }}

                        </option>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="mb-2">

                        Gejala

                    </label>

                    <select
                        class="form-select"
                        disabled>

                        <option selected>

                            {{ $rule->gejala->nama_gejala }}

                        </option>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="mb-2">

                        Bobot CF

                    </label>

                    <input
                        type="text"
                        readonly
                        value="{{ $rule->bobot }}"
                        class="form-control">

                </div>

                <div class="form-check">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        disabled
                        {{ $rule->is_gejala_inti ? 'checked' : '' }}>

                    <label class="form-check-label">

                        Gejala Inti

                    </label>

                </div>

            </div>

            <div class="modal-footer border-secondary">

                <button
                    type="button"
                    data-bs-dismiss="modal"
                    class="btn btn-primary">

                    Tutup

                </button>

            </div>

        </div>

    </div>

</div>

@endforeach



{{-- MODAL TAMBAH --}}

<div class="modal fade"
    id="modalTambah"
    tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">

                    Tambah Rule

                </h5>

                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <form
                action="/admin/rule/store"
                method="POST">

                @csrf

                <div class="modal-body">

                    <div class="mb-3">

                        <label class="mb-2">

                            Penyakit

                        </label>

                        <select
                            name="penyakit_id"
                            class="form-select"
                            required>

                            <option value="">

                                -- Pilih Penyakit --

                            </option>

                            @foreach($penyakits as $penyakit)

                            <option value="{{ $penyakit->id }}">

                                {{ $penyakit->nama_penyakit }}

                            </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="mb-3">

                        <label class="mb-2">

                            Gejala

                        </label>

                        <select
                            name="gejala_id"
                            class="form-select"
                            required>

                            <option value="">

                                -- Pilih Gejala --

                            </option>

                            @foreach($gejalas as $gejala)

                            <option value="{{ $gejala->id }}">

                                {{ $gejala->nama_gejala }}

                            </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="mb-3">

                        <label class="mb-2">

                            Bobot CF

                        </label>

                        <input
                            type="number"
                            step="0.1"
                            min="0"
                            max="1"
                            name="bobot"
                            class="form-control"
                            required>

                    </div>

                    <div class="form-check">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="is_gejala_inti"
                            value="1">

                        <label class="form-check-label">

                            Gejala Inti

                        </label>

                    </div>

                </div>

                <div class="modal-footer border-secondary">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                        Batal

                    </button>

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