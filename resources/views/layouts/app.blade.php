<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@200..800&family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#1B3B6F",
                        "primary-container": "#1B3B6F",
                        "on-primary": "#ffffff",
                        secondary: "#755b00",
                        "secondary-container": "#fccc38",
                        "on-secondary": "#ffffff",
                        tertiary: "#0c2a35",
                        background: "#f7f9fc",
                        surface: "#f7f9fc",
                        "surface-container-low": "#f2f4f7",
                        "surface-container-highest": "#e0e3e6",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#43474f",
                        "outline-variant": "#c4c6d1",
                        "primary-fixed": "#d8e2ff",
                        "secondary-fixed": "#ffdf90",
                        "on-primary-fixed": "#001a41"
                    },
                    fontFamily: {
                        headline: ["Newsreader", "serif"],
                        body: ["Work Sans", "sans-serif"]
                    },
                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.25rem",
                        xl: "0.5rem",
                        full: "0.75rem",
                        "round-four": "1rem"
                    }
                }
            }
        }
    </script>

    <!-- ✅ LOCAL CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Anandham Mindcare Hospital</title>
</head>

<body class="bg-background text-on-surface font-body">

    @include('partials.header')

    <main>
        <!-- ✅ INTRO LOADER (HERE) -->
    <div id="intro-loader">
    
    <!-- CURTAIN -->
    <div class="curtain left"></div>
    <div class="curtain right"></div>

    <!-- CENTER CONTENT -->
    <div class="intro-inner">
        
        <div class="intro-logo">
            <div class="logo-glow"></div>
            <img src="{{ asset('assets/logo/hosp_logo.jpeg') }}" alt="Logo">
        </div>

        <h1 class="intro-text">
            <span>A</span><span>n</span><span>a</span><span>n</span><span>d</span><span>h</span><span>a</span><span>m</span>
            <span>&nbsp;</span>
            <span>M</span><span>i</span><span>n</span><span>d</span><span>c</span><span>a</span><span>r</span><span>e</span>
        </h1>

    </div>

    <!-- LIGHT SWEEP -->
    <div class="light-sweep"></div>

</div>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

</body>
</html>