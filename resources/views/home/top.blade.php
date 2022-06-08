@extends('layouts.app')

@section('content')
<div class="conteiner">
    <div class="card">
        <div class="card-header">{{ __('商品詳細画面') }}</div>
            <div class="row">
                @include('layouts.sidebar')
                <div class="col-10">
                    <div class="slider">
                        <img src="{{ asset('img/off.jpg') }}" height="500" alt="">
                        <img src="{{ asset('img/HERON-PRESTON.jpg') }}" height="500" alt=""> 
                        <img src="{{ asset('img/WE11DONE_L.jpg') }}" height="500" alt=""> 
                        <img src="{{ asset('img/balenciaga.jpg') }}"  height="500" alt="">
                        <img src="{{ asset('img/fear-of-god.jpg') }}"  height="500" alt="">
                    </div>
                    <div class="col-12">
                    <h1>新着商品</h1>
                    <div class="row mx-auto mt-3">
                        @foreach ($items as $item)
                            <div class="col-6">
                                <div class="mx-auto">
                                    <div style="text-align:center;"><img src="{{ Storage::url($item->image_id) }}"  height="400px" ></div>
                                    <a href="{{ route('user.show',['id'=>$item->id]) }}" style="cursor:default;color:inherit;text-decoration:none;">
                                        <div class="row mt-3">
                                            <div style="text-align:center;">{{ $item->name}}</div>
                                        </div>
                                        <div class="row mt-1">
                                            <div style="text-align:center;">￥{{ $item->price}}</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>   
                </div>   
                </div> 
            </div> 
        </div>
    </div>
</div>
@endsection

</body>
</html>
