@extends('layouts.app_admin')
@section('content')
<div class="container">
<form method="POST" action="{{ route('brand.update',['id'=>$brands->id]) }}" enctype="multipart/form-data">@csrf
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('編集画面') }}
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ブランド名') }}</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $brands->name)  }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="introduction" class="col-md-4 col-form-label text-md-end">{{ __('ブランド詳細') }}</label>
                            <div class="col-md-5">
                                <textarea id="introduction" class="form-control"  name="introduction" style="height:500px" required autocomplete="introduction" autofocus>{{ old('introduction', $brands->introduction) }}</textarea>
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