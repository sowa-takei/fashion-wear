
<div class="conteiner">
    <div class="card">
        <div class="card-header">{{ __('商品詳細画面') }}</div>
            <div class="row">
                
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
        </div>
    </div>
</div>

<script src="{{ mix('js/swiper.js') }}" ></script>  
</body>
</html>
