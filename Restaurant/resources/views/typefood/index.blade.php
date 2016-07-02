@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>ประเภทอาหาร</h4> รายการ</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>รหัส</th>
                            <th>ประเภท</th> 
                            <th>รายละเอียด</th> 
                        </tr>
                        @if (isset($typefoods))
                        @foreach ($typefoods as $typefood)    
                        <tr>
                            <th> {{ $typefood->typefood_id }}</th>
                            <th> {{ $typefood->typefood_name }}</th> 
                            <td>
                                <a href="{{ url('/typefood/show/'.$typefood->typefood_id)}}">ดูรายละเอียด</a>
                                <a href="{{ url('/typefood/'.$typefood->typefood_id.'/edit')}}">แก้ไข</a>
                                <a href="{{ url('/typefood/delete/'.$typefood->typefood_id)}}">ลบ</a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <?php
                        header("Location: /");
                        exit;
                        ?>
                        @endif 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection