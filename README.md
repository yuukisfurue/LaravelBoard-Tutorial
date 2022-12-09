form template build by Livewire　& crud

https://qiita.com/yuuki-furue/items/e45c634b2ee94c7177a6
上記で少しだけ解説をしております。
CRUD投稿フォームとCSVの機能です。
gmailに送付する際は以下のように.envを書き直すことで使用できます。

PostController.phpの
$search_params = $request->only([
13行目から74行目までの部分

Post.phpの22行目から
public function scopeSearch($query) 
でCSVの機能を実装しております。
