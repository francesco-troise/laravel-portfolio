@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Elenco Progetti</h2>
            <a href="{{ route('projects.create') }}" class="btn btn-primary d-inline-flex align-items-center">
                <i class="bi bi-plus-lg me-2"></i> <span>Nuovo Progetto</span>
            </a>

        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0"> {{-- p-0 per far arrivare la tabella ai bordi della card --}}
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="ps-4">Titolo</th>
                            <th>Descrizione</th>
                            <th>Versione</th>
                            <th class="pe-4">Status</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>

                                <td class="ps-4 fw-semibold text-primary">
                                    <a class="text-decoration-none" href="{{ route('projects.show', $project) }}">
                                        {{ ucfirst($project->title) }}
                                    </a>

                                </td>

                                <td class="text-muted">
                                    {{ $project->description }}
                                </td>

                                <td>
                                    <span class="badge bg-secondary text-white fs-6 px-3 py-2">
                                        Version - <b>{{ $project->version }}</b>
                                    </span>
                                </td>

                                <td class="pe-4">
                                    <span
                                        class="badge {{ $project->status == 'finale' ? 'bg-success' : 'bg-warning text-dark' }} fs-6 px-3 py-2">
                                        {{ ucfirst($project->status) }}
                                    </span>
                                </td>
                                <td>
                                    <a class="text-decoration-none text-danger"
                                        href="{{ route('projects.show', $project) }}">
                                        <b>Elimina / Modifica</b>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Torna alla dashboard
            </a>
        </div>
    </div>
@endsection
