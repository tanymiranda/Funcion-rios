@extends('layouts.app')

@section('title', 'Cadastrar Novo Funcionário')

@section('content')
    <div class="form-container">
        
        @if (session('success'))
            <div class="alert success" style="background-color: #4CAF50; color: white; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert error" style="background-color: #f44336; color: white; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                <ul style="list-style-type: none; padding: 0; margin: 0;">
                    @foreach ($errors->all() as $error)
                        <li style="margin: 5px 0;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('funcionarios.store') }}" method="POST" class="form">
            @csrf

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="nome" style="color: #8B4513; font-weight: bold;">Nome</label>
                <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; width: 100%;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="email" style="color: #8B4513; font-weight: bold;">E-mail</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; width: 100%;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="cargo" style="color: #8B4513; font-weight: bold;">Cargo</label>
                <input type="text" id="cargo" name="cargo" value="{{ old('cargo') }}" required style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; width: 100%;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="salario" style="color: #8B4513; font-weight: bold;">Salário</label>
                <input type="number" id="salario" name="salario" step="0.01" value="{{ old('salario') }}" required style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; width: 100%;">
            </div>

            <button type="submit" class="button" style="width: 100%; padding: 12px; background-color: #6c4f37; color: white; font-size: 16px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">
                Cadastrar
            </button>

            <a href="{{ route('funcionarios.index') }}" class="button" style="width: 100%; padding: 12px; background-color: #d9534f; color: white; font-size: 16px; text-align: center; border-radius: 5px; display: block; text-decoration: none; cursor: pointer; transition: background-color 0.3s ease; margin-top: 10px;">
                Cancelar
            </a>
        </form>
    </div>
@endsection