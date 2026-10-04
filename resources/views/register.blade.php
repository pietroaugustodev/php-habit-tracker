<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout class="bg-orange-100 flex justify-center">
        <div class="bg-white w-[50%] mx-auto flex flex-col gap-5 p-10">
            <h1 class="text-3xl font-bold text-left">Registre-se</h1>
            <p class="text-gray-500 font-medium">Preencha as informações para se cadastrar seus habitos</p>
            <form action={{route('auth.register')}} method="post" class="flex flex-col gap-8 min-w-[300px] items-center" >
                @csrf
                <div class="gap-2 flex flex-col w-full">
                    <p>Nome</p>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="your name" class="p-4 @error('email') border-red-500 border-2 @enderror w-full h-8 bg-gray-100">
                    @error('name')
                        <p class="text-red-400"> {{$message}}</p>
                    @enderror
                    
                    <p>Email</p>
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="youremail@email.com" class="p-4 @error('email') border-red-500 border-2 @enderror w-full h-8 bg-gray-100">
                    @error('email')
                        <p class="text-red-400"> {{$message}}</p>
                    @enderror

                    <p>Password</p>
                    <input type="password" name="password" placeholder="********" class="p-4 w-full h-8 bg-gray-100">
                    @error('password')
                        <p> {{$message}}</p>
                    @enderror

                    <p>Repita sua senha</p>
                    <input type="password" name="password_confirmation"  placeholder="********" class="p-4 w-full h-8 bg-gray-100">
                    @error('password_confirmation')
                        <p> {{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-orange-500 w-full h-8">Registrar-se</button>
            </form>   
            </form>   
        </div> 
    </x-layout>
</body>
</html>