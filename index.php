<!DOCTYPE html>
<html>
<head>
    <title>Search Engine 2</title>
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="search.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <style>.input-field label{color: #000; }</style>
</head>
<body class="grey darken-1">
    <div class="container">
        <h1 class="center-align">Country Search Engine</h1>

        <div class="search">
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <input type="text" name="recherche" class="text" id="recherche" autocomplete="off">
                    <label for="country">Search a country</label>
                </div>
            </div>
        </div>
        <div class="resultat row" id="resultat"> </div>
    </div>
</body>
</html>