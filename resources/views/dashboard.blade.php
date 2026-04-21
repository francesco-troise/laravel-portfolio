@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="p-5 mb-4 bg-white border rounded-5 shadow-sm">

            <div class="wrap-person d-flex align-items-center mb-4">
                <i class="fa-solid fa-circle-user fa-5x me-4 text-primary"></i>

                <div class="d-flex flex-column">
                    <h1 class="display-5 fw-bold mb-0 text-capitalize">
                        {{ Auth::user()->name }}
                    </h1>
                    <p class="fs-4 text-muted mb-0">Full Stack Developer</p>
                </div>
            </div>

            <p class="col-md-8 fs-5 mt-2 text-secondary">
                Benvenuto nella tua area riservata. Da qui puoi gestire i tuoi progetti,
                aggiornare il tuo profilo e monitorare i contatti.
            </p>

            <hr class="my-4">

            <div class="d-flex gap-3">
                <a href="#" class="btn btn-primary btn-lg px-5 py-3 fw-semibold shadow-sm">
                    <i class="fa-solid fa-list-check me-2"></i> Vai ai progetti
                </a>
            </div>

        </div>
    </div>
@endsection
