@extends('layouts.questions')
@section('title','質問作成画面')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>質問作成画面</h2>
            </div>
            <div class="question-list">
                <th class="question-list-contents">
                    <label for="date">日付</label>
                    <span class="c-icon_require">必須</span>
                    <input type="date">
                </th>
                <th class="question-list-contents">
                    <label for="name">氏名</label>
                    <span class="c-icon_require">必須</span>
                    <input type="name">
                </th>
                <th class="question-list-contents">
                    <label for="question_theme">質問テーマ</label>
                    <span class="c-icon_require">必須</span>
                    <input type="textarea">
                </th>
                <div class="chat-container">質問チャット</div>
                    <div class="chat-title">タイトル
                    </div>
                    <div class="chat-contents scroll">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection