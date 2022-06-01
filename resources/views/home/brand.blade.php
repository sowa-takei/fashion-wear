@extends('layouts.app')
@section('content')
<div class="conteiner">
    <div class="card">
        <div class="card-header">{{ __('ブランド一覧画面') }}</div>
            <div class="row">
                <div class="col-4">
                @foreach ($brands as $brand)
                <a href="{{ route('user.brand_show',['id'=>$brand->id]) }}" style="cursor:default;color:inherit;text-decoration:none;">
                    {{ $brand->name }}
                </a>
                @endforeach
                </div>
            </div>
          </div>
    </div>
</div>

  

@endsection