<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Laravel Travels</title>
    </head>
    <body>
        <div class="container">
            <h1>{{$title}}</h1>
            <div class="travel-card-container">
                @foreach ($travels as $travel)
                <div class="travel-card">
                    <h2>Partenza: {{$travel->departure}}</h2>
                    <h2>Arrivo: {{$travel->arrival}}</h2>
                    <h4>Data di partenza: {{$travel->departure_date}}</h4>
                    <h4>Data di ritorno: {{$travel->return_date}}</h4>
                    <h5>Alloggio: {{$travel->accommodation_type}} con {{$travel->rooms}} camera/e</h5>
                    <h6>Ospiti:</h6>
                    <ul>
                        <li>Adulti: {{$travel->adults_guests}}</li>
                        <li>Bambini: {{$travel->kids_guests}}</li>
                        <li>Neonati: {{$travel->neonates_guests}}</li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>