<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <x-layout>
        <div class="container">
            <h1>Home page</h1>

            <div class="container">
                @foreach ($posts as $post)
                    <p>{{ $post->title }}</p>
                @endforeach

            </div>

        </div>
    </x-layout>
</body>

</html>
