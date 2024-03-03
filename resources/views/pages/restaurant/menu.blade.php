@extends('master')

@section('head')
    <link rel="stylesheet" href="/assets/css/menu.css" />
@endsection

@section('content')
    <div id="content">
        <div class="content_menu_intro">
            <div class="container is-max-widescreen">
                <div class="columns is-desktop">
                    <div class="column content_menu_intro__left is-half-tablet is-two-fifths-widescreen">
                        <h1 class="menu_title">Món ăn</h1>
                        <p class="menu_desc">Mỗi món ăn là sự kết hợp tinh tế giữa hương vị truyền thống và nguyên liệu tươi ngon, đảm bảo mang đến cho thực khách trải nghiệm ẩm thực đích thực và độc đáo.</p>
                        <div class="menu_contact">
                            <a class="button" href="tel:0373496609">Đặt món ngay!</a>
                            <a href="/lien-he-chung-toi" class="menu_contact__phone">
                                <span class="material-icons">call</span>
                                <p>Liên hệ</p>
                            </a>
                        </div>
                        <div class="menu_link_to_section">
                            <a href="#heo-sua-quay">
                                Heo sữa quay
                                <span class="material-icons">arrow_forward</span>
                            </a>
                            <a href="#lau-hai-san">
                                Lẩu hải sản
                                <span class="material-icons">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                    <div class="column content_menu_intro__right">
                        <div class="content-img">
                            <img src="/assets/images/menu/1.png" class="img-2" />
                            <img src="/assets/images/menu/3.png" class="img-1" />
                            <img src="/assets/images/menu/4.png" class="img-4" />
                            <img src="/assets/images/menu/2.png" class="img-3" />
                            <img src="/assets/images/menu/5.png" class="img-5" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_menu_roasted_pork" id="heo-sua-quay">
            <div class="container is-max-widescreen">
                <div class="columns">
                    <div class="column content_menu_roasted_pork_left">
                        <h2 class="title is-hidden-tablet">Heo sữa quay</h2>
                        <p class="desc-2 is-hidden-tablet">Giòn rụm của da - Béo ngọt tự nhiên từ sữa - Màu sắc kích thích vị giác</p>
                        <img src="/assets/images/menu/heo-sua-quay.png">
                    </div>
                    <div class="column content_menu_roasted_pork_right">
                        <h2 class="title is-hidden-mobile">Heo sữa quay</h2>
                        <p class="desc">Mỗi món ăn là sự kết hợp tinh tế giữa hương vị truyền thống và nguyên liệu tươi ngon, đảm bảo mang đến cho thực khách trải nghiệm ẩm thực đích thực và độc đáo.</p>
                        <p class="desc-2 is-hidden-mobile">Giòn rụm của da - Béo ngọt tự nhiên từ sữa - Màu sắc kích thích vị giác</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_menu_hot_pot" id="lau-hai-san">
            <div class="container">
                <h2 class="title">Ẩm thực 3 miền</h2>
                <p class="desc">Đầy đủ các món ăn đặc trưng 3 miền</p>
            </div>
            <div class="content_intro__slide">
                <swiper-container init="false">
                </swiper-container>
                <script>

                    let slide_image_url_arr = [
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
                        '/assets/images/menu/slide/slide (34).png',
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

                    const swiperEl = document.querySelector("swiper-container");

                    Object.assign(swiperEl, {
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
            <div class="container is-max-widescreen">
                <h2 class="title-2">Các món ăn dân dã</h2>
                <p class="desc">Các món ăn dân dã, đạm bạc chỉ thấy ở những đồng quê</p>
                <div class="columns is-multiline is-variable is-2-mobile is-2-tablet is-mobile" style="justify-content: center">
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/dan-da/vit-tuong-ieu.png">
                            <h6>Vịt tương iêu</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/slide/slide (1).png">
                            <h6>Mắm chưng</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/dan-da/ca-long-tong-kho.png">
                            <h6>Cá lòng tong</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/dan-da/mam.png">
                            <h6>Các loại mắm</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen is-hidden-mobile">
                        <div class="food-item">
                            <img src="/assets/images/menu/dan-da/tep-rong.png">
                            <h6>Tôm tép</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container is-max-widescreen">
                <h2 class="title-2">Món gỏi, món khô</h2>
                <p class="desc">Tuy đơn giản, nhưng ngon miệng</p>
                <div class="columns is-multiline is-variable is-2-mobile is-2-tablet is-mobile" style="justify-content: center">
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/goi-kho/goi-bo-ba-khia.png">
                            <h6>Gỏi bò ba khía</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/goi-kho/goi-bong-sung.png">
                            <h6>Gỏi bông súng</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/goi-kho/goi-thai-hai-san.png">
                            <h6>Gỏi thái hải sản</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/goi-kho/kho-ca-keo.png">
                            <h6>Khô cá kèo</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen is-hidden-mobile">
                        <div class="food-item">
                            <img src="/assets/images/menu/goi-kho/kho-ca-duoi.png">
                            <h6>Khô cá đuối</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container is-max-widescreen">
                <h2 class="title-2">Cơm, Mì, Lẩu</h2>
                <p class="desc">Đầy đủ các món cơm chiên, mì xào, lẩu đồng, lẩu hải sản</p>
                <div class="columns is-multiline is-variable is-2-mobile is-2-tablet is-mobile" style="justify-content: center">
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/com-mi-lau/com-chien-hai-san.png">
                            <h6>Cơm chiên hải sản</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/com-mi-lau/com-chay-kho-quet.png">
                            <h6>Cơm cháy kho quẹt</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/com-mi-lau/mi-xao-bo.png">
                            <h6>Mì xào bò</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/com-mi-lau/lau-cua.png">
                            <h6>Lẩu cua đồng</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen is-hidden-mobile">
                        <div class="food-item">
                            <img src="/assets/images/menu/com-mi-lau/lau-ca-bop.png">
                            <h6>Lẩu cá bớp</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container is-max-widescreen">
                <h2 class="title-2">Món đồng, hải sản</h2>
                <p class="desc">Cá, lươn, cua, tôm, tép, mực, nghêu, sò, ốc, hến, ...</p>
                <div class="columns is-multiline is-variable is-2-mobile is-2-tablet is-mobile" style="justify-content: center">
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/com-mi-lau/com-chien-hai-san.png">
                            <h6>Cơm chiên hải sản</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/com-mi-lau/com-chay-kho-quet.png">
                            <h6>Cơm cháy kho quẹt</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/com-mi-lau/mi-xao-bo.png">
                            <h6>Mì xào bò</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/com-mi-lau/lau-cua.png">
                            <h6>Lẩu cua đồng</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen is-hidden-mobile">
                        <div class="food-item">
                            <img src="/assets/images/menu/com-mi-lau/lau-ca-bop.png">
                            <h6>Lẩu cá bớp</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container is-max-widescreen">
                <h2 class="title-2">Đồ rừng</h2>
                <p class="desc">Đủ các món chim, dê, nai, đà điểu, rắn, baba, ...</p>
                <div class="columns is-multiline is-variable is-2-mobile is-2-tablet is-mobile" style="justify-content: center">
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/goi-kho/goi-bo-ba-khia.png">
                            <h6>Gỏi bò ba khía</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/goi-kho/goi-bong-sung.png">
                            <h6>Gỏi bông súng</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/goi-kho/goi-thai-hai-san.png">
                            <h6>Gỏi thái hải sản</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen">
                        <div class="food-item">
                            <img src="/assets/images/menu/goi-kho/kho-ca-keo.png">
                            <h6>Khô cá kèo</h6>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop is-one-fifth-widescreen is-hidden-mobile">
                        <div class="food-item">
                            <img src="/assets/images/menu/goi-kho/kho-ca-duoi.png">
                            <h6>Khô cá đuối</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container is-max-widescreen" style="margin-top: 1.2rem; display: flex; justify-content: right; padding-right: 12px">
                <div class="menu_contact">
                    <a class="button" href="tel:0373496609">Bấm để gọi!</a>
                    <a href="tel:0373496609" class="menu_contact__phone">
                        <span class="material-icons">call</span>
                        <p>Liên hệ</p>
                    </a>
                </div>
            </div>
        </div>


    </div>
@endsection
