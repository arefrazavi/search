<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Search</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            font-size: 16px;
        }

        .content {
            text-align: left;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        p {
            color: black;
        }
    </style>
</head>
<div class="content">
    <div class="title m-b-md">
        Search Results
    </div>

    <article class="content">
        <h1> Search By Author <small> ({{ $authorName }})</small> </h1>
        @foreach($resultsByAuthorName as $result)
        <h3> {{ $result->title }} <small> ({{ $result->year }})</small>  </h3>
        <p> {{ $result->description }} </p>
        @endforeach

        <div style="background: black; height: 10px; width: 100%"></div>

        <h1> Search Results </h1>
        @foreach($results as $result)
            <h3>  {{ $result->title  }} <small> ({{ $result->year }})</small>  </h3>
            <p> {{ $result->description }} </p>
            <hr>
        @endforeach
    </article>
</div>
</body>
</html>
