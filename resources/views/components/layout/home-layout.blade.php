<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />

    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <link rel="stylesheet" href="{{ asset('signup.css') }}" />
    <link rel="stylesheet" href="{{ asset('signin.css') }}" />

    <link rel="stylesheet" href="{{ asset('user.css') }}" />

    <link rel="stylesheet" href="{{ asset('appointment.css') }}" />
    <link rel="stylesheet" href="{{ asset('user-details.css') }}" />

    <title>Cannie Vet</title>
</head>
<body>
<x-layout.nav />


    {{ $slot }}


<script src="https://use.fontawesome.com/8fe1b193ce.js"></script>
<script src="{{ asset('toggle.js') }}" defer></script>
</body>
</html>

