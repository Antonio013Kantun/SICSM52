@extends('plantilla2')
{{-- AQUI ES PURO HTML --}}
@section('titulo', 'Lista de Estudiantes')

@section('contenido')
    <div class="container my-4">
        <h1 class="text-center">LISTA DE ESTUDIANTES</h1>

        <div class="d-flex justify-content-center my-4">
            <a href="formulario" class="btn btn-primary">Agregar Nuevo Estudiante</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Ver detalles</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->id_student}}</td>
                    <td>{{$student->name_student}}</td>
                    <td>{{$student->lastname_student}}</td>
                    <!-- Utiliza íconos de Font Awesome -->
                    <td><a href="{{ route('estudiantes.show', $student->id) }}" class="btn btn-info"><i class='bx bxs-user'></i></a></td>
                    <td><a href="{{ route('estudiantes.edit', $student->id) }}" class="btn btn-warning"><i class='bx bxs-edit'></i></a></td>
                    <td>
                        <form action="{{ route('estudiantes.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este estudiante?')">
                                <i class='bx bxs-trash'></i>
                            </button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Agrega la paginación -->
        <div class="d-flex justify-content-center my-4">
            <ul class="pagination">
                <li class="page-item {{ $students->previousPageUrl() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $students->previousPageUrl() }}">Anterior</a>
                </li>
                @for ($i = 1; $i <= $students->lastPage(); $i++)
                    <li class="page-item {{ $i == $students->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $students->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $students->nextPageUrl() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $students->nextPageUrl() }}">Siguiente</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
