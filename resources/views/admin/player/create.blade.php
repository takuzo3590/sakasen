@extends('layouts.players')
@section('title','選手プロフィール')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>選手プロフィール</h2>
                <form action="{{ action('Admin\PlayerController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="player-list-left">
                        <p>顔写真</p>
                        <input type="file" name="face_photo" value=''>
                        <th class="player-list-contents">
                            <label for="name">氏名</label>
                            <input type="name">
                        </th>
                        <th class="player-list-contents">
                            <label for="e-mail">メールアドレス</label>
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
                            <select type="text" class="form-control" name="team">                          
                            @foreach(config('team') as $key => $score)
                                <option value="{{ $score }}">{{ $score }}</option>
                            @endforeach
                            </select>
                            <a href="{{ action('Admin\TeamController@add') }}" role="button" class="btn btn-primary">チーム名がない場合はこちらから登録</a>
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
                            <select>
                                <option>右</option>
                                <option>左</option>
                            </select>
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
                    </div>
                    <input type="submit" class="btn btn-primary" value="編集">
                    <input type="submit" class="btn btn-primary" value="保存">
                </form>
            </div>
        </div>
    </div>
@endsection