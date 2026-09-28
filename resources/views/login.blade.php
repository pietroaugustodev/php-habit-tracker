<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout> 
        @error('email')
            <p> {{$message}}</p>
        @enderror
         @error('password')
            <p> {{$message}}</p>
        @enderror
        <form action="/login" method="post">
            <input type="text" name="email" value="{{ old('email') }}" placeholder="youremail@email.com" class="w-50 h-8 bg-gray-100">
            <input type="password" name="password" value="{{ old('password') }}" placeholder="********" class="w-50 h-8 bg-gray-100">

            <button type="submit">Logar</button>
        </form>    
    </x-layout>
</body>
</html>