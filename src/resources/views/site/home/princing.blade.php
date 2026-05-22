<!-- Pricing Section  -->
<section class="pricing-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="divider"><img src="{{ asset('davilla/images/icons/divider_1.png') }}" alt=""></div>
            <h2>Sabores e Valores</h2>
        </div>

        <div class="row">
            @foreach ($kitis as $linha)
                <!-- Pricing Table -->
                <div class="pricing-table tagged col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">

                        <!-- Pricing Highlight -->
                        <div class="pricing-highlight">

                            {{-- BADGE DE DESTAQUE DINÂMICO --}}
                            @if ($linha->destaque_kit != 'NENHUM')
                                <span
                                    style="
                                    position: absolute;
                                    top: 10px;
                                    left: 10px;
                                    background:
                                        @if ($linha->destaque_kit == 'MAIS VENDIDO') #e91e8c
                                        @elseif($linha->destaque_kit == 'PROMOCAO') #ff5722
                                        @elseif($linha->destaque_kit == 'NOVIDADE') #4caf50 @endif;
                                    color: white;
                                    padding: 4px 10px;
                                    border-radius: 20px;
                                    font-size: 11px;
                                    font-weight: bold;
                                    z-index: 9;
                                ">
                                    @if ($linha->destaque_kit == 'MAIS VENDIDO')
                                        ⭐ Mais Vendido
                                    @elseif($linha->destaque_kit == 'PROMOCAO')
                                        🔥 Promoção
                                    @elseif($linha->destaque_kit == 'NOVIDADE')
                                        🆕 Novidade
                                    @endif
                                </span>
                            @endif

                            <svg viewBox="0 0 67.3 67.3">
                                <path class="st0"
                                    d="M40.7,2.8c0.4,0,0.7,0,1.1,0.1c1.3,0.4,2.4,1.5,3.6,2.6c0.9,1,1.9,1.8,3,2.5c1.2,0.6,2.5,1.1,3.8,1.4 c1.6,0.4,3.1,0.8,4,1.7s1.3,2.4,1.7,4c0.3,1.3,0.7,2.5,1.3,3.7c0.7,1.1,1.6,2.1,2.6,3c1.2,1.2,2.3,2.2,2.6,3.5 c0.3,1.3-0.1,2.7-0.5,4.3c-0.4,1.3-0.6,2.6-0.7,3.9c0.1,1.2,0.3,2.5,0.6,3.7v0.1v0.1l0,0l0.5,1.9h0.1c0.2,0.9,0.1,1.7-0.1,2.6 c-0.3,1.3-1.4,2.4-2.6,3.6l0,0c-1,0.9-1.8,1.9-2.5,3c-0.6,1.2-1.1,2.5-1.4,3.8c-0.4,1.6-0.8,3.1-1.7,4s-2.5,1.2-4.1,1.7 c-1.3,0.3-2.5,0.7-3.7,1.3c-1.1,0.7-2.1,1.6-3,2.6c-1.2,1.2-2.2,2.3-3.5,2.6c-0.3,0.1-0.7,0.1-1,0.1c-1.1-0.1-2.2-0.3-3.3-0.6 c-1.3-0.4-2.6-0.6-3.9-0.7c-1.3,0.1-2.6,0.3-3.8,0.7c-1.1,0.3-2.2,0.6-3.3,0.6c-0.4,0-0.7,0-1.1-0.1c-1.3-0.4-2.4-1.5-3.6-2.6 c-0.9-1-1.9-1.8-3-2.5c-1.2-0.6-2.5-1.1-3.8-1.4c-1.6-0.4-3-0.8-4-1.7c-0.9-0.9-1.3-2.4-1.8-4c-0.3-1.3-0.7-2.5-1.3-3.7 c-0.7-1.1-1.6-2.1-2.6-3c-1.2-1.2-2.3-2.2-2.6-3.5s0.1-2.7,0.5-4.3c0.4-1.3,0.6-2.6,0.7-4c-0.1-1.3-0.3-2.6-0.7-3.8 c-0.4-1.6-0.8-3.1-0.5-4.4c0.4-1.3,1.5-2.4,2.6-3.6c1-0.9,1.8-1.9,2.5-3c0.6-1.2,1.1-2.5,1.4-3.8c0.4-1.6,0.8-3.1,1.7-4 s2.4-1.2,4-1.7c1.3-0.3,2.5-0.7,3.7-1.3c1.1-0.7,2.1-1.6,3-2.6c1.2-1.2,2.3-2.3,3.5-2.6c0.3-0.1,0.7-0.1,1-0.1 c1.1,0.1,2.2,0.3,3.3,0.6c1.3,0.4,2.6,0.6,4,0.7c1.3-0.1,2.6-0.3,3.8-0.7C38.5,3,39.6,2.8,40.7,2.8L40.7,2.8">
                                </path>
                            </svg>
                        </div>

                        {{-- FOTO DO KIT --}}
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('davilla/images/' . $linha->foto_kit . '.png') }}"
                                    alt="{{ $linha->nome_kit }}">
                            </figure>
                        </div>

                        <div class="pricing-svg">
                            <svg viewBox="0 0 1000 690">
                                <path class="st0"
                                    d="M1503-747c-669.3,0-1338.7,0-2008,0c0.3,425,0.7,850,1,1275c0,7.7,0,15.3,0,23c168.3,0.1,336.7,0.3,505,0.4 c18.1-10.6,32.9-15.9,58.4-10.8c80.7,16.2,160.7,100.3,240.4,93.8c93-7.5,184.6-116.6,284.6-96c88.9,18.3,101.9,175.6,227.2,147.5 c79.9-17.9,68.2-118.2,149.1-138.7c12.8-3.3,20.2-4.2,38.4-3.4c167.7,0.7,335.3,1.5,503,2.2c0.3-6,0.7-12,1-18 C1503,103,1503-322,1503-747z">
                                </path>
                            </svg>
                        </div>

                        {{-- NOME DO KIT --}}
                        <div class="title-box">
                            <h3>{{ $linha->nome_kit }}</h3>
                        </div>

                        {{-- ITENS E DESCRIÇÃO DO KIT --}}
                        <div class="table-footer">

                            {{-- DESCRIÇÃO --}}
                            @if ($linha->descricao_kit)
                                <p class="kit-descricao">{{ $linha->descricao_kit }}</p>
                            @endif

                            {{-- QUANTIDADE DE ITENS --}}
                            <p style="font-size: 12px; color: #888;">
                                🛍️ Kit com {{ $linha->ProdutosKit->count() }}
                                {{ $linha->ProdutosKit->count() == 1 ? 'item' : 'itens' }}
                            </p>

                            {{-- LISTA DE PRODUTOS DO KIT --}}
                            <ul class="pricing-list">
                                @foreach ($linha->ProdutosKit as $item)
                                    <li style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                        <img src="{{ asset('davilla/images/' . $item->produto->foto_produto . '.png') }}"
                                            alt="{{ $item->produto->nome_produto }}"
                                            style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
                                        <div>
                                            <strong>{{ $item->produto->nome_produto ?? '' }}</strong><br>
                                            <small>{{ $item->produto->descricao_produto ?? '' }}</small><br>
                                            <span style="color: #e91e8c; font-weight: bold;">
                                                R$ {{ number_format($item->produto->valor_produto, 2, ',', '.') }}
                                            </span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            {{-- PREÇO DO KIT --}}
                            @if ($linha->preco_kit)
                                <div style="text-align: center; margin: 10px 0;">

                                    {{-- PREÇO NORMAL RISCADO --}}
                                    <span style="font-size: 16px; color: #999; text-decoration: line-through;">
                                        R$ {{ number_format($linha->preco_kit, 2, ',', '.') }}
                                    </span>

                                    <br>

                                    {{-- PREÇO PROMOCIONAL --}}
                                    @if ($linha->preco_promocional_kit)
                                        <span style="font-size: 26px; font-weight: bold; color: #e91e8c;">
                                            R$ {{ number_format($linha->preco_promocional_kit, 2, ',', '.') }}
                                        </span>
                                    @endif

                                </div>
                            @endif

                            {{-- BOTÃO WHATSAPP --}}
                            @if ($linha->whatsapp_kit)
                                <div style="text-align: center; margin-top: 15px;">
                                    <a href="https://wa.me/{{ preg_replace('/\D/', '', $linha->whatsapp_kit) }}?text=Olá! Tenho interesse no {{ urlencode($linha->nome_kit) }}"
                                        target="_blank"
                                        style="background: #25d366; color: white; padding: 10px 20px; border-radius: 25px; text-decoration: none; font-weight: bold; display: inline-block;">
                                        📲 Peça agora
                                    </a>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--End Pricing Section -->
