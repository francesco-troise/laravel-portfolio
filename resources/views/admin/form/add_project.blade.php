@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 text-primary fw-bold">Configura Nuovo Progetto</h5>
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('projects.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label fw-semibold">Titolo Progetto</label>
                                <input type="text" name="title" id="title" class="form-control" maxlength="200"
                                    value="{{ old('title') }}" placeholder="Inserisci un titolo..." required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label fw-semibold">Descrizione del progetto</label>
                                <textarea name="description" id="description" class="form-control" rows="4" maxlength="300"
                                    placeholder="Descrivi il progetto...">{{ old('description') }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="version" class="form-label fw-semibold">Versione</label>
                                    <div class="input-group">
                                        <span class="input-group-text">v</span>
                                        <input type="number" name="version" id="version" class="form-control"
                                            step="0.1" min="0.1" value="{{ old('version', '0.1') }}">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="status" class="form-label fw-semibold">Stato Progetto</label>
                                    <select name="status" id="status" class="form-select" required>
                                        <option value="" selected disabled>Scegli stato...</option>
                                        <option value="finale" {{ old('status') == 'finale' ? 'selected' : '' }}>Finale
                                        </option>
                                        <option value="prototipo" {{ old('status') == 'prototipo' ? 'selected' : '' }}>
                                            Prototipo</option>
                                    </select>
                                </div>
                            </div>

                            <hr class="my-4 text-muted">

                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('projects.index') }}" class="btn btn-light border">Annulla</a>
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="bi bi-save me-2"></i>Aggiungi progetto
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
