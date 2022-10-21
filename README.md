# my-cms
- HP用のCMSの作成

- CakePHPのチュートリアルのCMS作成をLaravelで実装する

- データベース作成
- https://book.cakephp.org/4/ja/tutorials-and-examples/cms/database.html

- データベース設計
- https://cacoo.com/diagrams/nNx02ysV3Zq8DgUR/0724F

- Laravelでは、データベースはマイグレーションで作成する
- - 作成の場合及び更新の場合は、適宜ファイルを作成する。
- - 命名規則(XXXX_create,XXXX_modify)を意識する。

- モデルの作成
- - https://book.cakephp.org/3/ja/tutorials-and-examples/cms/database.html#id2

- Laravelでは、Eloquentで作成する。
- https://readouble.com/laravel/8.x/ja/eloquent.html
- - 命名規則(アッパーキャメル)、対応するテーブルを単数形にしたものをファイル名とする。


- Articlesコントローラーの作成
- - https://book.cakephp.org/3/ja/tutorials-and-examples/cms/articles-controller.html#cms-articles

- Laravelでは、コントローラーを作成する。
- https://readouble.com/laravel/9.x/ja/controllers.html
-- 命名規則(アッパーキャメル)、ファイル名の最後を「Controller」とする。
-- CakePHPは、任意でルーティングされそう？？、LaravelはRouteを登録してあげる必要あり。
-- Controllerの中でモデル経由で、データを取得。viewを作成し返答する。
-- Modelで利用できる、クエリを叩きデータを取る
-- ページネーションを実装。くっそ簡単。クエリにpeginationつけるだけ。
-- 


- Seedの作成(これは多分ないけど、ないと確認できないので先に作る。)
-- https://readouble.com/laravel/9.x/ja/seeding.html

- テンプレートの作成
-- https://book.cakephp.org/3/ja/tutorials-and-examples/cms/articles-controller.html#id1
- Laravelでviewにbladeテンプレートを利用することで、きれいに出しやすい。
- https://readouble.com/laravel/9.x/ja/views.html
-- view作成とcompactメソッドへの配列を渡している。
-- 渡した変数から->linksとかで、データ取得できる。
-- route()を使い、viewの中でurlを作成する。

- 記事の追加
-- https://book.cakephp.org/3/ja/tutorials-and-examples/cms/articles-controller.html#id3
-- コントローラーのstoreに追加にする(addでもいいかも)
-- CakePHP個々の処理は少しめんどくさそう。
-- laravelはコントローラーで受けたリクエストをmodelに挿入しsaveするのみ。
-- 基本的に、fill-saveでなくcreateメソッドを利用することが多い。
-- repositoryを作成し、共通化することも多いが今回はしない。
-- cakeでは、データ作成前にbeforeSave()なるものを呼び出して、登録前に処理を実施している。laravelだとイベントで処理するのかな。
--- これはめんどくさいから後で実装。

- 記事の編集
--  https://book.cakephp.org/3/ja/tutorials-and-examples/cms/articles-controller.html#edit
-- コントローラーのeditに追加にする。creatの処理や更新処理もmodelに書くべき
-- 一旦、この処理飛ばす。後で時間あればやる。

- タグの処理
--  https://book.cakephp.org/3/ja/tutorials-and-examples/cms/tags-and-users.html#id1
-- bakeでテーブル情報を元にテンプレートを自動生成。laravelにはなさそう。
-- ここから、bakeで省かれているので記載が必要。
