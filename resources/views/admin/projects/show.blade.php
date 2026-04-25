@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="mb-4 d-flex align-items-center gap-2">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary btn-sm shadow-sm">
                <i class="bi bi-arrow-left me-1"></i> Torna alla lista
            </a>

            <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning btn-sm shadow-sm">
                <i class="bi bi-pencil me-1"></i> Modifica progetto
            </a>

            <form action="{{ route('projects.destroy', $project) }}" method="POST" class="m-0">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm shadow-sm"
                    onclick="return confirm('Sei sicuro di voler eliminare questo progetto?')">
                    <i class="bi bi-trash me-1"></i> Elimina progetto
                </button>
            </form>
        </div>

        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="card-header bg-dark text-white p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-uppercase small fw-bold opacity-75">Dettaglio Progetto</span>
                        <h1 class="h2 mb-0 mt-1">{{ $project->title }}</h1>
                    </div>
                    <span
                        class="badge rounded-pill {{ $project->status == 'finale' ? 'bg-success' : 'bg-warning text-dark' }} fs-6 px-3 py-2">
                        <i
                            class="bi {{ $project->status == 'finale' ? 'bi-check-circle-fill' : 'bi-clock-history' }} me-1"></i>
                        {{ ucfirst($project->status) }}
                    </span>
                </div>
            </div>

            <div class="card-body p-4">
                <div class="row g-4">
                    <div class="col-md-8">
                        <h5 class="fw-bold border-bottom pb-2 mb-3">
                            <i class="bi bi-file-earmark-text me-2 text-primary"></i>Descrizione
                        </h5>
                        <p class="text-secondary lh-lg">
                            {{ $project->description ?: 'Nessuna descrizione fornita per questo progetto.' }}
                        </p>
                    </div>

                    <div class="col-md-4">
                        <div class="bg-light p-3 rounded-3 shadow-sm mb-4">
                            <h6 class="fw-bold mb-3">Dettagli Tecnici</h6>
                            <div class="mb-3">
                                <span class="text-muted d-block">Versione attuale:</span>
                                <span class="badge bg-secondary px-3 py-2 fs-6 mt-1">
                                    <i class="bi bi-git me-1"></i> v{{ $project->version }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-white text-muted small p-3 text-center">

                Creato il {{ $project->created_at->format('d/m/Y') }} • Ultima modifica
                {{ $project->updated_at->diffForHumans() }}


            </div>
        </div>
    </div>
@endsection
