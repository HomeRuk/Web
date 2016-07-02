@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                @foreach ($typefoods as $typefood)
                <div class="panel-heading">ประเภทอาหาร รหัส {{ $typefood->typefood_id }}</div>
                <div class="panel-body">
                    <p>ประเภท: {{ $typefood->typefood_name }} </p>
                    <p>วันที่เพิ่ม: {{ $typefood->created_at }}    </p>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
