@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-borderless">
                <thead class="thead-light">
                    <tr>
                        <th>氏名</th>
                        <td>{{ Auth::user()->name }}{{ Auth::user()->last_name }} </td>
                    </tr>
                    <tr>
                        <th>フリガナ</th>
                        <td>{{ Auth::user()->name_kana }}{{ Auth::user()->last_name_kana }}</td>
                    </tr>
                    <tr>
                        <th>郵便番号</th>
                        <td>{{ Auth::user()->postal_code }}</td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>{{ Auth::user()->address }}</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>{{ Auth::user()->telephone_number }}</td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td> {{ Auth::user()->gender }}</td>
                    </tr>
                </thead>

            </table>

        </div>
    </div>
</div>
@endsection
