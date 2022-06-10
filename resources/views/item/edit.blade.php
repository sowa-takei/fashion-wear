@extends('layouts.app_admin')
@section('content')
<div class="container">
<form method="POST" action="{{ route('item.update',['id'=>$items->id]) }}" enctype="multipart/form-data">@csrf
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('編集画面') }}
                    <div class="card-body">
                        <div class="row mb-3">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('商品名') }}</label>
                            <div class="col-md-5">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $items->name)  }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="introduction" class="col-md-4 col-form-label text-md-end">{{ __('商品説明') }}</label>
                            <div class="col-md-5">
                                <textarea id="introduction" class="form-control"  rows="15" name="introduction" required autocomplete="introduction" autofocus>{{ old('introduction', $items->introduction) }}</textarea>
                            </div>
                      </div>

                      <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('値段') }}</label>
                            <div class="col-md-5">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price', $items->price)  }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: right;"><button type="submit" class="btn btn-success">
                        {{ __('更新') }}
                    </button></div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection