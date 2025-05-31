<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanages</title>
    <link href="{{ asset('css/orphanages.css') }}" rel="stylesheet">
</head>

<body>
    <p>            </p>
    <h1 id="header">OrphAid</h1>

    <br>

    <div class="image-container">

         <!-- <div class="image-with-text">
            <img src="{{ asset('assets/AlMuzakki.jpg') }}" class="uniform-image" alt="Sayap Ibu">
            <div class="image-text">Panti Asuhan Al Muzakki</div>
        </div>
    
        <div class="image-with-text">
            <img src="{{ asset('assets/Dayah.jpg') }}" class="uniform-image" alt="Wiker">
            <div class="image-text">Yayasan PI Dayah</div>
        </div>
        
        <div class="image-with-text">
            <img src="{{ asset('assets/GrahaYatim.jpg') }}" class="uniform-image" alt="Sayap Ibu">
            <div class="image-text">Asrama Graha Yatim</div>
        </div>
    
        <div class="image-with-text">
            <img src="{{ asset('assets/IntanKasih.jpg') }}" class="uniform-image" alt="Wiker">
            <div class="image-text">Yayasan Intan Kasih</div>
        </div>
        
        <div class="image-with-text">
            <img src="{{ asset('assets/PantiWiker.jpg') }}" class="uniform-image" alt="Sayap Ibu">
            <div class="image-text">Panti Asuhan Wiker</div>
        </div>
    
        <div class="image-with-text">
            <img src="{{ asset('assets/SahabatYatim.jpg') }}" class="uniform-image" alt="Wiker">
            <div class="image-text">Panti Sahabat Yatim</div>
        </div>

        <div class="image-with-text">
            <img src="{{ asset('assets/SayapIbu.jpg') }}" class="uniform-image" alt="Sayap Ibu">
            <div class="image-text">Yayasan Sayap Ibu</div>
        </div>
    
        <div class="image-with-text">
            <img src="{{ asset('assets/TujuhYatim.jpg') }}" class="uniform-image" alt="Wiker">
            <div class="image-text">Panti Asuhan Tujuh Yatim</div>
        </div> -->

        <a href="/tujuh"><img src="{{ asset('assets/TujuhYatim.png') }}" class="uniform-image" alt="Wiker"></a>
        <a href=""><img src="{{ asset('assets/SayapIbu.png') }}" class="uniform-image" alt="Sayap Ibu"></a>
        <a href=""><img src="{{ asset('assets/SahabatYatim.png') }}" class="uniform-image" alt="Wiker"></a>
        <a href=""><img src="{{ asset('assets/wiker.jpg') }}" class="uniform-image" alt="Sayap Ibu"></a>
        <a href=""><img src="{{ asset('assets/IntanKasih.png') }}" class="uniform-image" alt="Wiker"></a>
        <a href=""><img src="{{ asset('assets/GrahaYatim.png') }}" class="uniform-image" alt="Sayap Ibu"></a>
        <a href=""><img src="{{ asset('assets/Dayah.png') }}" class="uniform-image" alt="Wiker"></a>
        <a href=""><img src="{{ asset('assets/AlMuzakki.png') }}" class="uniform-image" alt="Sayap Ibu"></a>


    </div>

    <main>
    </main>
    <a href="{{ route('profile') }}" class="floating-button">Profile</a>
</body>

</html>