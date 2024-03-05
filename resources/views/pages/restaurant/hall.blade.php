@extends('master')

@section('head')
    <link rel="stylesheet" href="/assets/css/{{$cssVersion}}/hall.css" />
@endsection

@section('content')
    <div id="content">
        <div class="content_hall_intro">
            <div class="container is-max-desktop" style="padding-right: .3rem; padding-left: .3rem; margin-bottom: 1.4rem">
                <div class="content_hall_intro_desc columns is-gapless is-multiline">
                    <div class="column is-one-third-tablet">
                        <h1>Hội trường</h1>
                    </div>
                    <div class="column desc">
                        <p>Tổ chức sinh nhật, đám tiệc, rộng rãi thoáng mát</p>
                    </div>
                </div>
            </div>
            <div class="container is-max-desktop" style="max-width: 750px">
                <h2 class="hall_title">Đặc Tiệc - Sinh Nhật - Liên Hoan - Đám Cưới</h2>
                <p class="hall_desc">Hội trường chuyên tổ chức tiệc, rộng rãi, có sức chứa lớn, không gian thoải mái có máy lạnh. Có sân khấu cho các trương trình trong bữa tiệc. Nhân viên phục vụ nhiệt tình, chu đáo. Thích hợp tổ chức các loại tiệc.</p>
                <div class="hall_contact">
                    <a class="button" href="tel:02946500999">Đặt tiệc ngay!</a>
                    <a href="/lien-he-chung-toi" class="hall_contact__phone">
                        <span class="material-icons">call</span>
                        <p>Liên hệ</p>
                    </a>
                </div>
            </div>
            <div class="hall-slide content_intro__slide">
                <swiper-container init="false">
                </swiper-container>
                <script>

                    let slide_image_url_arr = [
                        // '/assets/images/hall/slide/slide (1).png',
                        '/assets/images/hall/slide/slide (2).png',
                        '/assets/images/hall/slide/slide (5).png',
                        '/assets/images/hall/slide/slide (3).png',
                        '/assets/images/hall/slide/slide (4).png',
                        '/assets/images/hall/slide/slide (8).png',
                        // '/assets/images/hall/slide/slide (6).png',
                        '/assets/images/hall/slide/slide (10).png',
                        '/assets/images/hall/slide/slide (7).png',
                        '/assets/images/hall/slide/slide (13).png',
                        '/assets/images/hall/slide/slide (12).png',
                        '/assets/images/hall/slide/slide (9).png',
                        '/assets/images/hall/slide/slide (15).png',
                        '/assets/images/hall/slide/slide (11).png',
                        '/assets/images/hall/slide/slide (14).png',
                        '/assets/images/hall/slide/slide (16).png',
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
        </div>
        <div class="content_hall_contact">
            <div class="container is-max-widescreen">
                <p class="hall_title">Rộng Rãi - Thoáng Mát - Máy Lạnh - Sân Khấu</p>
            </div>
        </div>
        <div class="content_hall_detail">
            <div class="container is-max-desktop">
                <div class="columns is-multiline">
                    <div class="column is-one-third-tablet is-full-mobile">
                        <img src="/assets/images/hall/hall_detail_1.png">
                        <h3>Sân khấu</h3>
                        <p>Sân khấu lớn, phục vụ các trương trình có trong bữa tiệc.</p>
                        <span>Rộng rãi</span>
                    </div>
                    <div class="column is-one-third-tablet is-full-mobile">
                        <img src="/assets/images/hall/hall_detail_2.png">
                        <h3>Quần lễ tân</h3>
                        <p>Sẵn sàng phục vụ các nhu cầu của khách hàng mọi lúc.</p>
                        <span>Phục vụ 24/7</span>
                    </div>
                    <div class="column is-one-third-tablet is-full-mobile">
                        <img src="/assets/images/hall/hall_detail_3.png">
                        <h3>Cổng hội trường</h3>
                        <p>Hội trường rộng rãi, sạch sẽ, không gian ấm cúng.</p>
                        <span>Thoải mái check-in</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
