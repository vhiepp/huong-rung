@extends('master')

@section('head')
    <link rel="stylesheet" href="/assets/css/hall.css" />
@endsection

@section('content')
    <div id="content">
        <div class="content_hall_intro">
            <div class="content_hall_intro_desc container is-max-desktop">
                <div class="columns is-gapless is-multiline">
                    <div class="column is-one-third-tablet">
                        <h1>Hội trường</h1>
                    </div>
                    <div class="column desc">
                        <p>Tổ chức sinh nhật, đám tiệc, rộng rãi thoáng mát</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_hall_contact">
            <div class="container is-max-desktop" style="max-width: 750px">
                <h2 class="hall_title">Đặc Tiệc - Sinh Nhật - Liên Hoan - Đám Cưới</h2>
                <p class="hall_desc">Nhà nghỉ của chúng tôi mang đến một không gian ấm cúng và tiện nghi. Được trang bị đầy đủ tiện ích hiện đại du khách có thể thưởng thức kỳ nghỉ êm đềm, nơi sự thư giãn, gặp gỡ tinh tế.</p>
                <div class="hall_contact">
                    <a class="button" href="tel:0373496609">Đặt tiệc ngay!</a>
                    <a href="/lien-he-chung-toi" class="hall_contact__phone">
                        <span class="material-icons">call</span>
                        <p>Liên hệ</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="content_hall_detail">
            <div class="container is-max-desktop">
                <div class="columns is-multiline">
                    <div class="column is-one-third-tablet is-full-mobile">
                        <img src="/assets/images/hall/hall_detail_1.png">
                        <h3>Sân khấu</h3>
                        <p>Nhà nghỉ của chúng tôi mang đến một không gian ấm cúng và tiện nghi.</p>
                        <span>30 mét vuông</span>
                    </div>
                    <div class="column is-one-third-tablet is-full-mobile">
                        <img src="/assets/images/hall/hall_detail_2.png">
                        <h3>Quần lễ tân</h3>
                        <p>Nhà nghỉ của chúng tôi mang đến một không gian ấm cúng và tiện nghi.</p>
                        <span>Phục vụ 24/7</span>
                    </div>
                    <div class="column is-one-third-tablet is-full-mobile">
                        <img src="/assets/images/hall/hall_detail_3.png">
                        <h3>Cổng hội trường</h3>
                        <p>Nhà nghỉ của chúng tôi mang đến một không gian ấm cúng và tiện nghi.</p>
                        <span>Thoải mái check-in</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
