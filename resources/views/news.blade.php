<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>

<body>
    <x-layout>
        <div class="container">
            <h1>News page</h1>
            @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-header">
                        {{ $post->author->name }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            @endforeach

        </div>
    </x-layout>
</body>

</html>
