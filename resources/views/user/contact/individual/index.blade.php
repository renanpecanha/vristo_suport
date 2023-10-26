@php $pageTitle = 'Contatos CPFs'; @endphp

@extends(config('custom.others.user_theme') . '.layout.index', ['LoadScripts' => ['DataTables', 'HighLight']])
@section('page_title', $pageTitle)
@section('content')

    <div x-data="miscellaneous">
        <div class="space-y-6">
            <div class="panel">
                <h5 class="md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light">{{ $pageTitle }}</h5>
                <div class="relative">
                    <div class="sm:absolute sm:top-0 sm:ltr:right-56 sm:rtl:left-56 sm:mb-0 mb-5">
                        <div class="mb-6 flex flex-wrap items-center justify-center gap-4 lg:justify-end">

                            @include(config('custom.others.user_theme') . '.contact.individual.index-actions')
                            @include(config('custom.others.user_theme') . '.contact.individual.index-colums')

                        </div>
                    </div>
                    <table id="myTable1" class="whitespace-nowrap"></table>
                </div>
            </div>

        </div>
    </div>


    @include(config('custom.others.user_theme') . '.contact.individual.index-scripts')


    <!-- Warning message -->
    <div class="flex items-center justify-center">
        <button type="button" class="btn btn-success" @click="showAlert(10)">Confirm</button>
    </div>

    <button type="button" class="hover:text-danger" @click="showAlert(10)">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
            <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path opacity="0.5"
                d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                stroke="currentColor" stroke-width="1.5"></path>
        </svg>
    </button>
@endsection
