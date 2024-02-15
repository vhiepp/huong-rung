@extends('master')

@section('content')
    <div id="content">
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
    </div>
@endsection
