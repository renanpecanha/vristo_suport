@php $pageTitle = 'Contatos CPFs - Criar'; @endphp

@extends(config('custom.others.user_theme') . '.layout.index', ['LoadScripts' => ['InputMask']])
@section('page_title', $pageTitle)
@section('content')

    <div x-data="invoiceAdd">
        <div class="flex xl:flex-row flex-col gap-2.5">
            <div class="panel px-0 flex-1 py-6 ltr:xl:mr-6 rtl:xl:ml-12">
                <form method="POST" action="{{ route('contact.individual.insert') }}">
                    @csrf

                    <div class="flex justify-between flex-wrap px-6">
                        <div class="mb-6 lg:w-1/2 w-full">
                            <h5 class="md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light">{{ $pageTitle }}</h5>
                        </div>

                        <div class="lg:w-1/2 w-full lg:max-w-fit">
                            @include(config('custom.others.user_theme') . '.contact.individual.create-actions')
                        </div>
                    </div>

                    <hr class="border-[#e0e6ed] dark:border-[#1b2e4b] my-6">
                    @include(config('custom.others.user_theme') . '.contact.individual.create-data')

                    <hr class="border-[#e0e6ed] dark:border-[#1b2e4b] my-6">
                    @include(config('custom.others.user_theme') . '.contact.individual.create-address')

                </form>
            </div>
        </div>
    </div>

    <script></script>
@endsection
