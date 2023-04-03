<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>留学Q&A</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/questions" method="post">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="question[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="question[body]" placeholder="質問を入力してください"></textarea>
            </div>
            <div class="category">
                <h2>Category</h2>
                <select name="question[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>