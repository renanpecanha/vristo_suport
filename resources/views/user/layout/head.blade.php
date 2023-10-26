<meta charset='utf-8' />
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<title>{{ config('app.name') }} - @yield('page_title')</title>

<meta name='viewport' content='width=device-width, initial-scale=1' />
<link rel="icon" type="image/svg" href="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/images/favicon.svg" />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
@include(config('custom.others.user_theme') . '.layout.css')
