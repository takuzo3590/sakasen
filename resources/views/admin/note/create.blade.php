@extends('layouts.notes')
@section('title','　ノート作成画面')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ノート作成画面</h2>
                <form action="{{ action('Admin\NoteController@create') }}" method="post">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                        <div class="note-list">
                            <div class="note-list-right">
                                <th class="note-list-contents">
                                 <label for="date">日付</label>
                                    <input type="date" name="date">
                                </th>
                                    <th class="note-list-contents">
                                    <p>トレーニング内容</p>
                                    <textarea name="contents" cols="10000"></textarea>
                                </th>
                                <p>負荷強度</p>
                                <select name="strength">
                                    <option value = '強'>強</option>
                                    <option value = '中'>中</option>
                                    <option value = '弱'>弱</option>
                                </select>
                                <p>現在のコンディション</p>
                                 <select name="condition">
                                    <option value = '良'>良</option>
                                    <option value = '普通'>普通</option>
                                    <option value = '悪'>悪</option>
                                </select>
                            </div>
                            <div class="note-list-left">
                                <th class="note-list-contents">
                                    <label for="movie">動画</label>
                                    <input type="file" name="movie" value="">
                                </th>
                                <th class="note-list-contents">
                                    <p>課題</p>
                                    <textarea name="task" cols="100"></textarea>
                                </th>
                                <th class="note-list-contents">
                                    <p>次のテーマ</p>
                                    <textarea name="next_theme" cols="100"></textarea>
                                </th>
                            </div>
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="保存">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection