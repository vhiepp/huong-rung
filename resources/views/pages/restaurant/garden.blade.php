@extends('master')

@section('head')
    <link rel="stylesheet" href="/assets/css/garden.css" />
@endsection

@section('content')
    <div id="content">
        <div class="content_garden_intro">
            <div class="container is-max-widescreen">
                <div class="columns is-desktop">
                    <div class="column content_garden_intro__left is-half-desktop ">
                        <h1 class="garden_title">Sân vườn</h1>
                        <p class="garden_desc">Mỗi món ăn là sự kết hợp tinh tế giữa hương vị truyền thống và nguyên liệu tươi ngon, đảm bảo mang đến cho thực khách trải nghiệm ẩm thực đích thực và độc đáo.</p>
                        <div class="garden_contact">
                            <a class="button" href="tel:0373496609">Đặt món ngay!</a>
                            <a href="/lien-he-chung-toi" class="garden_contact__phone">
                                <span class="material-icons">call</span>
                                <p>Liên hệ</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
