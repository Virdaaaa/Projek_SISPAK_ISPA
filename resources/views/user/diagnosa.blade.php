@extends('layout.app')

@section('content')

<div class="card p-5">

    <!-- Progress -->

    <div class="mb-4">
        <h2>Diagnosa Gejala Penyakit ISPA</h2>

        <span class="badge bg-primary px-3 py-2">

            Pertanyaan {{ $index + 1 }}
            dari
            {{ count($gejalas) }}

        </span>

    </div>

    <!-- Pertanyaan -->

    <div class="text-center mb-5">

        <h4 class="fw-normal text-secondary">

            Apakah Anda mengalami {{ $gejala->nama_gejala }} ?

        </h4>

    </div>

    <!-- Form -->

    <form action="/diagnosa/next"
          method="POST">

        @csrf

        <input type="hidden"
               name="konsultasi_id"
               value="{{ $konsultasi->id }}">

        <input type="hidden"
               name="index"
               value="{{ $index }}">

        <input type="hidden"
               name="gejala_id"
               value="{{ $gejala->id }}">

        <input type="hidden"
               name="cf_user"
               id="cf_user">

        <!-- Tombol Jawaban -->

        <div class="d-grid gap-3">

            <button type="button"
                    class="btn btn-outline-secondary btn-lg jawaban"
                    data-value="0">

                Tidak

            </button>

            <button type="button"
                    class="btn btn-outline-info btn-lg jawaban"
                    data-value="0.2">

                Sedikit Yakin

            </button>

            <button type="button"
                    class="btn btn-outline-primary btn-lg jawaban"
                    data-value="0.4">

                Cukup Yakin

            </button>

            <button type="button"
                    class="btn btn-outline-warning btn-lg jawaban"
                    data-value="0.6">

                Yakin

            </button>

            <button type="button"
                    class="btn btn-outline-danger btn-lg jawaban"
                    data-value="0.8">

                Sangat Yakin

            </button>

            <button type="button"
                    class="btn btn-outline-success btn-lg jawaban"
                    data-value="1">

                Pasti

            </button>

        </div>

    </form>

</div>

<!-- Script -->

<script>

    const buttons =
        document.querySelectorAll('.jawaban');

    buttons.forEach(button => {

        button.addEventListener('click', function () {

            document.getElementById('cf_user').value =
                this.dataset.value;

            this.closest('form').submit();

        });

    });

</script>

@endsection