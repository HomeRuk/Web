@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">เพิ่มประเภทอาหาร</div>

                <div class="panel-body">

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)     
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif  

                    {!! Form::open(['url' => '/typefood']) !!}                                     

                    <div class="col-xs-4">
                        <div class="form-group">
                            {{ Form::label('name', 'ประเภทอาหาร') }} 
                            {{ Form::text('name',null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            {{ Form::submit('บันทึก', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
