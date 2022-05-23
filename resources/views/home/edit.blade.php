<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>編集</title>
</head>
<body>
<div class="container">
<form method="POST" action="{{ route('home.edit') }}">@csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-borderless">
                <thead class="thead-light">
                    <tr>
                        <th>氏名</th>
                        <td><input type="text" name="name" value='{{$user->name}}'></td>
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
  
</body>
</html>
