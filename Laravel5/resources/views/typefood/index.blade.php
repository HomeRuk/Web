@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <a href="{{ url('/typefood/create') }}" class="btn btn-primary">เพิ่มข้อมูล</a>
            <div class="panel panel-default">
                <div class="panel-heading"><h4>ประเภทอาหาร</h4> จำนวน {{ $count }}  รายการ
                <li><a href="{{ url('/typefood') }}">เรียงจากมากน้อย</a>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>รหัส</th>
                            <th>ประเภท</th> 
                            <th>รายละเอียด</th> 
                        </tr>
                    @foreach ($typefoods as $typefood)    
                        <tr>
                            <th> {{ $typefood->id }}</th>
                            <th> {{ $typefood->name }}</th> 
                            <td>
                                <a href="{{ url('/typefood/show/'.$typefood->id)}}">ดูรายละเอียด</a>
                                <a href="{{ url('/typefood/'.$typefood->id.'/edit')}}">แก้ไข</a>
                                <a href="{{ url('/typefood/delete/'.$typefood->id)}}">ลบ</a>
                            </td>
                        </tr>
                    @endforeach
                    </table>
                    
                    {!! $typefoods->render() !!}
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
