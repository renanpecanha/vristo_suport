@if (isset($LoadScripts) && in_array('HighLight', $LoadScripts))
    <script src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/highlight.min.js"></script>
@endif

@if (isset($LoadScripts) && in_array('DataTables', $LoadScripts))
    <script src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/simple-datatables.js"></script>
@endif

@if (isset($LoadScripts) && in_array('InputMask', $LoadScripts))
    <script src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/alpine-mask.min.js"></script>
@endif

<script src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/perfect-scrollbar.min.js"></script>
<script defer src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/popper.min.js"></script>
<script defer src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/tippy-bundle.umd.min.js"></script>
<script defer src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/sweetalert.min.js"></script>
<script src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/alpine-collaspe.min.js"></script>
<script src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/alpine-persist.min.js"></script>
<script defer src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/alpine-ui.min.js"></script>
<script defer src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/alpine-focus.min.js"></script>
<script defer src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/alpine.min.js"></script>
@include(config('custom.others.user_theme') . '.components.notifications')
<script src="{{ url('') }}/_{{ config('custom.others.user_theme') }}/assets/js/custom.js"></script>
