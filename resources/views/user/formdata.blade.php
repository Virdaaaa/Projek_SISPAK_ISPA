php
@extends('layout.app')

@section('content')

<div class="card p-5">

    <h2 class="mb-4">

        Form Data Diri Pasien

    </h2>

    <form action="/diagnosa"
          method="POST">

        @csrf

        <div class="row">

            <!-- Nama -->

            <div class="col-md-6 mb-3">

                <label class="form-label">

                    Nama Lengkap

                </label>

                <input type="text"
                       class="form-control"
                       name="nama"
                       required>

            </div>

            <!-- Jenis Kelamin -->

            <div class="col-md-6 mb-3">

                <label class="form-label">

                    Jenis Kelamin

                </label>

                <select class="form-control"
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

            <div class="col-md-6 mb-3">

                <label class="form-label">

                    Tempat Lahir

                </label>

                <input type="text"
                       class="form-control"
                       name="tempat_lahir"
                       required>

            </div>

            <!-- Tanggal Lahir -->

            <div class="col-md-6 mb-3">

                <label class="form-label">

                    Tanggal Lahir

                </label>

                <input type="date"
                       class="form-control"
                       name="tanggal_lahir"
                       required>

            </div>

            <!-- Tinggi Badan -->

            <div class="col-md-6 mb-3">

                <label class="form-label">

                    Tinggi Badan (cm)

                </label>

                <input type="number"
                       class="form-control"
                       name="tinggi_badan"
                       required>

            </div>

            <!-- Berat Badan -->

            <div class="col-md-6 mb-3">

                <label class="form-label">

                    Berat Badan (kg)

                </label>

                <input type="number"
                       class="form-control"
                       name="berat_badan"
                       required>

            </div>

            <!-- Alamat -->

            <div class="col-md-12 mb-3">

                <label class="form-label">

                    Alamat Rumah

                </label>

                <textarea class="form-control"
                          rows="3"
                          name="alamat"
                          required></textarea>

            </div>

        </div>

        <button class="btn btn-primary">

            Next

        </button>

    </form>

</div>

@endsection

