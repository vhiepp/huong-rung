<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function __construct()
    {

    }

    public function index(): string
    {
        $metaTag = [
            'title' => 'Nhà hàng Khách sạn Hương Rừng HomeStay, Nhà hàng Trà Vinh, Khách sạn Trà Vinh',
            'description' => 'Chuyên phục vụ ăn uống, ẩm thực các món đặc trưng 3 miền. Nhận đặt tiệc liên hoan, sinh nhật,... Cho thuê phòng nghỉ cao cấp rộng rãi, thoáng mát, đầy đủ tiện nghi.',
            'url' => env('APP_URL'),
            'image' => env('APP_URL') . '/thumb/home-min.png'
        ];
        $data = ['activePage' => 0, 'cssVersion' => env('CSS_VERSION'), 'seo' => $metaTag];
        return view('pages.home', $data);
    }

    public function showHallPage(): string
    {
        $metaTag = [
            'title' => 'Hội Trường tổ chức tiệc | Nhà hàng Khách sạn Hương Rừng HomeStay, Nhà hàng Trà Vinh, Khách sạn Trà Vinh',
            'description' => 'Chuyên phục vụ ăn uống, ẩm thực các món đặc trưng 3 miền. Nhận đặt tiệc liên hoan, sinh nhật,... Cho thuê phòng nghỉ cao cấp rộng rãi, thoáng mát, đầy đủ tiện nghi.',
            'url' => env('APP_URL') . '/khu-hoi-truong-to-chuc-tiec',
            'image' => env('APP_URL') . '/thumb/home-min.png'
        ];
        $data = ['activePage' => 1, 'title' => 'Khu tiệc, hội trường', 'cssVersion' => env('CSS_VERSION'), 'seo' => $metaTag];
        return view('pages.restaurant.hall', $data);
    }

    public function showColdRoomPage(): string
    {
        $metaTag = [
            'title' => 'Phòng lạnh | Nhà hàng Khách sạn Hương Rừng HomeStay, Nhà hàng Trà Vinh, Khách sạn Trà Vinh',
            'description' => 'Chuyên phục vụ ăn uống, ẩm thực các món đặc trưng 3 miền. Nhận đặt tiệc liên hoan, sinh nhật,... Cho thuê phòng nghỉ cao cấp rộng rãi, thoáng mát, đầy đủ tiện nghi.',
            'url' => env('APP_URL') . '/khu-phong-lanh',
            'image' => env('APP_URL') . '/thumb/home-min.png'
        ];
        $data = ['activePage' => 2, 'title' => 'Khu phòng ăn phòng lạnh', 'cssVersion' => env('CSS_VERSION'), 'seo' => $metaTag];
        return view('pages.restaurant.cold-room', $data);
    }

    public function showGardenPage(): string
    {
        $metaTag = [
            'title' => 'Sân vườn | Nhà hàng Khách sạn Hương Rừng HomeStay, Nhà hàng Trà Vinh, Khách sạn Trà Vinh',
            'description' => 'Sân vườn rộng rãi, sạch sẽ, thoáng gió. Các Tum mái lá mát mẻ, cảm giác hòa mình với thiên nhiên. Chuyên phục vụ ăn uống, ẩm thực các món đặc trưng 3 miền. Nhận đặt tiệc liên hoan, sinh nhật,... Cho thuê phòng nghỉ cao cấp rộng rãi, thoáng mát, đầy đủ tiện nghi.',
            'url' => env('APP_URL') . '/khu-san-vuon',
            'image' => env('APP_URL') . '/thumb/home-min.png'
        ];
        $data = ['activePage' => 3, 'title' => 'Khu bàn ăn sân vườn', 'cssVersion' => env('CSS_VERSION'), 'seo' => $metaTag];
        return view('pages.restaurant.garden', $data);
    }

    public function showMenuPage(): string
    {
        $metaTag = [
            'title' => 'Thực đơn, món ăn, ẩm thực | Nhà hàng Khách sạn Hương Rừng HomeStay, Nhà hàng Trà Vinh, Khách sạn Trà Vinh',
            'description' => 'Chuyên phục vụ các món ăn, ẩm thực 3 miền. Với đầy đủ các nguyên vật liệu và cách chế biến. Nhân viên phục vụ nhiệt tình, chu đáo.',
            'url' => env('APP_URL') . '/mon-an-noi-bat',
            'image' => env('APP_URL') . '/thumb/food-min.png'
        ];
        $data = ['activePage' => 4, 'title' => 'Món ăn nổi bật', 'cssVersion' => env('CSS_VERSION'), 'seo' => $metaTag];
        return view('pages.restaurant.menu', $data);
    }

    public function showMotelPage(): string
    {
        $metaTag = [
            'title' => 'Nhà nghỉ Khách sạn Trà Vinh | Nhà hàng Khách sạn Hương Rừng HomeStay, Nhà hàng Trà Vinh, Khách sạn Trà Vinh',
            'description' => 'Nhà nghỉ của chúng tôi mang đến một không gian ấm cúng và tiện nghi. Được trang bị đầy đủ tiện ích hiện đại du khách có thể thưởng thức kỳ nghỉ của mình.',
            'url' => env('APP_URL') . '/nha-nghi',
            'image' => env('APP_URL') . '/thumb/motel-min.png'
        ];
        $data = ['activePage' => 5, 'title' => 'Nhà nghỉ khách sạn', 'cssVersion' => env('CSS_VERSION'), 'seo' => $metaTag];
        return view('pages.motel.index', $data);
    }

    public function showContactPage(): string
    {
        $metaTag = [
            'title' => 'Liên hệ chúng tôi | Nhà hàng Khách sạn Hương Rừng HomeStay, Nhà hàng Trà Vinh, Khách sạn Trà Vinh',
            'description' => 'Nhà nghỉ của chúng tôi mang đến một không gian ấm cúng và tiện nghi. Nhà hàng chuyên phục vụ ăn uống, ẩm thực các món đặc trưng 3 miền. Nhận đặt tiệc liên hoan, sinh nhật,... Phòng nghỉ cao cấp rộng rãi, thoáng mát, đầy đủ tiện nghi.',
            'url' => env('APP_URL') . '/lien-he-chung-toi',
            'image' => env('APP_URL') . '/thumb/home-min.png'
        ];
        $data = ['activePage' => 6, 'title' => 'Liên hệ chúng tôi, đặt phòng, đặt tiệc', 'cssVersion' => env('CSS_VERSION'), 'seo' => $metaTag];
        return view('pages.contact.index', $data);
    }
}
