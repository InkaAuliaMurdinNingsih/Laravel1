<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IBUPEDIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="background: rgb(247, 243, 243)">

    <div class="container mt-5 mb-5">
        <img src="{{ asset('storage/aulias/' . $aulias->image) }}" class="w-100 rounded">
        <hr>
        <h4>{{ $aulias->title }}</h4>
        <p class="tmt-3">
            {!! $aulias->content !!}
        </p>
        <a href="/aulias" class="btn btn-dark">Back</a>
    </div>

</body>

</html>
