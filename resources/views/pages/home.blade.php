@extends('master')

@section('head')
    <link rel="preload" href="/assets/images/slide/slide-1-min.jpg" as="image">
    <link rel="preload" href="/assets/images/slide/slide-2-min.jpg" as="image">
    <link rel="preload" href="/assets/images/slide/slide-3-min.jpg" as="image">
    <link rel="preload" href="/assets/images/slide/slide-4-min.jpg" as="image">
    <link rel="preload" href="/assets/images/slide/slide-5-min.jpg" as="image">
    <link rel="preload" href="/assets/images/slide/slide-6-min.jpg" as="image">
    <link rel="preload" href="/assets/images/slide/slide-7-min.jpg" as="image">
    <link rel="preload" href="/assets/images/slide/slide-8-min.jpg" as="image">
@endsection

@section('content')
    <div id="content">
        <div id="content_intro">
            <div class="container is-max-widescreen">
                <div class="columns is-mobile">
                    <div class="column content_intro__text is-three-quarters-tablet is-three-fifths-widescreen">
                        <h3>Nhà Hàng Khách Sạn</h3>
                        <h1>Hương Rừng</h1>
                        <h2>HomeStay</h2>
                        <p>
                            Thành phố chật chội, thiếu không gian yên tỉnh! <br />
                            Đừng lo! Đã có
                            Hương Rừng lo. Hương Rừng cho bạn hương của núi rừng của đồng quê
                            ngay giữa lòng thành phố nhưng vẫn đảm bảo đầy đủ tiện nghi cho
                            bạn giải trí thoải mái nhất!
                        </p>
                    </div>
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
                        '/assets/images/slide/slide-4-min.jpg',
                        '/assets/images/slide/slide-5-min.jpg',
                        '/assets/images/slide/slide-6-min.jpg',
                        '/assets/images/slide/slide-7-min.jpg',
                        '/assets/images/slide/slide-8-min.jpg'
                    ];

                    const swiperEl = document.querySelector("swiper-container");

                    Object.assign(swiperEl, {
                        slidesPerView: 1,
                        centeredSlides: true,
                        centeredSlidesBounds: true,
                        spaceBetween: 10,
                        breakpoints: {
                            769: {
                                slidesPerView: 2,
                                spaceBetween: 10
                            },
                            1100: {
                                slidesPerView: 3,
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
            <div class="content_overview-intro__desc-area">
                <p>Thành phố chật chội, thiếu không gian yên tỉnh!</p>
                <p>Đừng lo! Đã có Hương Rừng lo. Hương Rừng cho bạn hương của núi rừng của đồng quê ngay giữa lòng thành phố</p>
                <p>nhưng vẫn đảm bảo đầy đủ tiện nghi cho bạn giải trí thoải mái nhất!</p>
            </div>
            <p class="content_overview-intro__desc-outstanding">
                NHÀ HÀNG - NHÀ NGHỈ - PHÒNG LẠNH - SÂN VƯỜN - ĐẶC TIỆC
            </p>
            <div class="contact-area columns">
                <div class="column">
                    <p>0868 657 765</p>
                </div>
                <div class="column">
                    <p>nhahangkhachsanhuongrung@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="content_area-intro hall">
            <div class="hall_title-area">
                <h4 class="hall_title-area__title">HỘI TRƯỜNG</h4>
                <div class="hall_title-area__statistical-area">
                    <p><span class="statistical-area_outstanding">300</span> ghế cho 30 mâm</p>
                    <p><span class="statistical-area_outstanding">1</span> sân khấu</p>
                    <p><span class="statistical-area_outstanding">1</span> Quầy lễ tân phục vụ chu đáu</p>
                </div>
                <p class="statistical_desc">
                    Phù hợp cho đặc tiệc cưới hỏi, liên hoan, tiệc mừng, sinh nhật, họp bạn,... Phục vụ đầy đủ chu đáu cho ngày vui của bạn thêm trọn vẹn!
                </p>
            </div>
            <div class="container is-max-widescreen">
                <div class="columns is-multiline is-mobile is-gapless hall_pic-area">
                    <div class="column is-full-mobile is-full-tablet is-two-thirds-desktop">
                        <div class="hall_pic-area__frame">
                            <img src="./assets/images/hall/hall-1.jpg" alt=""  >
                        </div>
                    </div>
                    <div class="column is-one-thirds-desktop" >
                        <div class="columns is-gapless is-multiline is-mobile" style="height: 100%">
                            <div class="column is-half-mobile is-full-desktop hall_pic-area__frame right">
                                <img src="./assets/images/hall/hall-2.jpg" alt=""  >
                            </div>
                            <div class="column is-half-mobile is-full-desktop hall_pic-area__frame right">
                                <img src="./assets/images/hall/hall-3.jpg" alt=""  >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_area-intro garden">
            <div class="container is-max-widescreen">
                <div class="garden_title-area">
                    <h4 class="garden_title-area__title">SÂN VƯỜN</h4>
                </div>
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
        </div>
        <div class="content_area-intro video">
            <video class="video" autoplay muted src="./assets/videos/intro-2.mp4"></video>
        </div>
        <div class="container is-max-widescreen">
            <div class="content_area-intro motel">
                <div class="motel_title-area">
                    <h4 class="motel_title-area__title">NHÀ NGHỈ</h4>
                    <p class="motel_title-area__statistical">Phòng đơn, phòng đôi, phòng 4 phù hợp cho ở ngắn hạn và dài hạn</p>
                    <p class="motel_title-area__desc">Đặc biệt không gian yên tỉnh, cách trường đại học 200m phù hợp cho giảng viên có chuyến công tác tại đây.</p>
                </div>
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
        <div class="content_area-intro parking-lot">
            <div class="container is-max-widescreen">
                <div class="parking-lot_title-area">
                    <h4 class="parking-lot_title-area__title">BÃI ĐẬU XE</h4>
                    <p class="parking-lot_title-area__desc">Không cần phải lo nghĩ về vấn đề an ninh khi bãi đậu xe có sức chứa lên đến 300 xe gắn máy, 8 xe hơi 4 chổ ngồi, 2 xe hơi 16 chổ.</p>
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
        <div class="container is-max-widescreen">
            <div id="content_contact">
                <h3 class="contact_title">Liên hệ với chúng tôi!</h3>
                <div class="contact_quick columns is-multiline">
                    <div class="contact_quick__item column">
                        <a href="https://maps.app.goo.gl/Thvfe6SSEQ6EgSbN7" target="_blank" class="item_circle">
                            <span class="material-icons">place</span>
                        </a>
                        <a href="https://maps.app.goo.gl/Thvfe6SSEQ6EgSbN7" target="_blank" class="contact_quick__desc">Số 104, Nguyễn Thiện Thành,<br> Phường 5, Thành phố Trà Vinh,<br> Tỉnh Trà Vinh, Việt Nam</a>
                    </div>
                    <div class="contact_quick__item column">
                        <a href="tel:0373496609" class="item_circle">
                            <span class="material-icons">call</span>
                        </a>
                        <a href="tel:0373496609" class="contact_quick__desc">0373 496 609</a>
                    </div>
                    <div class="contact_quick__item column">
                        <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=nhahangkhachsanhuongrung@gmail.com&su=T%C6%B0%20v%E1%BA%A5n%20%C4%91%E1%BA%B7t%20d%E1%BB%8Bch%20v%E1%BB%A5%20H%C6%B0%C6%A1ng%20R%E1%BB%ABng" target="_blank" class="item_circle">
                            <span class="material-icons">email</span>
                        </a>
                        <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=nhahangkhachsanhuongrung@gmail.com&su=T%C6%B0%20v%E1%BA%A5n%20%C4%91%E1%BA%B7t%20d%E1%BB%8Bch%20v%E1%BB%A5%20H%C6%B0%C6%A1ng%20R%E1%BB%ABng" target="_blank" class="contact_quick__desc">nhahangkhachsanhuongrung@gmail.com</a>
                    </div>
                </div>
                <div class="contact_form">
                    <div class="contact_form__left">
{{--                        <div class="left_row inline">--}}
{{--                            <div class="input-cluster">--}}
{{--                                <label for="">Số điện thoại</label>--}}
{{--                                <input type="text" name="phone" id="" placeholder="Số điện thoại của bạn là gì?">--}}
{{--                            </div>--}}
{{--                            <div class="input-cluster">--}}
{{--                                <label for="">Danh xưng</label>--}}
{{--                                <input type="text" name="nickname" id="" placeholder="Chúng tôi nên gọi bạn như thế nào?">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="left_row">
                            <div class="input-cluster">
                                <label for="">Số điện thoại</label>
                                <input type="text" name="phone" id="" placeholder="Số điện thoại của bạn là gì?">
                            </div>
                        </div>
                        <div class="left_row">
                            <div class="input-cluster">
                                <label for="">Danh xưng</label>
                                <input type="text" name="nickname" id="" placeholder="Chúng tôi nên gọi bạn như thế nào?">
                            </div>
                        </div>
                        <div class="left_row">
                            <div class="input-cluster">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" placeholder="Địa chỉ email của bạn?">
                            </div>
                        </div>
                        <div class="left_row">
                            <div class="input-cluster">
                                <label for="">Nhu cầu của bạn</label>
                                <textarea name="desc" id="" rows="3" resize="false"></textarea>
                            </div>
                        </div>
                        <button type="button" class="form-button">Gửi</button>
                    </div>
                    <div class="contact_form__right is-hidden-mobile">
                        <div class="pic-frame">
                            <img src="./assets/images/contact/contact-1.jpg" alt=""  >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container is-max-widescreen content_map">
            <a href="https://maps.app.goo.gl/Thvfe6SSEQ6EgSbN7" target="_blank" style="display: block">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3889.027858028245!2d106.35012429081344!3d9.92518400539292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOcKwNTUnMzAuMSJOIDEwNsKwMjEnMDQuMCJF!5e0!3m2!1sfr!2s!4v1706952407154!5m2!1sfr!2s" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </a>
        </div>
    </div>
@endsection
