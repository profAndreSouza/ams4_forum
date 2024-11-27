@extends('layouts.header_footer')

@section('content')
<div class="container d-flex justify-content-center align-items-center flex-column" style="min-height: 100vh;">
    <h2 class="text-center">Editar Usuário</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="w-50" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
            @error('name') <span>{{ $message }}</span> @enderror
        </div>
    
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
            @error('email') <span>{{ $message }}</span> @enderror
        </div>
    
        <div class="mb-3">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" id="password" name="password" class="form-control" value="">
            @error('password') <span>{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label">Foto:</label>
            <input type="file" id="image" name="image" class="form-control">
            @error('image') <span>{{ $message }}</span> @enderror
        </div>
    
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
</div>
@endsection
