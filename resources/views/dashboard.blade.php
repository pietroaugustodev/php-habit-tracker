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
        <h1 class="font-bold text-6x1 text-center"> 
            Dashboard
        </h1>  
        
        <a href={{route('habito.criar')}} class="bg-white border-2 p-1 block">Criar novo habito</a>
        @session('success')
        <div class="bg-green-100 border-2 p-2">
             {{session('success')}}
         </div>
            {{session('success')}}
        @endsession
        <h1>Listagem de hábitos</h1>
        <section class="ml-5">
            @forelse ($habits as $item)
                <div class="flex gap-2" >
                    <div class="font-bold flex gap-1">
                    <p>
                       - {{$item->name}}
                    </p>
                    <p> ({{$item->habitLogs->count()}}) </p>
                    </div>
                    <form action={{route('habito.destroy', ['habit' => $item->id])}} method="post" class="inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="hover:opacity-50 cursor-pointer">
                           <x-icons.trash />     
                        </button>
                    </form>
                    <a href={{route('habito.editar', ['habit' => $item->id])}}>
                        <x-icons.edit />
                    </a>
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
