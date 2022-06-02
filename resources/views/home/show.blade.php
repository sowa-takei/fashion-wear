@extends('layouts.app')
@section('content')
<div class="conteiner">
      <div class="card">
            <div class="row">
                <div class="col-6">
                    <div class="photo">
                        <img src="{{ Storage::url($items->image_id) }}" height="600px" >
                    </div>
                </div>
                <div class="col-4">
                    <div class="name">
                        {{ $items->name}}
                    </div>
                    <div style="text-align:right;">￥{{ $items->price}}</div> 
                    <div class="introduction">
                      <div class="row mt-5">
                          {{ $items->introduction }}
                      </div>
                    </div>
                    <span>
                    <!-- もし$niceがあれば＝ユーザーが「いいね」をしていたら -->
                    @if($like)
                    <!-- 「いいね」取消用ボタンを表示 -->
                    <a href="{{ route('unlike',$items) }}">
                        <img src="{{asset('img/nicebutton.png')}}" width="30px">
                    </a>
                    @else
                    <!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
                    <a href="{{ route('like',$items) }}" >
                        <img src="{{asset('img/iine.png')}}" width="30px">
                    </a>
                    @endif
                    </span>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection