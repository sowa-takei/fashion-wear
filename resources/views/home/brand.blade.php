@extends('layouts.app')

@section('content')
<div class="conteiner">
    <div class="card">
        <div class="card-header">{{ __('ブランド一覧画面') }}</div>
        
            <div class="row">
            @include('layouts.sidebar')
                <div class="col-10">
                    <div class="row mx-auto mt-3">
                        @foreach ($brands as $brand)
                                <div class="col-5">
                                    <a href="{{ route('user.brand_show',['id'=>$brand->id]) }}" style="cursor:default;color:inherit;text-decoration:none;">
                                        <div class="mx-auto">
                                            <div style="text-align:center;"><img src="{{ Storage::url($brand->image_id) }}"  height="400px" ></div>
                                        </div>
                                        <div class="row mt-1" >
                                            <div style="text-align:center;">{{ $brand->name}}</div>
                                        </div>
                        
                                    </a>
                                </div>
     
                        @endforeach
                    </div>   
                </div>     
            </div>
        </div>
    </div>
</div>



@endsection