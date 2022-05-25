@extends('layouts.app')
@section('content')
<div class="container">
<form method="POST" action="{{ route('item.update',['id'=>$items->id]) }}">@csrf
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('編集画面') }}
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('商品名') }}</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $items->name)  }}" required autocomplete="name" autofocus>
                            </div>
                        </div> 
                    </div>
                    <button type="submit" class="btn btn-success">
                        {{ __('更新') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection