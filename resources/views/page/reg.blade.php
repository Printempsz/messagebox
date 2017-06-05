@extends('layouts.reg')

@section('create')
    <div>
        <form action="/reg" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td><label>姓名：</label></td>
                    <td><input name="name" placeholder="姓名"></td>
                </tr>
                <tr>
                    <td><label>密码:</label></td>
                    <td><input name="password" placeholder="密码"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="注册"></td>
                </tr>
            </table>
        </form>
    </div>
@endsection


@section('list')

@endsection