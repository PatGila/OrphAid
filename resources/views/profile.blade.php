<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">

    <title>My Profile</title>
</head>
<body>

    <h1 id="header">OrphAid</h1>
    <p>            </p>
    <img id="shabypic" src="{{ asset('assets/profpic/shabypic.png') }}" alt="Profile">
    <a href="{{ route('orphanages') }}" class="floating-button">Orphanages</a>

</body>
</html>