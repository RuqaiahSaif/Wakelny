@extends('admin.master_layout')
@section('content')
    <a class='mo-btn m-3'
        href='{{ route('payment.sendMoenyBack', ['who' => 'provider', 'project_id' => $report->project_id]) }}'>ارجاع
        الفلوس
        لمطالب الخدمه</a>
    <a class='mo-btn m-3'
        href='{{ route('payment.sendMoenyBack', ['who' => 'seeker', 'project_id' => $report->project_id]) }}'>ارجاع
        الفلوس لمقدم الخدمه</a>
@endsection
