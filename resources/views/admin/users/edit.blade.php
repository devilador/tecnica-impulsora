@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Editar Usuario</h2>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña (dejar en blanco para no cambiar)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Rol</label>
            <select name="role" class="form-control">
                <option value="coordinador" {{ $user->role == 'coordinador' ? 'selected' : '' }}>Coordinador</option>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Administrador</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
