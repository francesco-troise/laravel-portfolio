@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm  border-dark">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 text-primary fw-bold">Modifica attuale progetto</h5>
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('projects.update', $project) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label fw-semibold">Titolo Progetto</label>
                                <input type="text" name="title" id="title" class="form-control" maxlength="200"
                                    value="{{ $project->title }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label fw-semibold">Descrizione del progetto</label>
                                <textarea name="description" id="description" class="form-control" rows="4" maxlength="300">{{ $project->description }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="version" class="form-label fw-semibold">Versione</label>
                                    <div class="input-group">
                                        <span class="input-group-text">v</span>
                                        <input type="number" name="version" id="version" class="form-control"
                                            step="0.1" min="0.1" value="{{ $project->version }}">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="status" class="form-label fw-semibold">Stato Progetto</label>
                                    <select name="status" id="status" class="form-select" required>
                                        <option value="" selected disabled>{{ $project->status }}</option>
                                        <option value="finale" {{ old('status') == 'finale' ? 'selected' : '' }}>Finale
                                        </option>
                                        <option value="prototipo" {{ old('status') == 'prototipo' ? 'selected' : '' }}>
                                            Prototipo</option>
                                    </select>
                                </div>
                            </div>

                            <hr class="my-4 text-muted">

                            <div class="d-flex justify-content-end gap-2">
                                <button class="btn btn-warning" type="submit">Aggiorna il progetto</button>
                                <a href="{{ route('projects.index') }}" class="btn btn-success border">Torna ai progetti</a>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
