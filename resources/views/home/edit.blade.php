@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="{{ route('user.update',Auth::user()->id) }}" enctype="multipart/form-data">@csrf
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('編集画面') }}
                    <div class="card-body">
                        <div class="row mb-3">
                        
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('名前') }}</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', Auth::user()->name)  }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="col-md-4">
                            <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name" value="{{ old('last_name', Auth::user()->last_name)  }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('フリガナ') }}</label>
                            <div class="col-md-4">
                                <input id="name_kana" type="text" class="form-control @error('name') is-invalid @enderror" name="name_kana" value="{{ Auth::user()->name_kana  }}" required autocomplete="name_kana" autofocus>
                            </div> 
                            <div class="col-md-4">
                                <input id="last_name_kana" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name_kana" value="{{ Auth::user()->last_name_kana }}" required autocomplete="last_name_kana" autofocus>
                            </div>      
                        </div>

                        <div class="row mb-3">
                            <label for="postal_code" class="col-md-4 col-form-label text-md-end">{{ __('郵便番号') }}</label>
                            <div class="col-md-4">
                                <input id="postal_code" type="text" class="form-control @error('name') is-invalid @enderror" name="postal_code" value="{{ Auth::user()->postal_code  }}" required autocomplete="postal_code" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('住所') }}</label>
                            <div class="col-md-4">
                                <input id="address" type="text" class="form-control @error('name') is-invalid @enderror" name="address" value="{{ Auth::user()->address  }}" required autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telephone_number" class="col-md-4 col-form-label text-md-end">{{ __('電話番号') }}</label>
                            <div class="col-md-4">
                                <input id="telephone_number" type="text" class="form-control @error('name') is-invalid @enderror" name="telephone_number" value="{{ Auth::user()->telephone_number  }}" required autocomplete="telephone_number" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{__('性別')}}</label>    
                            <div class="col-md-4">
                                <input class="form-check-input " type="radio" name="gender" id="gender" value="{{ Auth::user()->gender }}" >    
                                <label class="form-check-label" for="gender">男性</label>
                                
                                <input class="form-check-input " type="radio" name="gender" id="gender" value="{{ Auth::user()->gender }}" >    
                                <label class="form-check-label" for="gender">女性</label>
                                <input class="form-check-input " type="radio" name="gender" id="gender" value="{{ Auth::user()->gender }}" >    
                                <label class="form-check-label" for="gender">選択なし</label>
                            </div>  
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>
                            <div class="col-md-4">
                                <input id="email" type="text" class="form-control @error('name') is-invalid @enderror" name="email" value="{{ Auth::user()->email  }}" required autocomplete="email" autofocus>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">
                            {{ __('更新') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection