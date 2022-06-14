<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Films <i class="fa-solid fa-film"> </i></h1>
    {{-- @dump($movies) --}}
    <div class="container">
        <div class="row">
            @foreach ($movies as $item)
            <div class="card col-3 g-3 mx-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$item->original_title}}</h6>
                    <p class="card-text">{{$item->nationality}}</p>
                    <a href="#" class="card-link">{{$item->title}}</a>          
                </div>
            </div>
            @endforeach

        </div>
    </div>
    
   
    
</body>
</html>