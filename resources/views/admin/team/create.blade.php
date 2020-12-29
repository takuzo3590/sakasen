@extends('layouts.users')
@section('title','チーム登録画面')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>チーム登録</h2>
                <form action="{{ action('Admin\TeamController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="registration">
                        <th class="registration-contents">
                            <label for="team">チーム名</label>
                            <span class="c-icon_require">必須</span>
                            <input type="text" name="team" value=''>
                        </th>
                        <select type="text" class="form-control" name="team">                         
                            @foreach(config('pref') as $key => $score)
                                <option value="{{ $score }}">{{ $score }}</option>
                            @endforeach
                        </select>
                    </div> 
                    <a href="{{ action('Admin\ProfileController@create') }}" role="button" class="btn btn-primary">保存</a>
                </form>
            </div>
        </div>
    </div>
@endsection