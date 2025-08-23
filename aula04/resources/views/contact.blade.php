<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contatos</title>
</head>
<body>
    <h1>Listagem de contatos</h1>
    @foreach($contacts as $contact)
    <div>
        <p>{{$contact->nome}}</p>
        <p>{{$contact->email}}</p>
        <p>{{$contact->telefone}}</p>
        <p>{{$contact->data_nascimento}}</p>
    </div>
    @endforeach

    <h2>Salvar Contato</h2>
    <form action="{{route('contato.salvar') }}" method="POST">
        @csrf
        <button type="submit">Salvar contato</button>
    </form>
</body>
</html>