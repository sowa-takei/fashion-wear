@extends('layouts.app_admin')
@section('content')
<div class="conteiner">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">{{ __('新規作成画面') }}</div>
        <div class="card-body">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form method="POST" action="{{ route('brand.store')  }}" enctype="multipart/form-data">@csrf
            <div class="row mb-3">
              <label for="image_id" class="col-md-4 col-form-label text-md-end">{{ __('ブランド画像') }}</label>
              <div class="col-md-4">
                <input type="file" name="image_id">
                <input type="submit" value="アップロード">
              </div>
            </div>

            <div class="row mb-3">
              <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ブランド名') }}</label>
              <div class="col-md-4">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"placeholder="商品名を記述" required autocomplete="name" autofocus>
              </div>
            </div>

            <div class="row mb-3">
              <label for="introduction" class="col-md-4 col-form-label text-md-end">{{ __('ブランド説明') }}</label>
              <div class="col-md-4">
                <textarea id="introduction" class="form-control" rows="15" name="introduction" placeholder="商品名を記述" required autocomplete="introduction" autofocus></textarea>
              </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('作成') }}
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