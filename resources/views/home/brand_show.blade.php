@extends('layouts.app')
@section('content')
<div class="conteiner">
    <div class="card">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div style="text-align: center;">
                    <img src="{{ Storage::url($brands->image_id) }}" height="400px" >
                    {{ $brands->name}}
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-8">
                <div class="row">
                    <div style="text-align: center;">
                        {{ $brands->introduction }}
                    </div> 
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row mx-auto mt-5">
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
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection