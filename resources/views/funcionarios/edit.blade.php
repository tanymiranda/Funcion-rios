@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px; margin: 30px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; color: #3a3a3a;">Editar Funcionário</h1>
    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3" style="margin-bottom: 15px;">
            <label for="nome" class="form-label" style="color: #8B4513; font-weight: bold;">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $funcionario->nome }}" required style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; width: 100%;">
        </div>

        <div class="mb-3" style="margin-bottom: 15px;">
            <label for="email" class="form-label" style="color: #8B4513; font-weight: bold;">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $funcionario->email }}" required style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; width: 100%;">
        </div>

        <div class="mb-3" style="margin-bottom: 15px;">
            <label for="cargo" class="form-label" style="color: #8B4513; font-weight: bold;">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value="{{ $funcionario->cargo }}" required style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; width: 100%;">
        </div>

        <div class="mb-3" style="margin-bottom: 15px;">
            <label for="salario" class="form-label" style="color: #8B4513; font-weight: bold;">Salário</label>
            <input type="number" step="0.01" class="form-control" id="salario" name="salario" value="{{ $funcionario->salario }}" required style="border: 1px solid #ccc; border-radius: 4px; padding: 10px; width: 100%;">
        </div>

        <button type="submit" class="btn" style="width: 100%; padding: 12px; background-color: #6c4f37; color: white; font-size: 16px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">
            Atualizar
        </button>
        <a href="{{ route('funcionarios.index') }}" class="button" style="width: 100%; padding: 12px; background-color: #d9534f; color: white; font-size: 16px; text-align: center; border-radius: 5px; display: block; text-decoration: none; cursor: pointer; transition: background-color 0.3s ease; margin-top: 10px;">
                Cancelar
            </a>
    </form>
</div>
@endsection