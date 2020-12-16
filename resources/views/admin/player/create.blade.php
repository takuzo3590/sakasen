@extends('layouts.players')
@section('title','プロフィール作成画面')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール作成画面</h2>
                <form action="{{ action('Admin\PlayerController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="player-list-left">
                         <th class="player-list-contents">
                            <label for="name">顔写真</label>
                            <input type="image">
                        </th>
                        <th class="player-list-contents">
                            <label for="name">氏名</label>
                            <span class="c-icon_require">必須</span>
                            <input type="name">
                        </th>
                        <th class="player-list-contents">
                            <label for="e-mail">メールアドレス</label>
                            <span class="c-icon_require">必須</span>
                            <input type="e-mail">
                        </th>
                        <th class="player-list-contents">
                            <label for="bierthday">誕生日</label>
                            <span class="c-icon_require">必須</span>
                            <input type="date">
                        </th>
                         <th class="player-list-contents">
                            <label for="team">所属チーム</label>
                            <span class="c-icon_require">必須</span>
                            <input type="team">
                        </th>
                         <th class="player-list-contents">
                            <label for="coach">担当コーチ</label>
                            <input type="coach">
                        </th>
                         <th class="player-list-contents">
                            <label for="position">ポジション</label>
                            <span class="c-icon_require">必須</span>
                            <input type="position">
                        </th>
                    </div>
                    <div class="player-list-right">
                         <th class="player-list-contents">
                            <label for="dominant_foot">利き足</label>
                            <span class="c-icon_require">必須</span>
                            <input type="dominant_foot">
                        </th>
                         <th class="player-list-contents">
                            <label for="good_play">得意プレー</label>
                            <span class="c-icon_require">必須</span>
                            <input type="good_play">
                        </th>
                        <th class="player-list-contents">
                            <label for="lomg_term_goal">長期目標</label>
                            <span class="c-icon_require">必須</span>
                            <input type="long_term_goal">
                        </th>
                        <th class="player-list-contents">
                            <label for="short_term_goal">短期目標</label>
                            <span class="c-icon_require">必須</span>
                            <input type="short_term_goal">
                        </th>
                        <btn type="button" name="aaa" value="aaa">編集</btn>
                        <btn type="button" name="aaa" value="aaa">保存</btn>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection