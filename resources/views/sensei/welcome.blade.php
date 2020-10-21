@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>クリエイター向け　画面共有教育サービス</h3>
                <h1>SENSEI</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>SENSEIとは</h2>
                <h3>画面共有を使用し、先生と生徒がリアルタイムで教えあうことができるサービスです</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>SENSEIの仕組み</h2>
                <h3>生徒は先生の中から指名し、先生が指定した通話料を支払い、</h3>
                <h3>決められた時間、好きなだけ教えてもらう事ができます</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <button href="{{route("login")}}">さあ、はじめましょう(新規登録)</button>
            </div>
        </div>
    </div>
@endsection
