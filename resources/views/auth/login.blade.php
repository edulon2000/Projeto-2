<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('logon') }}" method="post">
        @csrf
        <label for="">Email</label><br>
        <input type="email" name="email" required><br>
        <label for="">Senha</label><br>
        <input type="password" name="password"><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
