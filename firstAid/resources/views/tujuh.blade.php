<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panti Asuhan Tujuh Yatim</title>
    <link href="{{ asset('css/details.css') }}" rel="stylesheet">
</head>

<body>

    <p>            </p>
    <h1 id="header">OrphAid</h1>
    <br>

    <img class="imagehead" src="{{ asset('assets/detail/almuzhead.png') }}" alt="Panti Asuhan Tujuh Yatim">

    <h2>Panti Asuhan Tujuh Yatim</h2>
    <p id = "desc">
        Panti Asuhan Tujuh Yatim adalah lembaga sosial yang berdedikasi untuk membantu anak-anak yang tidak memiliki keluarga.
        Mereka memiliki beberapa program yang bertujuan untuk membantu anak-anak ini, termasuk program pengasuh, program pendidikan, dan program kesehatan.
    </p>
    <a href="{{ route('orphanages') }}" class="floating-button">Back</a>
    <a href="{{ route('donate') }}" class="donate-button">Donate</a>



</body>

</html>