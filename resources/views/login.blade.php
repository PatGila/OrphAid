<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
</head>

<body>
    <form action="{{ route('login') }}" method="POST" class="toAid">
        @csrf
    <h1 id="titleAid">OrphAid</h1>

    <div id="userfield">
        <p>Email</p>
        <input type="text" class="goround" name="email" id="username" required>
    </div>

    <div id="passfield">
        <p>Password</p>
        <input type="password" class="goround" name="password" id="password" required>
    </div>

    <p>        </p>
    <p>        </p>
    @if ($errors->any())
        <div class="alert" style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
        <button type="submit" class="round-butt">Log in</button>
    </form>
    
    <div class="toUp">
        <d1>Or go to </d1><a href="/signup" class="button-style">Sign-up</a>
    </div>

</body>

</html>