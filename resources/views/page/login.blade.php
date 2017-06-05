@extends('layouts.login')

@section('main')
    <form action="/sign_in" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td><label>姓名:</label></td>
                <td><input type="text"  placeholder="姓名" name="name"></td>
            </tr>
            <tr>
                <td><label>密码:</label></td>
                <td><input type="password" placeholder="密码" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="登录"></td>
            </tr>
        </table>
    </form>
@endsection