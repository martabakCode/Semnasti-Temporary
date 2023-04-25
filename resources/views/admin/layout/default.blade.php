<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('dz.name') }} | @yield('title', $page_title ?? '')</title>

	{{-- <meta name="description" content="@yield('page_description', $page_description ?? 'asdasd')"/> --}}
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing/img/semnasti/favicon.svg') }}">
	
    {{-- Global Theme Styles (used by all pages) --}}
    @if(!empty(config('dz.public.pagelevel.css.'.$action))) 
        @foreach(config('dz.public.pagelevel.css.'.$action) as $style)
                <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach
    @endif	
    @if(!empty(config('dz.public.global.css'))) 
        @foreach(config('dz.public.global.css') as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach
    @endif	


    @yield('css')
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{!! url('/index'); !!}" class="brand-logo">
			@if(!empty($logo))
				<img class="logo-abbr" src="{{ asset($logo) }}" alt="">
			@else
                <img class="logo-abbr" src="{{ asset('landing/img/semnasti/favicon.svg') }}" alt="">
			@endif
			@if(!empty($logoText))
                <img class="logo-compact" src="{{ asset($logo) }}" alt="">
                {{-- <img class="brand-title" src="{{ asset($logoText) }}" alt=""> --}}
                <h4 class="brand-title"><?= $logoText ?></h4>
			@else
                <img class="logo-compact" src="{{ asset('landing/img/semnasti/favicon.svg') }}" alt="">
                {{-- <h4 class="logo-compact">SEMNASTI</h4>
                <img class="brand-title" src="{{ asset('landing/img/semnasti/favicon.svg') }}" alt=""> --}}
                <h4 class="brand-title">SEMNASTI</h4>
			@endif	
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        
		@include('admin.layout.elements.header')
		
		
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin.layout.elements.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        
		@include('admin.layout.elements.footer')
		
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

</body>
@include('admin.layout.elements.footer-scripts')
    <script>
        window.base_url = '{{ asset('/') }}';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        @if (session()->has('success'))
            Swal.fire({
                title: "Berhasil",
                html: '{!! session('success') !!}',
                icon: "success"
            })
        @endif

        @if (session()->has('error'))
            Swal.fire(
                "Gagal",
                `{{ session('error') }}`,
                "error"
            )
        @endif
    </script>
    @yield('script')
</html>

