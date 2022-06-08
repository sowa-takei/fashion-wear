@extends('layouts.app')

@section('content')
<div class="conteiner">
    <div class="card">
        <div class="card-header">{{ __('商品詳細画面') }}</div>
            <div class="row">
            @include('layouts.sidebar')
                <div class="col-10">
                    <div class="row mx-auto mt-3">
                        @foreach ($items as $item)
                                <div class="col-4">
                                    <div class="mx-auto">
                                        <div style="text-align:center;"><img src="{{ Storage::url($item->image_id) }}"  height="400px" ></div>
                                    </div>
                                    <a href="{{ route('user.show',['id'=>$item->id]) }}" style="cursor:default;color:inherit;text-decoration:none;">
                                    <div class="row mt-1" >
                                        <div style="text-align:center;">{{ $item->name}}</div>
                                    </div>
                                    <div class="row mt-1">
                                        <div style="text-align:center;"> ￥{{ $item->price}}</div>
                                    </div> 
                                    </a>
                                </div>
                        @endforeach
                        <div class="d-flex justify-content-center">{{ $items->links() }}</div>
                    </div>   
                </div>     
            </div>
        </div>
    </div>
</div>
@endsection
