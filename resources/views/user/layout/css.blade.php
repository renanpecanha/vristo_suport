@if (isset($LoadScripts) && in_array('HighLight', $LoadScripts))
    <link rel="stylesheet" href="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/css/highlight.min.css">
@endif

<link rel="stylesheet" type="text/css" media="screen" href="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/css/perfect-scrollbar.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/css/animate.css">
