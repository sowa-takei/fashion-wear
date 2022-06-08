@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('新規作成画面') }}</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('名前') }}</label>
                            <!-- 名前入力 -->
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"placeholder="山田" required autocomplete="name" autofocus>
                                
                            </div>
                            <div class="col-md-4">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"placeholder="太郎" required autocomplete="last_name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('フリガナ') }}</label>
                            <!-- フリガナ入力 -->
                            <div class="col-md-4">
                                <input id="name_kana" type="text" class="form-control @error('name_kana') is-invalid @enderror" name="name_kana" value="{{ old('name_kana') }}"placeholder="ヤマダ" required autocomplete="name_kana" autofocus>
                            </div>
                            <div class="col-md-4">
                                <input id="last_name_kana" type="text" class="form-control @error('last_name_kana') is-invalid @enderror" name="last_name_kana" value="{{ old('last_name_kana') }}"placeholder="タロウ" required autocomplete="last_name_kana" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="postal_code" class="col-md-4 col-form-label text-md-end">{{__('郵便番号')}}</label>
                            <div class="col-md-4">
                                <input id="postal_code" type="text" class="form-control @error('postl_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code')}}" placeholder="123-4567" required autocomplete="postal_code" autofocus>
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{__('住所')}}</label>
                            <div class="col-md-4">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address')}}" placeholder="東京都港区芝公園４丁目２−８" required autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telephone_number" class="col-md-4 col-form-label text-md-end">{{__('電話番号')}}</label>
                            <div class="col-md-4">
                                <input id="telephone_number" type="text" class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ old('telephone_number')}}" placeholder="090-080-070" required autocomplete="telephone_number" autofocus>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{__('性別')}}</label>    
                            <div class="col-md-4">
                                <input class="form-check-input " type="radio" name="gender" id="gender" value="男性"  {{ old('gender') == "男性" ? 'checked' : '' }}/>   
                                <label class="form-check-label" for="gender">男性</label>
                                
                                <input class="form-check-input " type="radio" name="gender" id="gender" value="女性" {{ old('gender') == "女性"? 'checked' : '' }}/> 
                                <label class="form-check-label" for="gender">女性</label>
                                <input class="form-check-input " type="radio" name="gender" id="gender" value="選択なし" {{ old('gender') == "選択なし"? 'checked' : '' }}/>   
                                <label class="form-check-label" for="gender">選択なし</label>
                            </div>  
                        </div>                      

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="sample@com" required autocomplete="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('再確認') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('新規登録') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
