

@isset($seo)
    <meta name="robots" content="index, follow">
    <!-- Primary Meta Tags -->
<meta name="title" content="{{$seo['title']}}" />
<meta name="description" content="{{$seo['description']}}" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="{{$seo['url']}}" />
<meta property="og:title" content="{{$seo['title']}}" />
<meta property="og:description" content="{{$seo['description']}}" />
<meta property="og:image" content="{{$seo['image']}}" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="{{$seo['url']}}" />
<meta property="twitter:title" content="{{$seo['title']}}" />
<meta property="twitter:description" content="{{$seo['description']}}" />
<meta property="twitter:image" content="{{$seo['image']}}" />

@endisset
