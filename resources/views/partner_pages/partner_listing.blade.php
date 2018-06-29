<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Be-Nomad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1> Partner Listing </h1>
    
    @can('validate_user', Auth::user())
    <!-- The Current User Can Update The Post -->
    @foreach ($destinations as $destination)
       {{ $destination->id }}
    @endforeach 
    @endcan
    
</body>
</html>