<header class="flex justify-between px-10 py-2" >
 <div class="flex items-center gap-2">
    <button
        type="submit"
        class="border-2 border-black bg-orange-500 h-10 w-10 text-white rounded-sm"
    >
    HT
    </button>
    @auth
        <p class="font-medium">Ola, {{Auth::User()->name}}</p>
    @endauth

 </div>
 <div>
    @auth
        <form action="/logout" method="post">
            @csrf
             <button
            class="border-2 border-black bg-orange-500 h-10 w-40 rounded-sm text-white shadow"
            >
            Logout
            </button>
        </form>
    @endauth
    @guest
          <form action={{route('auth.login')}} method="get">
            @csrf
             <button
            class="border-2 border-black bg-orange-500 h-10 w-40 rounded-sm text-white shadow"
            >
            Cadastrar
            </button>
        </form>
    @endguest
    <div>
        <img src="" alt="">
    </div>
 </div>
 
</header>