@extends('layouts.app')

@section('content')
    <h2>Lista de Tareas</h2>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('tareas.create') }}" class="btn btn-primary mb-3">Crear Nueva Tarea</a>
            @if($tareas->isEmpty())
                <p>No hay tareas disponibles.</p>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Fecha de Creación</th>
                            <th>Fecha de Actualización</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tareas as $tarea)
                            <tr>
                                <td>{{ $tarea->titulo }}</td>
                                <td>{{ $tarea->descripcion }}</td>
                                <td>{{ $tarea->estado ? 'Completada' : 'Pendiente' }}</td>
                                <td>{{ $tarea->created_at->format('d/m/Y H:i') }}</td> <!-- Formato de fecha -->
                                <td>{{ $tarea->updated_at ? $tarea->updated_at->format('d/m/Y H:i') : 'Nunca' }}</td> <!-- Formato de fecha -->
                                <td>
                                    <a href="{{ route('tareas.edit', $tarea->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                    <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');">
                                            <i class="fas fa-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
