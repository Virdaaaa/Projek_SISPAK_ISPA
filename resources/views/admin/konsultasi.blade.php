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
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(18px);
    border-right: 1px solid rgba(255,255,255,0.08);
    padding: 22px 18px;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
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
    gap: 14px;
    padding: 14px 16px;
    border-radius: 16px;
    color: rgba(255,255,255,0.85);
    text-decoration: none;
    margin-bottom: 12px;
    transition: 0.3s;
}

.menu-item:hover{
    background: rgba(96,165,250,0.15);
    transform: translateX(5px);
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

.title{
    color: white;
    font-size: 34px;
    font-weight: 700;
}

.subtitle{
    color: rgba(255,255,255,0.65);
    margin-top: 6px;
    font-size: 14px;
}

.table-card{
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.10);
    border-radius: 24px;
    overflow: hidden;
    backdrop-filter: blur(15px);
    margin-top: 25px;
}

table{
    width: 100%;
}

thead{
    background: rgba(255,255,255,0.08);
}

th{
    padding: 18px;
    color: #93c5fd;
}

td{
    padding: 18px;
    color: white;
    border-top: 1px solid rgba(255,255,255,0.06);
}

.badge{
    padding: 8px 14px;
    border-radius: 999px;
    background: rgba(34,197,94,0.18);
    color: #86efac;
}

.actions{
    display: flex;
    gap: 10px;
}

.btn-view,
.btn-edit,
.btn-delete{
    border: none;
    padding: 10px 14px;
    border-radius: 12px;
}

.btn-view{
    background: rgba(59,130,246,0.18);
    color: #93c5fd;
}

.btn-edit{
    background: rgba(251,191,36,0.18);
    color: #fde68a;
}

.btn-delete{
    background: rgba(239,68,68,0.18);
    color: #fca5a5;
}

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

.form-control:focus,
.form-select:focus{
    background: rgba(255,255,255,0.08);
    color: white;
}

.form-control[readonly]{
    background: rgba(255,255,255,0.08);
    color: white;
    opacity: 1;
}

textarea.form-control{
    min-height: 90px;
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

        <a href="/admin/gejala" class="menu-item">
            🤒 Data Gejala
        </a>

        <a href="/admin/rule" class="menu-item">
            🔗 Data Rule
        </a>

        <a href="/admin/konsultasi"
           class="menu-item menu-active">
            📋 Data Konsultasi
        </a>

        <a href="/" class="menu-item">
            🚪 Logout
        </a>

    </div>

    <div class="main">

        <div class="title">
            Data Konsultasi
        </div>

        <div class="subtitle">
            Riwayat hasil diagnosa pasien
        </div>

        <div class="table-card">

            <table>

                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Diagnosa</th>
                        <th>Persentase</th>
                        <th width="220">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($konsultasis as $konsultasi)

                    <tr>

                        <td>{{ $konsultasi->nama_pasien }}</td>

                        <td>{{ $konsultasi->jenis_kelamin }}</td>

                        <td>{{ $konsultasi->hasil_diagnosa }}</td>

                        <td>
                            <span class="badge">
                                {{ $konsultasi->persentase }}%
                            </span>
                        </td>

                        <td>

                            <div class="actions">

                                <button
                                    class="btn-view"
                                    data-bs-toggle="modal"
                                    data-bs-target="#detail{{ $konsultasi->id }}">

                                    👁

                                </button>

                                <button
                                    class="btn-edit"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit{{ $konsultasi->id }}">

                                    ✏️

                                </button>

                                <form
                                    action="/admin/konsultasi/delete/{{ $konsultasi->id }}"
                                    method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="btn-delete"
                                        onclick="return confirm('Hapus data konsultasi?')">

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

{{-- MODAL --}}
@foreach($konsultasis as $konsultasi)

{{-- DETAIL --}}
<div class="modal fade"
     id="detail{{ $konsultasi->id }}"
     tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header border-secondary">

                <h5 class="modal-title">
                    Detail Konsultasi
                </h5>

                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <label>Nama Pasien</label>
                    <input type="text"
                           readonly
                           value="{{ $konsultasi->nama_pasien }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Jenis Kelamin</label>
                    <input type="text"
                           readonly
                           value="{{ $konsultasi->jenis_kelamin }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Hasil Diagnosa</label>
                    <input type="text"
                           readonly
                           value="{{ $konsultasi->hasil_diagnosa }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Persentase</label>
                    <input type="text"
                           readonly
                           value="{{ $konsultasi->persentase }}%"
                           class="form-control">
                </div>

            </div>

            <div class="modal-footer border-secondary">

                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">

                    Tutup

                </button>

            </div>

        </div>

    </div>

</div>

{{-- EDIT --}}
<div class="modal fade"
     id="edit{{ $konsultasi->id }}"
     tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header border-secondary">

                <h5 class="modal-title">
                    Edit Konsultasi
                </h5>

                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <form
                action="/admin/konsultasi/update/{{ $konsultasi->id }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="modal-body">

                    <div class="mb-3">
                        <label>Nama Pasien</label>
                        <input type="text"
                               name="nama_pasien"
                               value="{{ $konsultasi->nama_pasien }}"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Jenis Kelamin</label>

                        <select
                            name="jenis_kelamin"
                            class="form-select">

                            <option value="Laki-Laki"
                            {{ $konsultasi->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>
                                Laki-Laki
                            </option>

                            <option value="Perempuan"
                            {{ $konsultasi->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan
                            </option>

                        </select>

                    </div>

                    <div class="mb-3">
                        <label>Tempat Lahir</label>
                        <input type="text"
                               name="tempat_lahir"
                               value="{{ $konsultasi->tempat_lahir }}"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Tanggal Lahir</label>
                        <input type="date"
                               name="tanggal_lahir"
                               value="{{ $konsultasi->tanggal_lahir }}"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Tinggi Badan</label>
                        <input type="number"
                               name="tinggi_badan"
                               value="{{ $konsultasi->tinggi_badan }}"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Berat Badan</label>
                        <input type="number"
                               name="berat_badan"
                               value="{{ $konsultasi->berat_badan }}"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Alamat</label>

                        <textarea
                            name="alamat"
                            class="form-control">{{ $konsultasi->alamat }}</textarea>

                    </div>

                    <div class="mb-3">
                        <label>Hasil Diagnosa</label>
                        <input type="text"
                               name="hasil_diagnosa"
                               value="{{ $konsultasi->hasil_diagnosa }}"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Persentase</label>
                        <input type="number"
                               step="0.01"
                               name="persentase"
                               value="{{ $konsultasi->persentase }}"
                               class="form-control">
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

                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endforeach

@endsection