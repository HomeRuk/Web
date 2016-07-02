@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>เมนูอาหาร</h4></div>
                <div class="panel-body">
                    <a href="{{ url('/food/create') }}" class="btn btn-primary">เพิ่มข้อมูล</a>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
