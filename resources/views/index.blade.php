<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container my-3">
        <h1>Treni</h1>

<table class="table">
    <thead>
        <tr>
            <th>Codice Treno</th>
            <th>Azienda</th>
            <th>Stazione partenza</th>
            <th>Data partenza</th>
            <th>Stazione arrivo</th>
            <th>Data arrivo</th>
            <th>In orario</th>
            <th>Numero di Carrozze</th>
            <th>Cancellato</th>
        </tr>
    </thead>
    @foreach ($trains as $train)
        <tr>
            <td>{{ $train->codice_treno }}</td>
            <td>{{ $train->azienda }}</td>   
            <td>{{ $train->stazione_di_partenza }}</td>
            <td>{{ $train->orario_di_partenza }}</td>
            <td>{{ $train->stazione_di_arrivo }}</td>
            <td>{{ $train->orario_di_arrivo }}</td>
            <td>{{ $train->in_orario ? 'Si' : 'No' }}</td>
            <td>{{ $train->totale_carrozze }}</td>
            <td>{{ $train->cancellato ? 'Si' : 'No' }}</td>
        </tr>
        @endforeach
</table>
    </div>
    
    
</body>
</html>