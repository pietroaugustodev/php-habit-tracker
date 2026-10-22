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
            <h1 class="text-3xl font-bold text-left">Crie um novo habito</h1>
            <form action={{route('habito.store')}} method="post" class="flex flex-col gap-8 min-w-[300px] items-center" >
                @csrf
                <div class="gap-2 flex flex-col w-full">
                    <p>Habito</p>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Ex: ler 10 paginas" class="p-4 @error('name') border-red-500 border-2 @enderror w-full h-8 bg-gray-100">
                    @error('name')
                        <p class="text-red-400"> {{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-orange-500 w-full h-8">Criar</button>
            </form>   
            </form>   
        </div> 
    </x-layout>
</body>
</html>