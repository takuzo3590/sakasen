@extends('layouts.users')
@section('title','プロフィール作成画面')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール作成画面</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="profile-list">
                        <p>顔写真</p>
                        <img src="">
                        <th class="profile-list-contents">
                            <label for="name">氏名</label>
                            <span class="c-icon_require">必須</span>
                            <input type="name">
                        </th>
                        //編集できない様に表示だけしてある状態
                        <th class="profile-list-contents">
                            <label for="e-mail">メールアドレス</label>
                            <span class="c-icon_require">必須</span>
                            <input type="e-mail">
                        </th>
                        <th class="profile-list-contents">
                            <label for="birthday">誕生日</label>
                            <span class="c-icon_require">必須</span>
                            <input type="date" value="1990/1/1">
                        </th>
                    </div> 
                    <btn type="button" name="aaa" value="aaa">編集</btn>
                    <btn type="button" name="aaa" value="aaa">保存</btn>
                </form>
            </div>
        </div>
    </div>
@endsection