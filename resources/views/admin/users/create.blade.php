@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Crear Nuevo Usuario</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="form-group mt-3">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>

        <div class="form-group mt-3">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>

        <div class="form-group mt-3">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Crear Usuario</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>
</div>
@endsection
