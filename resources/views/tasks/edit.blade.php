@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }}のタスク編集ページ</h1>

    
    <form class="form-horizontal">
          <div class="row">
               <div class="col-xs-12 col-offset-sm-2 col-sm-8  col-offset-md-2 col-md-8　col-offset-lg-3 col-lg-6">
    
    {!! Form::model($task,['route' => ['tasks.update',$task->id],'method' => 'put']) !!}
      
          <div class="form-group">
                  {!! Form::label('status','タイトル:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('content','タスク:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
      </div>    
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}
        </div>
    </div>
    

@endsection