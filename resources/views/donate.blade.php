<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/details.css') }}" rel="stylesheet">
    <link href="{{ asset('css/donate.css') }}" rel="stylesheet">


</head>
<body>

    <h1 id="header">OrphAid</h1>

    <br>
    <br>

    
    <div class="instruksi">
        <h2>Instruksi</h2>
        <d2>• Login ke akun m-Banking Anda</d2> <br>
        <d2>• Pilih menu transfer</d2> <br>
        <d2>• Pilih BCA digital</d2> <br>
        <d2>• Masukkan  rek 006638307008</d2> <br>
        <d2>• Masukkan nominal</d2> <br>
        <d2>• Selesaikan transaksi</d2>
    </div>
    <div class="qris">
        <h2>Atau scan QR di bawah ini: </h2>
        <img src="{{ asset('assets/qris.jpeg') }}" alt="QRIS" class="qris-image">
        <form action="{{ route('donate.store', ['orph_id' => $orphanage->id]) }}" method="POST">
            @csrf
            <button type="submit" class="done">Saya sudah donate</button>
        </form>
    </div>



    <a href="{{ route('orphanages') }}" class="floating-button">Back</a>

</body>
</html>