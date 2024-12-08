@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 1000px; margin: 30px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; color: #3a3a3a;">Lista de Funcionários</h1>
        <a href="{{ route('funcionarios.create') }}" class="btn" style="background-color: #6c4f37; color: white; padding: 12px 20px; font-size: 16px; border-radius: 5px; display: inline-block; margin-bottom: 20px;">
            Adicionar Funcionário
        </a>

        <table class="table mt-4" style="width: 100%; border-collapse: collapse; margin-top: 20px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <thead style="background-color: #6c4f37; color: white;">
                <tr>
                    <th style="padding: 10px; text-align: center;">#</th>
                    <th style="padding: 10px; text-align: left;">Nome</th>
                    <th style="padding: 10px; text-align: left;">Email</th>
                    <th style="padding: 10px; text-align: left;">Cargo</th>
                    <th style="padding: 10px; text-align: right;">Salário</th>
                    <th style="padding: 10px; text-align: center;">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionarios as $funcionario)
                    <tr style="background-color: #f9f9f9; border-bottom: 1px solid #ccc;">
                        <td style="padding: 10px; text-align: center;">{{ $funcionario->id }}</td>
                        <td style="padding: 10px;">{{ $funcionario->nome }}</td>
                        <td style="padding: 10px;">{{ $funcionario->email }}</td>
                        <td style="padding: 10px;">{{ $funcionario->cargo }}</td>
                        <td style="padding: 10px; text-align: right;">{{ number_format($funcionario->salario, 2, ',', '.') }}</td>
                        <td style="padding: 10px; text-align: center;">
                            <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn" style="background-color: #000000; color: white; padding: 8px 12px; font-size: 14px; border-radius: 5px; margin-right: 5px; text-decoration: none;">
                                Editar
                            </a>
                            <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="background-color: #000000; color: white; padding: 8px 12px; font-size: 14px; border-radius: 5px; border: none; cursor: pointer;">
                                    Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection