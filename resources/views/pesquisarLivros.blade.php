<html>
<head>
    <title>Pesquisar Livros</title>
</head>
<body>
    <h1>Pesquisar Livros</h1>
    <form method="GET" action="{{ route('buscarLivros') }}">
        <input type="text" name="pesquisa" placeholder="Digite o título ou autor do livro">
        <button type="submit">Pesquisar</button>
    </form>

    @if(isset($livros['items']))
        <h2>Resultados da Pesquisa:</h2>
        @foreach($livros['items'] as $livro)
            <div>
                <h3>{{ $livro['volumeInfo']['title'] }}</h3>
                <p>Autores: {{ implode(', ', $livro['volumeInfo']['authors']) }}</p>
                <p>Editora: {{ $livro['volumeInfo']['publisher'] ?? 'Editora nao disponivel' }}</p>
            </div>
        @endforeach
    @endif
</body>
</html>
