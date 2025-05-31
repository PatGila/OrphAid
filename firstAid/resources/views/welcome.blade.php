<!DOCTYPE html>
<html>
<head>
    <title>Portal to OrphAid</title>
    <link href="{{ asset('css/style0.css') }}" rel="stylesheet">
</head>

<body>
    <div id="welcome">

        <h1 id="softhead">Software Engineering Project</h1>
        <h4 id="title">OrphAid</h4>
        <p id="parag">OrphAid is a proposed solution to aid orphans in need 
            by facilitating online donations through our platform, 
            which will direct funds to their respective orphanages.</p>

        <p>        </p>
        <form action="/oaid" method="GET">
            <button type="submit" class="button-style">Go to OrphAid</button>
        </form>
  
    </div>

    
    <script src="{{ asset('js/script0.js') }}"></script>

</body>

</html>