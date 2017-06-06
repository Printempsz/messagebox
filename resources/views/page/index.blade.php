@extends('layouts.index')

@section('new')
    {!! Form::open(['route'=>'new']) !!}
        <table>
            <tr>
                <td><label>标题:</label></td>
                <td><input type="text" name="title" placeholder="标题"></td>
            </tr>
            <tr>
                <td><label>内容:</label></td>
                <td><input type="textarea" name="content" placeholder="内容"></td>
            </tr>
            <tr>
                <td><input type="text" name="from_user_id" value="{{ Auth::id() }}"></td>
            </tr>
            <tr>
                <td><input type="submit" value="发送"></td>
            </tr>
        </table>
    {!! Form::close() !!}
@endsection

@section('list')
    <table>
        @foreach($messages as $message)
            <tr>
                <td><p>标题:</p></td>
                <td>{{ $message->title }}</td>
            </tr>
            <tr>
                <td><p>内容:</p></td>
                <td>{{ $message->content }}</td>
            </tr>
        @endforeach
    </table>
    {{ $messages->links() }}
@endsection