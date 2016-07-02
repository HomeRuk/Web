@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>ขออภัย เพจนี้ไม่พร้อมใช้งาน</h2></div>
                <div class="panel-body">
                    <h4>ลิงก์ที่คุณเคยติดตามอาจเสียหายหรืออาจได้มีการลบเพจนี้ออกแล้ว</h4>
                    <hr/>
                    <img src="{{ asset('img/error.png') }}" class="img-responsive" >
                    <hr/>                    
                    <ul class="list-group">
                        <li class="list-group-item"><a href="javascript:history.back()">กลับไปที่เพจก่อนหน้า</a></li>
                        <li class="list-group-item"><a href="{{ url('/') }}">ไปที่หน้าแรก</a></li>     
                    </ul>                       
                </div> 
            </div>
        </div>
    </div>
</div>
</div>
@endsection
