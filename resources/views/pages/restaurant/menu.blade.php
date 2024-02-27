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
                                Lẩu cá lóc
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
            <div class="container is-max-desktop">
                <div class="columns is-desktop is-variable is-0-mobile is-0-tablet">
                    <div class="column is-two-thirds-desktop hot_pot_left_img">
                        <img src="/assets/images/menu/noi-lau-ca-loc.png">
                    </div>
                    <div class="column">
                        <div class="columns is-mobile is-multiline hot_pot_right_img is-variable is-0-mobile is-0-tablet">
                            <div class="column is-half-mobile is-full-desktop">
                                <img src="/assets/images/menu/ca-loc.png">
                            </div>
                            <div class="column is-half-mobile is-full-desktop">
                                <img src="/assets/images/menu/rau-lau.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container is-max-desktop">
                <h2 class="title">Lẩu hải sản</h2>
                <div class="columns">
                    <div class="column is-two-fifths hot_pot_desc">
                        <img src="/assets/images/menu/ca-loc.png">
                    </div>
                    <div class="column hot_pot_desc">
                        <p>Mỗi món ăn là sự kết hợp tinh tế giữa hương vị truyền thống và nguyên liệu tươi ngon, đảm bảo mang đến cho thực khách trải nghiệm ẩm thực đích thực và độc đáo.</p>
                        <p>Mỗi món ăn là sự kết hợp tinh tế giữa hương vị truyền thống và nguyên liệu tươi ngon, đảm bảo mang đến.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-two-fifths hot_pot_desc">
                        <img src="/assets/images/menu/rau-lau.png">
                    </div>
                    <div class="column hot_pot_desc">
                        <p>Mỗi món ăn là sự kết hợp tinh tế giữa hương vị truyền thống và nguyên liệu tươi ngon, đảm bảo mang đến.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
