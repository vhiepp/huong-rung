@extends('master')

@section('head')
    <link rel="stylesheet" href="/assets/css/{{$cssVersion}}/home.css" />
@endsection

@section('content')
    <div id="content">
        <div id="content_intro">
            <div class="container is-max-widescreen" style="margin-bottom: 1rem">
                <div class="columns is-mobile">
                    <div class="column content_intro__text is-three-quarters-tablet is-three-fifths-widescreen">
                        <h3>Nhà Hàng Khách Sạn</h3>
                        <h1>Hương Rừng</h1>
                        <h2>HomeStay</h2>
                        <p>
                            Chuyên phục vụ ăn uống, ẩm thực các món đặc trưng 3 miền.<br />
                            Nhận đặt tiệc liên hoan, sinh nhật,... <br />
                            Cho thuê phòng nghỉ cao cấp rộng rãi, thoáng mát, đầy đủ tiện nghi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container is-max-widescreen" style="z-index: 10">
                <div class="home_contact">
                    <a class="button" href="tel:02946500999">Đặt tiệc, đặt phòng!</a>
                    <a href="/lien-he-chung-toi" class="home_contact__phone">
                        <span class="material-icons">call</span>
                        <p>Liên hệ</p>
                    </a>
                </div>
            </div>
            <div class="content_intro__slide">
                <swiper-container init="false">
                </swiper-container>
                <script>

                    let slide_image_url_arr = [
                        '/assets/images/slide/slide-1-min.jpg',
                        '/assets/images/slide/slide-2-min.jpg',
                        '/assets/images/slide/slide-3-min.jpg',
                        '/assets/images/garden/san-vuon (4).jpg',
                        '/assets/images/garden/san-vuon (5).jpg',
                        '/assets/images/garden/san-vuon (6).jpg',
                        '/assets/images/slide/slide-4-min.jpg',
                        '/assets/images/slide/slide-5-min.jpg',
                        '/assets/images/garden/san-vuon (7).jpg',
                        '/assets/images/garden/san-vuon (8).jpg',
                        '/assets/images/garden/san-vuon (9).jpg',
                        '/assets/images/garden/san-vuon (10).jpg',
                        '/assets/images/garden/san-vuon (11).jpg',
                        '/assets/images/garden/san-vuon (12).jpg',
                        '/assets/images/garden/san-vuon (13).jpg',
                        '/assets/images/slide/slide-6-min.jpg',
                        '/assets/images/slide/slide-7-min.jpg',
                        '/assets/images/slide/slide-8-min.jpg',
                        '/assets/images/hall/slide/slide (10).png',
                        '/assets/images/hall/slide/slide (7).png',
                        '/assets/images/garden/san-vuon (1).jpg',
                        '/assets/images/garden/san-vuon (2).jpg',
                        '/assets/images/garden/san-vuon (3).jpg',
                        '/assets/images/hall/slide/slide (13).png',
                        '/assets/images/hall/slide/slide (12).png',
                        '/assets/images/garden/san-vuon (14).jpg',
                        '/assets/images/garden/san-vuon (15).jpg',
                        '/assets/images/garden/san-vuon (16).jpg',
                        '/assets/images/garden/san-vuon (17).jpg',
                        '/assets/images/garden/san-vuon (18).jpg',
                        '/assets/images/garden/san-vuon (19).jpg',
                        '/assets/images/garden/san-vuon (20).jpg',
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
        <div id="content_overview-intro">
            <h3 class="content_overview-intro__sub-name">NHÀ HÀNG KHÁCH SẠN</h3>
            <div class="content_overview-intro__brand-name-frame">
                <img src="./assets/images/brand-name.png" alt=""  >
            </div>
{{--            <div class="content_overview-intro__desc-area">--}}
{{--                <p>Thành phố chật chội, thiếu không gian yên tỉnh!</p>--}}
{{--                <p>Đừng lo! Đã có Hương Rừng lo. Hương Rừng cho bạn hương của núi rừng của đồng quê ngay giữa lòng thành phố</p>--}}
{{--                <p>nhưng vẫn đảm bảo đầy đủ tiện nghi cho bạn giải trí thoải mái nhất!</p>--}}
{{--            </div>--}}
            <p class="content_overview-intro__desc-outstanding">
                NHÀ HÀNG - KHÁCH SẠN - PHÒNG LẠNH - SÂN VƯỜN - ĐẶC TIỆC
            </p>
            <div class="contact-area">
                <div class="columns">
                    <div class="column">
                        <p>0868 657 765</p>
                    </div>
                    <div class="column">
                        <p>huongrung@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_area-intro hall">
            <div class="container is-max-widescreen">
                <div class="hall_title-area">
                    <h4 class="hall_title-area__title">Hội Trường</h4>
                    <div class="hall_title-area__statistical-area">
                        <p><span class="statistical-area_outstanding">30</span> mâm</p>
                        <p><span class="statistical-area_outstanding">1</span> sân khấu</p>
                        <p><span class="statistical-area_outstanding">1</span> quầy lễ tân</p>
                    </div>
                    <p class="statistical_desc">
                        Phù hợp cho đặc tiệc cưới hỏi, liên hoan, tiệc mừng, sinh nhật, họp bạn,... Phục vụ đầy đủ chu đáu cho ngày vui của bạn thêm trọn vẹn!
                    </p>
                </div>
            </div>
            <div class="container is-max-widescreen">
                <div class="columns is-multiline is-mobile is-variable is-1 hall_pic-area">
                    <div class="column is-full-mobile is-full-tablet is-two-thirds-desktop">
                        <div class="hall_pic-area__frame">
                            <img src="./assets/images/hall/hall-1.jpg" alt=""  >
                        </div>
                    </div>
                    <div class="column is-one-thirds-desktop" style="height: 100%">
                        <div class="columns is-variable is-1 is-multiline is-mobile" style="height: 100%; justify-content: center">
                            <div class="column is-half-mobile is-full-desktop hall_pic-area__frame right">
                                <img src="./assets/images/hall/hall-2.jpg" alt="" class="object-fit-cover" >
                            </div>
                            <div class="column is-half-mobile is-full-desktop hall_pic-area__frame right">
                                <img src="./assets/images/hall/hall-3.jpg" alt=""  >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 100%">
                <div class="container is-max-widescreen read-more">
                    <a href="/khu-hoi-truong-to-chuc-tiec">
                        Xem chi tiết
                        <span class="material-icons">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="content_garden">
            <h4 class="title">Khu Sân Vườn</h4>
        </div>
        <div class="content_area-intro garden">
            <div class="container is-max-widescreen">
                <div class="garden_pic-area">
                    <div class="garden_pic-area__frame">
                        <img src="./assets/images/garden/garden-1.jpg" alt=""  >
                    </div>
                    <div class="garden_pic-area__frame">
                        <img src="./assets/images/garden/garden-2.jpg" alt=""  >
                    </div>
                </div>
                <div class="garden_title-area">
                    <h4 class="garden_title-area__desc">SÂN VƯỜN RỘNG RÃI THOÁNG MÁT</h4>
                </div>
                <div class="garden_pic-area">
                    <div class="garden_pic-area__frame">
                        <img src="./assets/images/garden/garden-3.jpg" alt=""  >
                    </div>
                    <div class="garden_pic-area__frame">
                        <img src="./assets/images/garden/garden-4.jpg" alt=""  >
                    </div>
                </div>
            </div>
            <div style="width: 100%; margin-top: 2rem">
                <div class="container is-max-widescreen read-more">
                    <a href="/khu-san-vuon">
                        Xem chi tiết
                        <span class="material-icons">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="content_garden">
            <h4 class="title">Ẩm thực 3 miền</h4>
        </div>
        <div class="content_food">
            <div class="container is-max-desktop">
                <p class="title-area__desc">Đầy đủ các món ăn đặc trưng 3 miền, ĐẶC BIỆT Heo Sữa Quay</p>
            </div>
            <div class="content_intro__slide">
                <swiper-container init="false" id="food-slide">
                </swiper-container>
                <script>

                    let slide_image_url_arr_2 = [
                        '/assets/images/menu/slide/slide (1).png',
                        '/assets/images/menu/slide/slide (2).png',
                        '/assets/images/menu/slide/slide (3).png',
                        '/assets/images/menu/slide/slide (4).png',
                        '/assets/images/menu/slide/slide (5).png',
                        '/assets/images/menu/slide/slide (6).png',
                        '/assets/images/menu/slide/slide (7).png',
                        '/assets/images/menu/slide/slide (8).png',
                        '/assets/images/menu/slide/slide (9).png',
                        '/assets/images/menu/slide/slide (10).png',
                        // '/assets/images/menu/slide/slide (11).png',
                        '/assets/images/menu/slide/slide (12).png',
                        '/assets/images/menu/slide/slide (13).png',
                        '/assets/images/menu/slide/slide (14).png',
                        '/assets/images/menu/slide/slide (15).png',
                        '/assets/images/menu/slide/slide (16).png',
                        '/assets/images/menu/slide/slide (17).png',
                        '/assets/images/menu/slide/slide (18).png',
                        '/assets/images/menu/slide/slide (19).png',
                        '/assets/images/menu/slide/slide (20).png',
                        '/assets/images/menu/slide/slide (21).png',
                        '/assets/images/menu/slide/slide (22).png',
                        '/assets/images/menu/slide/slide (23).png',
                        '/assets/images/menu/slide/slide (24).png',
                        '/assets/images/menu/slide/slide (25).png',
                        '/assets/images/menu/slide/slide (26).png',
                        '/assets/images/menu/slide/slide (27).png',
                        '/assets/images/menu/slide/slide (28).png',
                        '/assets/images/menu/slide/slide (29).png',
                        '/assets/images/menu/slide/slide (30).png',
                        '/assets/images/menu/slide/slide (31).png',
                        '/assets/images/menu/slide/slide (32).png',
                        '/assets/images/menu/slide/slide (33).png',
                        // '/assets/images/menu/slide/slide (34).png',
                        '/assets/images/menu/slide/slide (35).png',
                        '/assets/images/menu/slide/slide (36).png',
                        '/assets/images/menu/slide/slide (37).png',
                        '/assets/images/menu/slide/slide (38).png',
                        '/assets/images/menu/slide/slide (39).png',
                        '/assets/images/menu/slide/slide (40).png',
                        '/assets/images/menu/slide/slide (41).png',
                        '/assets/images/menu/slide/slide (42).png',
                        // '/assets/images/menu/slide/slide (43).png',
                    ];

                    const swiperEl2 = document.querySelector("#food-slide");

                    Object.assign(swiperEl2, {
                        slidesPerView: 2,
                        centeredSlides: true,
                        centeredSlidesBounds: true,
                        spaceBetween: 10,
                        breakpoints: {
                            769: {
                                slidesPerView: 4,
                                spaceBetween: 10
                            },
                            1100: {
                                slidesPerView: 6,
                                spaceBetween: 20
                            }
                        },
                        pagination: {
                            type: "fraction",
                        },
                        autoplay: {
                            delay: 1900,
                            disableOnInteraction: false,
                        },
                        navigation: true,
                        virtual: {
                            slides: (function () {
                                const slides = [];
                                for (var i = 0; i < slide_image_url_arr_2.length; i++) {
                                    slides.push(`
                                <div class="slide-item">
                                    <img src="${slide_image_url_arr_2[i]}" alt="" />
                                </div>
                            `);
                                }
                                return slides;
                            })(),
                        },
                    });

                    swiperEl2.initialize();

                    const swiper2 = swiperEl2.swiper;
                </script>
            </div>
            <div class="container is-max-widescreen read-more" style="margin-top: 2rem">
                <a href="/mon-an-noi-bat">
                    Xem chi tiết
                    <span class="material-icons">arrow_forward</span>
                </a>
            </div>
        </div>
        <div class="content_garden">
            <h4 class="title">Nhà Nghỉ</h4>
            <p class="title-area__outstanding">PHÒNG ĐƠN - PHÒNG ĐÔI - PHÒNG BA</p>
            <div class="container is-max-desktop">
                <p class="title-area__desc">Đặc biệt không gian yên tỉnh, cách trường Đại học Trà Vinh 200m phù hợp cho giảng viên có chuyến công tác tại đây.</p>
            </div>
        </div>
        <div class="content_motel">
            <div class="container is-max-widescreen">
                <div class="content_area-intro motel">
                    <div class="motel_pic-area">
                        <div class="motel_pic-area__frame">
                            <img src="./assets/images/motel/motel-1.jpg" alt=""  >
                        </div>
                    </div>
                    <div class="motel_pic-area">
                        <div class="motel_pic-area__frame">
                            <img src="./assets/images/motel/motel-2.jpg" alt=""  >
                        </div>
                        <div class="motel_pic-area__frame">
                            <img src="./assets/images/motel/motel-3.jpg" alt=""  >
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 100%; margin-top: 2rem">
                <div class="container is-max-widescreen read-more">
                    <a href="/nha-nghi">
                        Xem chi tiết
                        <span class="material-icons">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="content_area-intro parking-lot">
            <div class="container is-max-widescreen">
                <div class="parking-lot_title-area">
                    <h4 class="title">Bãi Đậu Xe</h4>
                    <p class="title-area__desc">Rộng rãi, an ninh, có sức chứa lên đến 100 xe gắn máy, 8 xe hơi 4 chổ, 2 xe hơi 16 chổ.</p>
                </div>
                <div class="parking-lot_pic-area">
                    <div class="parking-lot_pic-area__frame">
                        <img src="./assets/images/parking-lot/parking-lot-1.jpg" alt=""  >
                    </div>
                    <div class="parking-lot_pic-area__frame">
                        <img src="./assets/images/parking-lot/parking-lot-2.jpg" alt=""  >
                    </div>
                </div>
            </div>
        </div>
        <div class="content_contact">
            @include('pages.contact.form')
        </div>
    </div>
@endsection
