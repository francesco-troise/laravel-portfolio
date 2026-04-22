@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-dark text-white rounded-3">
        <div class="container py-5 text-center">
            <div class="mb-4">
                <i class="fa-solid fa-user-shield fa-5x text-primary"></i>
            </div>

            <h1 class="display-4 fw-bold">Portfolio Admin Panel</h1>

            <p class="col-md-10 mx-auto fs-4 text-light">
                Benvenuto nel sistema di gestione del tuo Portfolio personale.
                Accedi per pubblicare nuovi progetti, aggiornare le tue competenze
                e gestire i messaggi ricevuti.
            </p>

            <div class="mt-5 d-flex justify-content-center gap-3">

                <a href="{{ route('dashboard') }}" class="btn btn-success btn-lg px-5 shadow">
                    <i class="fa-solid fa-gauge me-2"></i> Vai alla Dashboard
                </a>

            </div>
        </div>
    </div>

    <div class="container my-5 text-center">
        <div class="row g-4">
            <div class="col-md-4">
                <i class="fa-solid fa-code fa-2x mb-3 text-primary"></i>
                <h3>Gestione Progetti</h3>
                <p class="text-muted">Aggiungi, modifica o elimina i tuoi lavori migliori in pochi click.</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-envelope fa-2x mb-3 text-primary"></i>
                <h3>Contatti</h3>
                <p class="text-muted">Gestisci i tuoi contatti con i clienti dei progetti</p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-lock fa-2x mb-3 text-primary"></i>
                <h3>Sicurezza</h3>
                <p class="text-muted">Accesso protetto tramite autenticazione Laravel Breeze.</p>
            </div>
        </div>
    </div>
@endsection
