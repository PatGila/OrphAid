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
    <div class="profile-container">
        <img id="shabypic" src="{{ asset('assets/profpic/profile-user.png') }}" alt="Profile">
        <div class="profile-info">
            <h2>{{ $user->fname ?? 'User Name' }}</h2>
            <p>Email: {{ $user->email ?? 'user@example.com' }}</p>
        </div>
    </div>


    <div class="history">
        <h2>History</h2>
        @forelse($donations as $donation)
            <div class="history-items">
                <img src="{{ asset($donation->image ?? 'assets/GrahaYatim.png') }}" alt="">
                <div class="name-date">
                    <h2>{{ $donation->name }}</h2>
                    <p>{{ \Carbon\Carbon::parse($donation->date)->format('Y-m-d') }}</p>
                    <p>{{ $donation->location }}</p>
                </div>
            </div>
        @empty
            <p style="padding:10px;">Belum ada riwayat donasi.</p>
        @endforelse
    </div>

    <a href="{{ route('logout') }}" class ="logout">Log Out</a>
    <a href="{{ route('orphanages') }}" class="floating-button">Orphanages</a>

</body>
</html>