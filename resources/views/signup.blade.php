<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
</head>

<body>

    

    <h1 id="titleAid">Sign-up</h1>
    <form action="{{ route('register') }}" method="POST" class="toAid">
        @csrf
        <div id="userfield">
            <p>Full Name</p>
            <input type="text" class="goround" name="fname" id="newuser" required>
        </div>

        <div id="userfield">
            <p>Email</p>
            <input type="text" class="goround" name="email" id="newuser" required>
        </div>

        <div id="passfield">
            <p>Password</p>
            <input type="password" class="goround" name="password" id="newpass" required>
        </div>

        <div id="passfield">
            <p>Confirm password</p>
            <input type="password" class="goround" name="password_confirmation" id="confpass" required>
        </div>

        <p>        </p>

        <!-- <div id="yesido" class="userfield">
            <input type="checkbox" name="tnc" id="tnc">
            <label for="tnc">Agree with terms and conditions</label>
        </div> -->

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

    
        <button type="submit" class="round-butt">Submit</button>
    </form>

</body>

</html>