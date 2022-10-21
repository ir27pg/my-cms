<h1>記事の追加</h1>
<form action="/post" method="POST">
  名前:<br>
  <input name="title">
  <br>
  コメント:<br>
  <textarea name="body" rows="4" cols="40"></textarea>
  <br>
  {{ csrf_field() }}
  <button class="btn btn-success"> 送信 </button>
</form>