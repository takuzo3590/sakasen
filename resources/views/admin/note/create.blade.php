@extends('layouts.notes')
@section('title','　ノート作成画面')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ノート作成画面</h2>
                <form action="{{ action('Admin\NoteController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    </div>
                        <div class="left-btn">
                            <btn type="button" name="aaa" value="aaa">編集</btn>
                        </div>
                        <div class="right-btn">
                            <btn type="button" name="aaa" value="aaa">保存</btn>
                        </div>
                        <div class="note-list"></div>
                            <div class="note-list-left">
                                <th class="note-list-contents">
                                 <label for="date">日付</label>
                                    <span class="c-icon_require">必須</span>
                                    <input type="date">
                                </th>
                                    <th class="note-list-contents">
                                    <p>トレーニング内容</p>
                                    <span class="c-icon_require">必須</span>
                                    <textarea name="contents" cols="10000"></textarea>
                                </th>
                                <select name="strength">
                                    <option value = '強'>強</option>
                                    <option value = '中'>中</option>
                                    <option value = '弱'>弱</option>
                                </select>
                                 <select name="condition">
                                    <option value = '良'>良</option>
                                    <option value = '普通'>普通</option>
                                    <option value = '悪'>悪</option>
                                </select>
                            </div>
                            <div class="note-list-right">
                                <th class="note-list-contents">
                                    <label for="task">課題</label>
                                    <span class="c-icon_require">必須</span>
                                    <input type="task">
                                </th>
                                <th class="note-list-contents">
                                    <label for="movie">動画</label>
                                    <input type="movie">
                                </th>
                                <th class="note-list-contents">
                                    <p>課題</p>
                                    <span class="c-icon_require">必須</span>
                                    <textarea name="contents" cols="100"></textarea>
                                </th>
                                <th class="note-list-contents">
                                    <p>次のテーマ</p>
                                    <span class="c-icon_require">必須</span>
                                    <textarea name="contents" cols="100"></textarea>
                                </th>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection