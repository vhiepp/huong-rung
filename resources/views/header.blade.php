<header id="header">
    <div class="header container is-max-widescreen o-hidden">
        <div class="header_left">
            <div class="brand-name">
{{--                <a href="/" style="color: #4a4a4a;">Hương Rừng <span style="color: #50D100; font-size: 22px;">HomeStay</span></a>--}}
                <a href="/">Hương Rừng</a>
            </div>
        </div>
        <div class="header_right">
            <ul class="navigate is-desktop is-hidden-mobile">
                <li @isset($activePage) @if($activePage == 0) class="active" @endif @endisset><a href="/">Trang chủ</a></li>
                <li @isset($activePage) @if($activePage == 1) class="active" @endif @endisset><a href="/khu-hoi-truong-to-chuc-tiec">Hội trường</a></li>
{{--                <li @isset($activePage) @if($activePage == 2) class="active" @endif @endisset><a href="/khu-phong-lanh">Phòng lạnh</a></li>--}}
                <li @isset($activePage) @if($activePage == 3) class="active" @endif @endisset><a href="/khu-san-vuon">Sân vườn</a></li>
                <li @isset($activePage) @if($activePage == 4) class="active" @endif @endisset><a href="/mon-an-noi-bat">Món ăn</a></li>
                <li @isset($activePage) @if($activePage == 5) class="active" @endif @endisset><a href="/nha-nghi">Nhà nghỉ</a></li>
                <li @isset($activePage) @if($activePage == 6) class="active" @endif @endisset><a href="/lien-he-chung-toi">Liên hệ</a></li>
            </ul>
            <div class="menu-icon is-mobile is-hidden-tablet">
                <span class="material-icons">menu</span>
            </div>
        </div>
        <div class="backdrop-navigate-mobile is-mobile is-hidden-tablet"></div>
        <div class="navigate-mobile is-mobile is-hidden-tablet">
            <div class="navigate-mobile_top">
                <div class="close-icon">
                    <span class="material-icons">close</span>
                </div>
                <div class="brand-name">
                    <a href="/">Hương Rừng</a>
                </div>
            </div>
            <div class="navigate-mobile_bottom">
                <ul>
                    <li @isset($activePage) @if($activePage == 0) class="active" @endif @endisset><a href="/">Trang chủ</a></li>
                    <li @isset($activePage) @if($activePage == 1) class="active" @endif @endisset><a href="/khu-hoi-truong-to-chuc-tiec">Hội trường</a></li>
                    {{--                <li @isset($activePage) @if($activePage == 2) class="active" @endif @endisset><a href="/khu-phong-lanh">Phòng lạnh</a></li>--}}
                    <li @isset($activePage) @if($activePage == 3) class="active" @endif @endisset><a href="/khu-san-vuon">Sân vườn</a></li>
                    <li @isset($activePage) @if($activePage == 4) class="active" @endif @endisset><a href="/mon-an-noi-bat">Món ăn</a></li>
                    <li @isset($activePage) @if($activePage == 5) class="active" @endif @endisset><a href="/nha-nghi">Nhà nghỉ</a></li>
                    <li @isset($activePage) @if($activePage == 6) class="active" @endif @endisset><a href="/lien-he-chung-toi">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
