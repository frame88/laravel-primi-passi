<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel primi passi</title>
</head>
<body>
{{-- 
Cancelliamo la view welcome.blade.php e creiamo una nostra homepage.
Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade. 
--}}

    <h1>Main page</h1>

    <h2>ciao {{ $name }} {{ $lastname}}</h2>
    <span>le skills di pinocchio sono:</span>
    {{-- ma se non ci fosse piu improvvisamente sckills --}}
    @if(isset($skills))
    {{-- aggiungo questo isset che controlla che skills esista --}}
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
    @endif

{{-- 
Bonus:
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()
--}}
    <header>
        <ul>
            <li><a href="{{ route('contact') }}">Contatti</a></li>
            <li><a href="{{ route('copyright') }}">Diritti</a></li>
            <li><a href="{{ route('story') }}">Chi siamo</a></li>
        </ul>
    </header>

</body>
</html>