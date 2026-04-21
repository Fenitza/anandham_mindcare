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

     <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary-fixed-dim": "#fdbc13",
                        "on-tertiary-fixed": "#261900",
                        "surface-container-highest": "#e0e3e6",
                        "surface-tint": "#415e94",
                        "on-tertiary": "#ffffff",
                        "on-surface": "#191c1e",
                        "on-error-container": "#93000a",
                        "outline-variant": "#c4c6d1",
                        "on-tertiary-container": "#d59d00",
                        "on-error": "#ffffff",
                        "tertiary-fixed": "#ffdea3",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#4f3800",
                        "on-secondary-fixed": "#002020",
                        "surface-container-low": "#f2f4f7",
                        "primary-fixed": "#d8e2ff",
                        "primary": "#002555",
                        "on-primary": "#ffffff",
                        "surface": "#f7f9fc",
                        "surface-container": "#eceef1",
                        "on-secondary-container": "#006e6e",
                        "secondary-fixed-dim": "#76d6d5",
                        "surface-variant": "#e0e3e6",
                        "secondary-fixed": "#93f2f2",
                        "inverse-on-surface": "#eff1f4",
                        "on-primary-fixed-variant": "#28467b",
                        "outline": "#747780",
                        "error-container": "#ffdad6",
                        "on-tertiary-fixed-variant": "#5d4200",
                        "inverse-primary": "#acc7ff",
                        "background": "#f7f9fc",
                        "on-background": "#191c1e",
                        "error": "#ba1a1a",
                        "on-surface-variant": "#43474f",
                        "inverse-surface": "#2d3133",
                        "tertiary": "#342300",
                        "secondary-container": "#90efef",
                        "surface-dim": "#d8dadd",
                        "surface-container-high": "#e6e8eb",
                        "primary-container": "#1b3b6f",
                        "on-primary-container": "#8aa7e1"
                    },
                    fontFamily: {
                        "headline": ["Newsreader", "serif"],
                        "body": ["Work Sans", "sans-serif"],
                        "label": ["Work Sans", "sans-serif"]
                    }
                }
            }
        }
    </script>


    <!-- ✅ LOCAL CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css?v1.0') }}">
    <link rel="stylesheet" href="{{ asset('css/hospital.css') }}">

    <title>Anandham Mindcare Foundation</title>
</head>

<body class="bg-background text-on-surface font-body">

    

    <main>
        <!-- ✅ INTRO LOADER (HERE) -->
   <div id="intro-loader">

    <div class="intro-bg"></div>
    <div class="noise"></div>
    <div class="particles"></div>

    <div class="intro-inner">

        <h1 class="intro-text">
            <span>A</span><span>n</span><span>a</span><span>n</span><span>d</span><span>h</span><span>a</span><span>m</span>
            <span class="gap"></span>
            <span>M</span><span>i</span><span>n</span><span>d</span><span>c</span><span>a</span><span>r</span><span>e</span>
        </h1>

        <p class="intro-sub">Mental Wellness • Clinical Excellence</p>

    </div>

    <div class="light-sweep"></div>
    <div class="light-sweep second"></div>

</div>
        @yield('content')
    </main>

  

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

</body>
</html>