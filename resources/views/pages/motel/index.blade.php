@extends('master')

@section('head')
    <link rel="stylesheet" href="/assets/css/{{$cssVersion}}/motel.css" />
@endsection

@section('content')
    <div id="content">
        <div class="content_motel_intro" style="overflow: hidden">
            <div class="container is-max-widescreen">
                <div class="columns motel_intro_sub ">
                    <div class="column is-half-tablet is-two-fifths-desktop motel_intro">
                        <h1>Nhà nghỉ</h1>
                        <h5>Phòng đơn - Phòng đôi</h5>
                        <p class="desc">Nhà nghỉ của chúng tôi mang đến một không gian ấm cúng và tiện nghi. Được trang bị đầy đủ tiện ích hiện đại du khách có thể thưởng thức kỳ nghỉ của mình.</p>
                        <div class="motel_contact">
                            <a class="button" onclick="gtag_report_conversion('tel:02946500999')">Đặt phòng ngay!</a>
                            <a href="/lien-he-chung-toi" class="motel_contact__phone">
                                <span class="material-icons">call</span>
                                <p>Liên hệ</p>
                            </a>
                        </div>
                    </div>
                    <div class="column is-half-tablet is-offset-1-desktop is-two-fifths-desktop">
                        <div class="motel_intro__img">
                            <img src="/assets/images/motel/intro/1.jpg" class="img-1">
                            <img src="/assets/images/motel/intro/2.jpg" class="img-2">
                            <img src="/assets/images/motel/intro/3.jpg" class="img-3">
                            <img src="/assets/images/motel/intro/4.jpg" class="img-4">
                            <img src="/assets/images/motel/intro/5.jpg" class="img-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_motel_section_img">
            <div class="container is-max-widescreen">
                <div class="columns is-desktop is-variable is-0-mobile is-0-tablet">
                    <div class="column is-two-thirds-desktop hot_pot_left_img">
                        <img src="/assets/images/motel/motel_section_1.png">
                    </div>
                    <div class="column">
                        <div class="columns is-mobile is-multiline hot_pot_right_img is-variable is-0-mobile is-0-tablet">
                            <div class="column is-half-mobile is-full-desktop">
                                <img src="/assets/images/motel/motel_section_2.png">
                            </div>
                            <div class="column is-half-mobile is-full-desktop">
                                <img src="/assets/images/motel/motel_section_3.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_motel_detail img_left">
            <div class="container is-max-widescreen">
                <div class="columns">
                    <div class="column is-two-fifths motel_detail">
                        <h3 style="text-align: center" class="is-hidden-tablet">Phòng đơn</h3>
                        <img src="/assets/images/motel/motel_detail_1.png">
                    </div>
                    <div class="column motel_detail">
                        <h3 class="is-hidden-mobile">Phòng đơn</h3>
                        <p>Ấm cúng và tiện nghi, hoàn hảo cho du khách một mình hoặc cặp đôi muốn tận hưởng không gian riêng tư.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-two-fifths motel_detail">
                        <h3 style="text-align: center" class="is-hidden-tablet">Nhà vệ sinh riêng</h3>
                        <img src="/assets/images/motel/motel_detail_2.png">
                    </div>
                    <div class="column motel_detail">
                        <h3 class="is-hidden-mobile">Nhà vệ sinh riêng</h3>
                        <p>Tận hưởng sự thoải mái, vệ sinh và riêng tư.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_motel_detail img_right">
            <div class="container is-max-widescreen">
                <div class="columns">
                    <div class="column motel_detail">
                        <h3>Phòng đôi</h3>
                        <p>Không gian ấm cúng và tiện nghi. Được trang bị đầy đủ tiện ích hiện đại du khách có thể thưởng thức kỳ nghỉ êm đềm.</p>
                    </div>
                    <div class="column is-two-fifths motel_detail">
                        <img src="/assets/images/motel/motel_detail_3.png">
                    </div>
                </div>
                <div class="columns">
                    <div class="column motel_detail">
                        <h3>Nhà vệ sinh lớn</h3>
                        <p>Rộng rãi, vệ sinh sạch sẽ, có bồn tắm.</p>
                    </div>
                    <div class="column is-two-fifths motel_detail">
                        <img src="/assets/images/motel/motel_detail_4.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
