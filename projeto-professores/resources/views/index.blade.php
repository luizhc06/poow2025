<!DOCTYPE html>
<html>
<head>
    <title>Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Lista de Professores</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('professores.create') }}" class="btn btn-primary mb-3">
            Novo Professor
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Registro</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($professores as $professor)
                <tr>
                    <td>{{ $professor->nome }}</td>
                    <td>{{ $professor->email }}</td>
                    <td>{{ $professor->registro }}</td>
                    <td>{{ $professor->telefone }}</td>
                    <td>
                        <a href="{{ route('professores.edit', $professor->id) }}" 
                           class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('professores.destroy', $professor->id) }}" 
                              method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Tem certeza?')">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>