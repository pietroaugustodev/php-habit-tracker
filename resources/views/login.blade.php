<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout class="bg-orange-100">
        <div class="bg-white flex items-center flex-col gap-5">
            <h1 class="text-3xl font-bold">Logue</h1>
            <p class="text-gray-500 font-medium">Insira seus dados para acessar</p>
            <form action="/login" method="post" class="flex flex-col gap-8 min-w-[300px] items-center" >
                <div class="gap-2 flex flex-col w-full">
                    <p>Email</p>
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="youremail@email.com" class="p-4 @error('email') border-red-500 border-2 @enderror w-full h-8 bg-gray-100">
                    @error('email')
                        <p class="text-red-400"> {{$message}}</p>
                    @enderror

                    <p>Password</p>
                    <input type="password" name="password" value="{{ old('password') }}" placeholder="********" class="p-4 w-full h-8 bg-gray-100">
                    @error('password')
                        <p> {{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-orange-500 w-full h-8">Logar</button>
                <div class="flex">
                    <p>Ainda não tem conta?</p><a href={{route("site.register")}} class="underline ml-1">Registre-se</a>
                </div>
            </form>   
            </form>   
        </div> 
    </x-layout>
</body>
</html>