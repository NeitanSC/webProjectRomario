<!DOCTYPE html>
<html>
<head>
    <title>Teste para view Fornecedor</title>
</head>
<body>
    <h1>@foreach ($fornecedores as $fornecedor)
    <p>{{ $fornecedor }}</p>
    @endforeach</h1>
</body>
</html>