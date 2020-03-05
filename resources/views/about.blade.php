@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ja">
    <style>
        .content{
            font-size:15px;
            /*margin-top:50px;*/
            
        }
    </style>
<head>
	<meta charset="UTF-8">
	<title>File Upload</title>
</head>
<body>
    <div class="row justify-content-center">
        <div class="content">
    <p>File Uploadとは、医学生のための授業資料ダウンロードサービスです。</p>
    
    <p>ログインすることで、先生がアップロードした資料を閲覧・ダウンロードすることができます。</p>
    <p><a href="{{ url('/welcome')}}">トップページに戻る</a></p>
    <p><a href="{{ url('/register')}}">登録はこちらから</a></p>
    </div>
</div>

@endsection