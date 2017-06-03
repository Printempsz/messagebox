@extends('component.root')

@section('create')
    <form action="/message" method="post">
        <input type="text" name="title" placeholder="标题">
        <input type="text" name="content" placeholder="内容">
        <input type="hidden" name="from_user_id" value="1">
        <input type="submit">
    </form>
@endsection

@section('main')
@foreach ($messages as $message)
    {{ $message->title }}
    {{ $message->content }}
@endforeach
@endsection