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

- Seedの作成(これは多分ないけど、ないと確認できないので先に作る。)
-- https://readouble.com/laravel/9.x/ja/seeding.html