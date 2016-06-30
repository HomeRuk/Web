@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ประเภทอาหาร รหัส {{ $typefood->id }}  </div>
                <div class="panel-body">
                    <p>
                        ประเภท: {{ $typefood->name }} <br>
                        วันที่เพิ่ม: {{ $typefood->created_at }}      
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
