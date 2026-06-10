@extends('layout.app')

@section('content')

<div class="card p-5">

    <div class="text-center mb-5">

        <h1 class="text-success fw-bold">

            Hasil Diagnosa ISPA

        </h1>

        <h4 class="mt-4">

            Nama Pasien:
            {{ $konsultasi->nama_pasien }}

        </h4>

    </div>

    <!-- HASIL UTAMA -->

    <div class="card border-success mb-5">

        <div class="card-body text-center">

            <h2 class="text-success fw-bold">

                {{ $hasilUtama['penyakit'] }}

            </h2>

            <h1 class="display-3 fw-bold text-primary mt-3">

                {{ $hasilUtama['persentase'] }}%

            </h1>

            <p class="mt-4">

                {{ $hasilUtama['deskripsi'] }}

            </p>

        </div>

    </div>

    <!-- GEJALA YANG DIPILIH -->

    <div class="card mb-5">

        <div class="card-body">

            <h3 class="mb-4">

                Gejala yang Dipilih

            </h3>

            <div class="row">

                @foreach($detail as $item)

                <div class="col-md-6 mb-3">

                    <div class="p-3 border rounded">

                        ✔ {{ $item->gejala->nama_gejala }}

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>
    <!-- SOLUSI -->

    <div class="card mb-5">

        <div class="card-body">

            <h3 class="mb-3">

                Solusi / Saran

            </h3>

            <p>

                {{ $hasilUtama['solusi'] }}

            </p>

        </div>

    </div>

    <!-- HASIL LAIN -->

    <div class="card">

        <div class="card-body">

            <h3 class="mb-4">

                Kemungkinan Penyakit Lain

            </h3>

            <table class="table">

                <thead>

                    <tr>

                        <th>Penyakit</th>
                        <th>Persentase</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($hasilDiagnosa as $hasil)

                    <tr>

                        <td>
                            {{ $hasil['penyakit'] }}
                        </td>

                        <td>
                            {{ $hasil['persentase'] }}%
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection