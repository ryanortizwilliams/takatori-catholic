<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News-{{ $post->title }}</title>
</head>

<body>
    <x-layout>
        <div class="container">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
        </div>
    </x-layout>
</body>

</html>
