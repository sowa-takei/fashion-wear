@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('編集画面') }}
                    <div class="card-body">
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
                    <tr>
                        <th>ID</th>
                        <td> {{ Auth::user()->id }}</td>
                    </tr>
                </thead>

            </table>
            <a href="{{ route('user.edit',['id=>$user->id']) }}" class="btn btn-info">編集</a>
        

        </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
