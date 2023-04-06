<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 以下は、Tweet.phpを使うよという宣言
use App\Models\Tweet;

class TweetController extends Controller
{
    // index 一覧表示
    public function index()
    {
        // Tweetモデル = tweetsテーブル
        // all() テーブルからデータ全件取得するlaravel関数
            // all()の同義(SQL)：select from * tweets
            // find(1)の同義(SQL) select from * tweets where id=1
        $tweets = Tweet::all();
        // dd($tweets);
        // view関数は、resourcesフォルダののviewsフォルダの中を参照しにいく
        // index.blade.php → index と表す
        return view('tweets.index',['tweets'=>$tweets]);
    }

    public function create()
    {
        return view('tweets.create');
    }

    // $request は form（post送信）で送信されたデータの中身、laravelが用意した変数
    public function store(Request $request)
    {
        // Tweetモデルに接続せよ = tweetsテーブルに接続せよ
        $tweet = new Tweet();
        // テーブルのnameカラム = フォームのインプットタグのname
        $tweet->name = $request->name;
        $tweet->save();
        return redirect('/tweets');
    }
}

