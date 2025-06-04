
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $orphanage->name }}</title>
    <link href="{{ asset('css/details.css') }}" rel="stylesheet">
</head>
<body>
    <h1 id="header">OrphAid</h1>
    <br>
    <img class="imagehead" src="{{ $orphanage->image }}" alt="{{ $orphanage->name }}">
    <h2>{{ $orphanage->name }}</h2> 
    <p id="location"><strong>Location:</strong> <br>{{ $orphanage->location }}</p>
    <p id="desc"><strong>Description:</strong> <br> {{ $orphanage->desc }}</p>
    <a href="{{ route('orphanages') }}" class="floating-button">Back</a>
    <a href="{{ route('donate', ['orph_id' => $orphanage->id]) }}" class="donate-button">Donate</a>

</body>
</html>