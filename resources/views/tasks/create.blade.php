@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    
       
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
    <form class="form-horizontal">
      <div class="form-group">
          <div class="row">
               <div class="col-xs-12 col-xs-ofset-2 col-sm-5 col-md-5 col-xs-ofset-6 col-lg-6">
        {!! Form::label('status','ステータス:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}    
               </div>    
          </div>
      </div>
      <div class="form-group">
          <div class="row">
               <div class="col-xs-12 col-xs-ofset-2 col-sm-5 col-md-5 col-xs-ofset-6 col-lg-6">
        {!! Form::label('content','タスク:') !!}
        {!! Form::text('content', null, ['class' =>'form-control']) !!}
               </div>    
          </div>
      </div>
        
        {!! Form::submit('投稿',['class' => 'btn btn-primary']) !!}
    
    {!! Form::close() !!}

@endsection