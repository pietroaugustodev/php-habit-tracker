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
        <h1> 
            Dashboard
        </h1>  
        
        <h1>Listagem de hábitos</h1>
        <section class="ml-5">
            @forelse ($habits as $item)
                <div class="font-bold flex gap-1">
                    <p>
                       - {{$item->name}}
                    </p>
                    <p> ({{$item->habitLogs->count()}}) </p>
                </div>

            @empty
                <p>Sem habitos cadastrados.</p>
                <a href="/habito/create">Crie um agora</a>
            @endforelse
            <div>

            </div>
        </section>
    </x-layout>
</body>
</html>
