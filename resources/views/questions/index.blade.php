<x-app-layout>
    <body>
        <h1>Blog Name</h1>
        <div class='questions'>
            @foreach ($questions as $question)
                <div class='question'>
                    <h2 class='title'><a href="/questions/{{ $question->id }}">{{ $question->title }}</a></h2>
                    <p class='body'>{{ $question->body }}</p>
                </div>
            @endforeach
        </div>
        <h2 class='title'>
    
    <a href='/questions/create'>create</a>

        </h2>
    </body>
</x-app-layout>