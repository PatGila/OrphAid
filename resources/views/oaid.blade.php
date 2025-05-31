<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
</head>

<body>
    <h1 id="titleAid">OrphAid</h1>

    <div id="userfield">
        <p>Username</p>
        <input type="text" class="goround" name="username" id="username">
    </div>

    <div id="passfield">
        <p>Password</p>
        <input type="text" class="goround" name="password" id="password">
    </div>

    <p>        </p>
    <p>        </p>

    <form action="/orphanages" method="GET" id="toAid">
        <button class="round-butt" id="enter-butt" type="submit" class="button-style">Sign-in</button>
    </form>
    
    <div class="toUp">
        <d1>Or go to </d1><a href="/signup" class="button-style">Sign-up</a>
    </div>

</body>

</html>