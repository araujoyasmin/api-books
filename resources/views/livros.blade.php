<html>
<head>
    <title>Lista de Livros</title>
</head>
<body>
    <h1>Lista de Livros</h1>

    @if(isset($livros['items']))
        <h2>Resultados da Pesquisa:</h2>
        @foreach($livros['items'] as $livro)
            <div>
                <h3>{{ $livro['volumeInfo']['title'] }}</h3>
                <p>Autores: {{ implode(', ', $livro['volumeInfo']['authors']) }}</p>
                <p>Descrição: {{ $livro['volumeInfo']['description'] }}</p>
            </div>
        @endforeach
    @else
        <p>Nenhum livro encontrado.</p>
    @endif
</body>
</html>
