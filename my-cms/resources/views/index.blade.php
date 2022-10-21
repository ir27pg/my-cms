<!DOCTYPE html>
<html>
    <body>
      <h1>記事一覧</h1>
      <div class="container">
        <h1>Paging Sample</h1>
        <ul class="list-group">
          @foreach ($articles as $article)
            <li class="list-group-item">
              {{ $article->id }}
            </li>
          @endforeach
        </ul>
        {{ $articles->links() }}
      </div>
    </body>
</html>
