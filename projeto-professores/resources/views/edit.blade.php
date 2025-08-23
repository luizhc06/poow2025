<!DOCTYPE html>
<html>
<head>
    <title>Editar Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Professor</h1>
        
        <form action="{{ route('professores.update', $professor->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" 
                       value="{{ $professor->nome }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" 
                       value="{{ $professor->email }}" required>
            </div>
            <div class="mb-3">
                <label for="registro" class="form-label">Registro</label>
                <input type="text" class="form-control" id="registro" name="registro" 
                       value="{{ $professor->registro }}" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" 
                       value="{{ $professor->telefone }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('professores.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>