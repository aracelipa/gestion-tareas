@extends('layouts.app')

@section('content')
    <h2>Editar Tarea</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('tareas.update', $tarea->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" class="form-control" value="{{ $tarea->titulo }}" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" class="form-control" required>{{ $tarea->descripcion }}</textarea>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="estado" class="form-check-input" value="1" {{ $tarea->estado ? 'checked' : '' }}>
                    <label class="form-check-label" for="estado">Completada</label>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('tareas.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
