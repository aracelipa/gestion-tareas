@extends('layouts.app')

@section('content')
    <h2>Crear Nueva Tarea</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('tareas.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" class="form-control" required></textarea>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="estado" class="form-check-input" value="1">
                    <label class="form-check-label" for="estado">Completada</label>
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('tareas.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
