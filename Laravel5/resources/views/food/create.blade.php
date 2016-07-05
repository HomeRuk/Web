@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">เพิ่มเมนูอาหาร</div>

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

                    {!! Form::open(['url' => '/food', 'files' => true]) !!}                 
                    

                    <div class="col-xs-8 col-md-8">
                        <div class="form-group">
                            {{ Form::label('name', 'ชื่อเมนูอาหาร') }} 
                            {{ Form::text('name',null,['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="col-xs-4 col-md-4">
                        <div class="form-group">
                            {{ Form::label('price', 'ราคา') }} 
                            {{ Form::text('price',null,['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="col-xs-8 col-md-4">
                        <div class="form-group">
                            {{ Form::label('typefood_id', 'ประเภทอาหาร') }} 
                            {{ Form::select('typefood_id',App\TypeFood::lists('name','id'),null,['class' => 'form-control', 'placeholder' => 'กรุณาเลือกประเภทอาหาร']) }}
                        </div>
                    </div>

                    <div class="col-xs-8 col-md-4">
                        <div class="form-group">
                            {{ Form::label('image', 'รูปภาพอาหาร') }} 
                            {{ Form::file('image',null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-xs-10 ">
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
