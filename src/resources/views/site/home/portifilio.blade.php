<!-- Portfolio Sections -->
<section class="portfolio-section-two">
    <div class="container-fluid">
        <div class="sec-title text-center">
            <div class="divider"><img src="{{ asset('davilla/images/icons/divider_2.png') }}" alt=""></div>
            <h2>
                Nossos Doces Trabalhos</h2>
        </div>

        <div class="portfolio-tabs tabs-box">
            <div class="tabs-content">
                <!--Tab-->
                <div class="tab active-tab" id="tab-1">
                    <div class="row">

                    @foreach ($listaProduto as $linha )
                
                        <!-- Portfolio Block Two -->
                        <div class="portfolio-block-two col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('davilla/images/'. $linha->foto_produto)}}" alt=""></figure>
                                </div>
                                <div class="portfolio-hover">
                                    <div class="hover-effect">
                                        <svg viewBox="0 0 300 300">
                                            <path class="st0"
                                                d="M-592-592V892H892V-592H-592z M284.9,154.4c-0.3,75.9-57.6,133.1-133.4,133.2c-36.6,0-70.7-13.3-96-37.5 c-26-24.8-40.4-59-40.4-96.3C15.1,75.9,75.6,12.4,150,12.4c3.3,0,6,2.7,6,6c0,3.3-2.7,6-6,6C82.2,24.4,27,82.4,27,153.8 c0,69.5,53.5,121.9,124.5,121.9c69.1,0,121.3-52.3,121.4-121.6c-0.2-62.6-51.2-113.4-113.8-113.3c-62.7,0-113.8,51.1-113.7,113.8 c0,3.3-2.7,6-6,6c-3.3,0-6-2.7-6-6c0-69.3,56.3-125.7,125.7-125.7c69.1,0,125.3,55.9,125.7,124.9h0L284.9,154.4z">
                                            </path>
                                        </svg>
                                    </div>
                                    <a href="" class="lightbox-image link" data-fancybox="portfolio"></a>
                                    <h3 style="font-size: 16px; letter-spacing: 8px; margin: 0 10px 0;" ><a href="{{route('cardapio.produto', $linha->slug_produto)}}">{{ $linha->descricao_categoria }} <br>{{ $linha->nome_produto }}</a></h3>
                                </div>
                            </div>
                          
                        </div>
                           @endforeach

                        



                        
                        


                        




                        



                    </div>


                    
                </div>

            </div>


        </div>
    </div>
</section>
<!--End Projects Sections -->
