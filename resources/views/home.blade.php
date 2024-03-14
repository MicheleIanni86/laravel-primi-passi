<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Laravel</title>
</head>
<body>
          <h1>{{ $saluti }}</h1>
          <h2>{{ $speranza }}</h2>

          <ul>
            @foreach ($puntiChiave as $puntoChiave)
                <li>{{ $puntoChiave }}</li>
            @endforeach
          </ul>
 </body>
</html>