@extends('layouts.users')
@section('title','コーチプロフィール登録')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>コーチプロフィール登録</h2>
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
                        <input type="file" name="face_photo" value="">
                        <th class="profile-list-contents">
                            <p>名前</p>
                            <span class="c-icon_require">必須</span>
                            <input type="name" name="name">
                        </th>
                        <th class="profile-list-contents">
                            <p>メールアドレス</p>
                            <span class="c-icon_require">必須</span>
                            <input type="e-mail" name="e-mail">
                        </th>
                        <th class="profile-list-contents">
                            <P>誕生日</p>
                            <span class="c-icon_require">必須</span>
                            <input type="date" name="birthday" value="1990/1/1">
                        </th>
                        <th class="profile-list-contents">
                            <label for="team">所属チーム</label>
                            <span class="c-icon_require">必須</span>
                            <select type="text" class="form-control" name="team">                          
                            @foreach(config('team') as $key => $score)
                                <option value="{{ $score }}">{{ $score }}</option>
                            @endforeach
                            </select>
                            <a href="{{ action('Admin\TeamController@add') }}" role="button" class="btn btn-primary">チーム名がない場合はこちらから登録</a>
                        </th>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="編集">
                    <input type="submit" class="btn btn-primary" value="保存">
                </form>
            </div>
        </div>
    </div>
@endsection