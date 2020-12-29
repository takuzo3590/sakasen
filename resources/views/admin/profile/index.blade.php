@extends('layouts.notes')
@section('title','選手一覧')
@section('content')
    <div class="container">
        <div class row>
            <h2>選手一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\NoteController@add') }}" role="button" class="btn btn-primary">新規作成</a>
                <input type="submit" class="btn btn-primary" value="編集">
            </div>
            <div class="col-md-8">
            <input type="search" nabe="search" placeholder="選手名検索">
                <form action="{{action('Admin\NoteController@index') }}" method="get"></form>
            </div>
        </div>
        <div class="row">
            <div class="list-note col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width=30%>ID</th>
                                <th width="30%">選手名</th>
                                <th width="10%">詳細</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $note)
                            <tr>
                                <th>{{ $note->id }}</th>
                                <th>{{ $note->name }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection