<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanages</title>
    <link href="{{ asset('css/orphanages.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">

</head>

<body>
    <p>            </p>
    <h1 id="header">OrphAid</h1>

    <br>

    <div class="image-container">

        @foreach($orphanages as $orphanage)
            <a href="{{ route('orphanage.show', $orphanage->id) }}">    
                <div class="image-with-text">    
                    <img src="{{ $orphanage->image }}" class="uniform-image" alt="{{ $orphanage->name }}">                     
                    <h2 class="image-text">
                        {{ $orphanage->name }}
                    </h2>
                </div>
            </a>
        @endforeach


    </div>

    <main>
    </main>
    <a href="{{ route('profile') }}" class="floating-button">Profile</a>
</body>

</html>