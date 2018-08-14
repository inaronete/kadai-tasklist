@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    <h1>id: {{ $task->id }}のタスク編集ページ</h1>
    {!! Form::model($task,['route' => ['tasks.update',$task->id],'method' => 'put', 'class' => 'form-horizontal']) !!}
      
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