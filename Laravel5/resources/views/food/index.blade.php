@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <a href="{{ url('/food/create') }}" class="btn btn-primary">เพิ่มข้อมูล</a>
            <div class="panel panel-default">
                <div class="panel-heading"><h4>รายการอาหาร</h4> จำนวน {{ $count or 'error' }}  รายการ
                </div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr class="active">
                            <th>รหัส</th>
                            <th>รายการอาหาร</th> 
                            <th>ราคา</th>
                            <th>ประเภท</th>
                            <th>รูปภาพ</th> 
                            <th>เครื่องมือ</th> 
                        </tr>
                        @foreach ($foods as $food)    
                        <tr>
                            <th> {{ $food->id }}</th>
                            <th> {{ $food->name }}</th>
                            <th> {{ number_format($food->price,2) }}</th>
                            <th> {{ $food->typefood->name }}</th> 
                            <th> <img src="{{ asset('images_resize/'.$food->image) }}" width="50" height="50"> </th>
                            <td>
                                <a href="{{ url('/food/'.$food->id.'/edit')}}"><button type="button" class="btn btn-primary"><i  class="glyphicon glyphicon-pencil"></i></button></a>

                                {!! Form::open(['url' => '/food/'.$food->id, 'method' => 'delete']) !!} 
                                <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    {!! $foods->render() !!}

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
