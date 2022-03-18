<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    

    <form method="post" action="{{route('login')}}">
        @csrf
        <h4> Charada: {{ $indice }} </h4>
        

        <label for="senha"> Insira sua resposta: </label> <br>
        <input id="senha" name="senha" type="text">

        <button type="submit"> Entrar </button>
    </form>
    {{$erro}}

</body>
</html>