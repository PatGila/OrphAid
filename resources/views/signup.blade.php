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

    <div id="userfield">
        <p>Username</p>
        <input type="text" class="goround" name="newuser" id="newuser">
    </div>

    <div id="passfield">
        <p>Password</p>
        <input type="text" class="goround" name="newpass" id="newpass">
    </div>

    <div id="passfield">
        <p>Confirm password</p>
        <input type="text" class="goround" name="confpass" id="confpass">
    </div>

    <p>        </p>

    <!-- <div id="yesido" class="userfield">
        <input type="checkbox" name="tnc" id="tnc">
        <label for="tnc">Agree with terms and conditions</label>
    </div> -->

    <p>        </p>

    <form action="/oaid" method="GET" id="toAid">
        <button type="submit" class="round-butt">Back to sign-in</button>
    </form>

</body>

</html>