@extends('layouts.app')

@section('content')
<div class="conteiner">
    <div class="card">
        <div class="card-header">{{ __('商品詳細画面') }}</div>
            <div class="row">
                <div class="col-10">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide"><img src="{{ asset('img/FFXIV_.jpg') }}" ></div>
                            <div class="swiper-slide"><img src="{{ asset('img/FFXIV_.jpg') }}"></div>
                            <div class="swiper-slide">Slide 3</div>
                            ...
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div> 
                <div class="card-header">{{ __('新着商品') }}</div>
                <div class="col-12">
                    <div class="row mx-auto mt-3">
                        @foreach ($items as $item)
                            <div class="col-6">
                                <div class="mx-auto">
                                    <div style="text-align:center;"><img src="{{ Storage::url($item->image_id) }}"  height="400px" ></div>
                                    <div class="row mt-3">
                                        <div style="text-align:center;">{{ $item->name}}</div>
                                    </div>
                                    <div class="row mt-1">
                                        <div style="text-align:center;">￥{{ $item->price}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>   
                </div>     
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{ mix('js/swiper.js') }}" ></script>  
</body>
</html>
