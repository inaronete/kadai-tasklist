@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content','メッセージ:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('投稿') !!}
    
    {!! Form::close() !!}

{{ '<p style="color: red;">htmlentities 関数に通した場合</p>' }}
    {!! '<p style="color: red;">htmlentities 関数に通さなかった場合</p>' !!}

@endsection