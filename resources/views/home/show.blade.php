@extends('layouts.app')
@section('content')
<div class="conteiner">
    <div class="card">
        <div class="row">
            <div class="col-6">
                <div class="photo">
                    <img src="{{ Storage::url($item->image_id) }}" height="600px" >
                </div>
            </div>
            <div class="col-4">
                <div class="name">
                    {{ $item->name}}
                </div>
                <div style="text-align:right;">￥{{ $item->price}}</div> 
                <div class="introduction">
                    <div class="row mt-5">
                        {{ $item->introduction }}
                    </div>
                </div>
                <span>
                    <!-- もし$likeがあれば＝ユーザーが「いいね」をしていたら -->
                    @if($like)
                        <!-- 「いいね」取消用ボタンを表示 -->
                        <a href="{{ route('unlike',$item) }}" class="btn btn-light btn-sm">
                            <img src="{{asset('img/nicebutton.png')}}" width="30px">
                                {{ $item->likes->count() }}
                        </a>
                    @else
                        <!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
                        <a href="{{ route('like',$item) }}" class="btn btn-light btn-sm"> 
                            <img src="{{asset('img/iine.png')}}" width="30px">     
                                {{ $item->likes->count() }}
                        </a>
                    @endif
                </span>
            </div>
            <div class="row mt-5">
                <div class="col-2"></div>
                <div class="col-10">
                    <h4>コメントを書く</h4>
                    <form method="POST" action="{{ route('review')  }}">@csrf
                        <div class="col-md-4">
                            <input type="hidden" name='item_id' value="{{$item->id}}">
                            <textarea  class="form-control"  name="comment" placeholder="コメント" required autocomplete="comment" autofocus></textarea>
                            <div style="text-align:right;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('コメントを記入') }}</div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-2"></div>
                <div class="col-4">
                    <h4>コメント一覧</h4>
                    @foreach ($item->reviews as $review)
                        <p>投稿者:{{ $review->user->name}}</p>
                        <p>{{ $review->comment }}</p>  
                        <div style="text-align:right;">{{ $review->created_at ->format('Y/m/d')}}</div>
                        <div style="text-align:right;">
                            @if(Auth::check() && Auth::id() == $review->user_id) 
                                <form action="{{ route('review.destroy',['id'=>$review->id]) }}" method="POST">@csrf
                                    <button type="submit" class="btn btn-danger">削除</button>
                                </form>
                            @endif
                        </div>  
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection