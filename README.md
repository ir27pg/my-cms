# CakePHPのチュートリアルのCMSチュートリアルをLaravelで実装する

# 目的
- Laravelを触っていない。(GoとかReactとか。。)

- LaravelとCakePHPの違いを知りたい。

- チュートリアルあると、誰か嬉しいかも。。

# 実施事項

- コンテンツ管理チュートリアル
  - https://book.cakephp.org/3/ja/tutorials-and-examples/cms/installation.html#cakephp
- CakePHPの取得
  - https://book.cakephp.org/4/ja/tutorials-and-examples/cms/installation.html#cakephp
  - Laravelは以下を参照して取得。
    - https://readouble.com/laravel/9.x/ja/installation.html

- データベース作成
  - https://book.cakephp.org/4/ja/tutorials-and-examples/cms/database.html
  - Laravelではデータベースはマイグレーションで作成
    - https://readouble.com/laravel/9.x/ja/migrations.html
    - 作成及び更新の場合は、適宜ファイルを作成する。
    - 命名規則(XXXX_create,XXXX_modify)を意識
    - 中間テーブルの命名規則にも注意
  - この段階でCakeではデータを挿入しているので、LaravelではSeederを利用し挿入する。
    - https://readouble.com/laravel/9.x/ja/seeding.html


- データベースの設定
  - https://book.cakephp.org/4/ja/tutorials-and-examples/cms/database.html#id1
  - Laravelでは、「config/database.php」に記載がある。(.envから取得している。)

- モデルの作成(Article)
  - https://book.cakephp.org/3/ja/tutorials-and-examples/cms/database.html#id2
  - LaravelでもModelを作成する。(Eloquent)
  - https://readouble.com/laravel/8.x/ja/eloquent.html
  - 命名規則(アッパーキャメル)、対応するテーブルを単数形にしたものをファイル名とする。
  - laravelでは、「$table->timestamps();」をマイグレーション時呼び出せばOK
  - アクセス可能なものに関しては、「$fillable」を作成しておく。

- Articlesコントローラーの作成
  - https://book.cakephp.org/3/ja/tutorials-and-examples/cms/articles-controller.html#cms-articles
  - Laravelでもコントローラーを作成する。
  - https://readouble.com/laravel/9.x/ja/controllers.html
  - 命名規則(アッパーキャメル)、ファイル名の最後を「Controller」とする。
  - ルーティングは、Laravelはroute(web.phpなど)を登録してあげControllerやviewを呼ぶ。(たぶん、Cakeも似た感じ)
  - Controllerの中でモデル経由で、データを取得。viewを作成し返答する。
  - ページネーションを実装。クエリにpeginationつけるだけ。
  - compactメソッドで変数をviewへ渡し、整形したviewをレスポンスで返している。

- Viewの作成(ページ一覧)
  - https://book.cakephp.org/3/ja/tutorials-and-examples/cms/articles-controller.html#id1
  - Laravelではviewにbladeテンプレートを利用することが可能。cakeのテンプレートはphpままっぽい。
  - https://readouble.com/laravel/9.x/ja/views.html
  - 渡した変数から->linksとかで、データ取得できる。(paginationでの実装)
  - route()を使い、viewの中でurlを生成している。

- viewアクションの作成
  - https://book.cakephp.org/4/ja/tutorials-and-examples/cms/articles-controller.html#view
  - controllerでリクエストの処理を増やすことでいける。

- viewテンプレートの作成
  - https://book.cakephp.org/4/ja/tutorials-and-examples/cms/articles-controller.html#id2
  - route()を使い、viewの中でurlを生成し編集画面へルーティングしている。

- 記事の追加
  - https://book.cakephp.org/3/ja/tutorials-and-examples/cms/articles-controller.html#id3
  - コントローラーのstoreに追加にする(addでもいいかも)
  - CakePHP個々の処理は少しめんどくさそう。
  - 基本的に、fill-saveでなくcreateメソッドを利用することが多い。
  - repositoryを作成し、共通化することも多いが今回はしない。
  - cakeでは、データ作成前にbeforeSave()なるものを呼び出して、登録前に処理を実施している。laravelだとイベントで処理するのかな。
  - これはめんどくさいから後で実装。

- 記事の編集(Controller)
  -  https://book.cakephp.org/3/ja/tutorials-and-examples/cms/articles-controller.html#edit
  - コントローラーのedit及びupdateに追加にする。createの処理や更新処理もmodelに書くべき
  - 記事がない等の処理は「findOrFail」で判定できる。
  - モデルでupdate処理を実装して、呼び出す。
  - https://readouble.com/laravel/9.x/ja/eloquent.html

- 記事の編集(テンプレート)
  - https://book.cakephp.org/4/ja/tutorials-and-examples/cms/articles-controller.html#id6
  - routeでcontrollerを呼び出す。

- validation
  - https://book.cakephp.org/4/ja/tutorials-and-examples/cms/articles-controller.html#articles
  - Requestでvalidateを実装する。
  - https://readouble.com/laravel/9.x/ja/validation.html

- 記事の削除
  - https://book.cakephp.org/4/ja/tutorials-and-examples/cms/articles-controller.html#delete
  - Cakeはコントローラーが比較的複雑。
  - https://readouble.com/laravel/9.x/ja/eloquent.html

- タグの処理
  -  https://book.cakephp.org/3/ja/tutorials-and-examples/cms/tags-and-users.html#id1
  - bakeでテーブル情報を元にテンプレートを自動生成。laravelにはなさそう。
  - ここから、bakeで省かれているので記載が必要。

- タグの作成(Controller,View)
  - Articleの作成と同様の処理を実装する。

- 記事へのタグの追加
  - https://book.cakephp.org/4/ja/tutorials-and-examples/cms/tags-and-users.html#id1
  - 「 $this->belongsToMany('Tags'); 」でテーブル作成時に定義すればOK?
  - https://readouble.com/laravel/9.x/ja/eloquent-relationships.html
  - LaravelはModelで1対多の取得を書く。中間テーブルカラムの取得をうまく使う。
  - 多対多は、各Modelにリレーションを設定する。

- ログインの追加
  - https://book.cakephp.org/3/ja/tutorials-and-examples/cms/authentication.html#id2
  - cakeの認証はコンポーネントによって処理できる。Laravelは「ガード」と「プロバイダ」で構成されている。
  - Laravel breezeを利用して今回は実装する。
  - https://readouble.com/laravel/9.x/ja/starter-kits.html#laravel-breeze
  - これで、いらん認証機能がたくさん入った。一旦。機能理解はこれでいいかも。
  - 最初にしないと、ルーティングとかふっとばされた。

# 結果

- Laravel少し思い出した。(案件よろしくお願いします。)

- テンプレートの書き方とか、バージョンの速度とか。
  - 規約に従ってください等の文言が多い。厳しそう。
  - あと、bakeすごそう。。

- これは、もう少しきれいにしていく。(技術時間ですすめる。)