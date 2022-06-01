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
                    @auth
                        <!-- Review.phpに作ったisLikedByメソッドをここで使用 -->
                        @if (!$review->isLikedBy(Auth::user()))
                            <span class="likes">
                                <i class="fas fa-music like-toggle" data-review-id="{{ $item->id }}"></i>
                            <span class="like-counter">{{$item->likes_count}}</span>
                            </span><!-- /.likes -->
                        @else
                            <span class="likes">
                                <i class="fas fa-music heart like-toggle liked" data-review-id="{{ $item->id }}"></i>
                            <span class="like-counter">{{$item->likes_count}}</span>
                            </span><!-- /.likes -->
                        @endif
                    @endauth
                    @guest
                        <span class="likes">
                            <i class="fas fa-music heart"></i>
                            <span class="like-counter">{{$item->likes_count}}</span>
                        </span><!-- /.likes -->
                    @endguest   
                </div>
            </div>
          </div>
    </div>
</div>
@endsection