@extends('master')

@section('head')
    <link rel="stylesheet" href="/assets/css/{{$cssVersion}}/garden.css" />
@endsection

@section('content')
    <div id="content">
        <div class="content_garden_intro">
            <div class="container is-max-widescreen">
                <div class="columns is-desktop">
                    <div class="column content_garden_intro__left is-half-desktop">
                        <h1 class="garden_title">Sân vườn</h1>
                        <p class="garden_desc">Sân vườn rộng rãi, sạch sẽ, thoáng gió. Các Tum mái lá mát mẻ, cảm giác hòa mình với thiên nhiên.</p>
                        <div class="garden_contact">
                            <a class="button" href="tel:02946500999">Gọi ngay!</a>
                            <a href="/lien-he-chung-toi" class="garden_contact__phone">
                                <span class="material-icons">call</span>
                                <p>Liên hệ</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_garden_intro__right">
                <div class="columns is-multiline is-variable is-3">
                    <div class="column is-offset-one-fifth is-two-fifths" style="padding-top: .5rem; padding-bottom: .5rem">
                        <img src="/assets/images/garden/san-vuon (1).jpg">
                    </div>
                    <div class="column is-two-fifths" style="padding-top: .5rem; padding-bottom: .5rem">
                        <img src="/assets/images/garden/san-vuon (2).jpg">
                    </div>
                    <div class="column is-offset-1 is-4" style="padding-top: .5rem; padding-bottom: .5rem">
                        <img src="/assets/images/garden/san-vuon (3).jpg">
                    </div>
                    <div class="column is-3" style="padding-top: .5rem; padding-bottom: .5rem">
                        <img src="/assets/images/garden/san-vuon (5).jpg">
                    </div>
                    <div class="column is-4" style="padding-top: .5rem; padding-bottom: .5rem">
                        <img src="/assets/images/garden/san-vuon (6).jpg">
                    </div>

                    <div class="column is-3" style="padding-top: .5rem; padding-bottom: .5rem">
                        <img src="/assets/images/garden/garden-2.jpg">
                    </div>
                    <div class="column is-4" style="padding-top: .5rem; padding-bottom: .5rem">
                        <img src="/assets/images/garden/san-vuon (9).jpg">
                    </div>
                    <div class="column is-5" style="padding-top: .5rem; padding-bottom: .5rem">
                        <img src="/assets/images/garden/san-vuon (10).jpg">
                    </div>

                    <div class="column is-offset-2 is-4" style="padding-top: .5rem; padding-bottom: .5rem">
                        <img src="/assets/images/garden/san-vuon (11).jpg">
                    </div>
                    <div class="column is-3" style="padding-top: .5rem; padding-bottom: .5rem">
                        <img src="/assets/images/garden/san-vuon (12).jpg">
                    </div>
                    <div class="column is-3" style="padding-top: .5rem; padding-bottom: .5rem">
                        <img src="/assets/images/garden/san-vuon (13).jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="content_garden_desc">
            <div class="container is-max-widescreen">
                <p class="garden_title">Rộng Rãi - Cây Xanh - Gió Mát - Trong Lành</p>
            </div>
        </div>
        <div class="content_garden_detail">
            <div class="container is-max-desktop">
                <h2 class="garden-title">Các TUM mái lá</h2>
                <p class="garden-desc">Rộng rãi, không khí trong lành, thoáng mát, trồng nhiều cây cảnh</p>
                <div class="content_garden_detail-1 columns is-multiline">
                    <div class="column is-one-third-tablet is-full-mobile">
                        <img src="/assets/images/garden/rong-rai.jpg">
                        <h3>Rộng rãi</h3>
                        <p>Các tum có diện tích lớn, bàn ăn rộng rãi.</p>
                    </div>
                    <div class="column is-one-third-tablet is-full-mobile">
                        <img src="/assets/images/garden/thien-nhien.jpg">
                        <h3>Thiên nhiên</h3>
                        <p>Nhiều cây cảnh, hòa mình với thiên nhiên.</p>
                    </div>
                    <div class="column is-one-third-tablet is-full-mobile">
                        <img src="/assets/images/garden/thoang-mat.jpg">
                        <h3>Thoáng mát</h3>
                        <p>Sạch sẽ, gió mát, không gian đồng quê.</p>
                    </div>
                </div>
            </div>
            <div class="garden-slide content_intro__slide">
                <swiper-container init="false">
                </swiper-container>
                <script>

                    let slide_image_url_arr = [
                        '/assets/images/garden/san-vuon (1).jpg',
                        '/assets/images/garden/san-vuon (2).jpg',
                        '/assets/images/garden/san-vuon (3).jpg',
                        '/assets/images/garden/san-vuon (4).jpg',
                        '/assets/images/garden/san-vuon (5).jpg',
                        '/assets/images/garden/san-vuon (6).jpg',
                        '/assets/images/garden/san-vuon (7).jpg',
                        '/assets/images/garden/san-vuon (8).jpg',
                        '/assets/images/garden/san-vuon (9).jpg',
                        '/assets/images/garden/san-vuon (10).jpg',
                        '/assets/images/garden/san-vuon (11).jpg',
                        '/assets/images/garden/san-vuon (12).jpg',
                        '/assets/images/garden/san-vuon (13).jpg',
                        '/assets/images/garden/san-vuon (14).jpg',
                        '/assets/images/garden/san-vuon (15).jpg',
                        '/assets/images/garden/san-vuon (16).jpg',
                        '/assets/images/garden/san-vuon (17).jpg',
                        '/assets/images/garden/san-vuon (18).jpg',
                        '/assets/images/garden/san-vuon (19).jpg',
                        '/assets/images/garden/san-vuon (20).jpg',
                        '/assets/images/garden/san-vuon (21).jpg',
                        '/assets/images/garden/san-vuon (22).jpg',
                        '/assets/images/garden/san-vuon (23).jpg',
                        '/assets/images/garden/san-vuon (24).jpg',
                    ];

                    const swiperEl = document.querySelector("swiper-container");

                    Object.assign(swiperEl, {
                        slidesPerView: 2,
                        centeredSlides: true,
                        centeredSlidesBounds: true,
                        spaceBetween: 8,
                        breakpoints: {
                            769: {
                                slidesPerView: 4,
                                spaceBetween: 10
                            },
                            1100: {
                                slidesPerView: 5,
                                spaceBetween: 20
                            }
                        },
                        pagination: {
                            type: "fraction",
                        },
                        autoplay: {
                            delay: 2200,
                            disableOnInteraction: false,
                        },
                        navigation: true,
                        virtual: {
                            slides: (function () {
                                const slides = [];
                                for (var i = 0; i < slide_image_url_arr.length; i++) {
                                    slides.push(`
                                <div class="slide-item">
                                    <img src="${slide_image_url_arr[i]}" alt="" />
                                </div>
                            `);
                                }
                                return slides;
                            })(),
                        },
                    });

                    swiperEl.initialize();

                    const swiper = swiperEl.swiper;
                </script>
            </div>
            <div class="container is-max-desktop">
                <div class="menu_contact">
                    <a class="button" href="tel:02946500999">Bấm để gọi!</a>
                    <a href="tel:02946500999" class="menu_contact__phone">
                        <span class="material-icons">call</span>
                        <p>Liên hệ</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
