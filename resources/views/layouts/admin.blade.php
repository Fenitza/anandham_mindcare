<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - Anandham Mindcare')</title>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,200;0,400;0,700;1,200;1,400;1,700&family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "on-primary": "#ffffff",
                "on-secondary-container": "#6f5600",
                "on-primary-fixed-variant": "#28467b",
                "tertiary-fixed-dim": "#aecbda",
                "error-container": "#ffdad6",
                "on-primary-container": "#8aa7e1",
                "error": "#ba1a1a",
                "background": "#f7f9fc",
                "secondary-container": "#fccc38",
                "on-primary-fixed": "#001a41",
                "inverse-on-surface": "#eff1f4",
                "on-error-container": "#93000a",
                "surface-container": "#eceef1",
                "surface-dim": "#d8dadd",
                "surface-container-highest": "#e0e3e6",
                "primary-container": "#1b3b6f",
                "surface-container-high": "#e6e8eb",
                "secondary-fixed-dim": "#f0c12c",
                "inverse-primary": "#acc7ff",
                "secondary": "#755b00",
                "primary": "#002555",
                "on-error": "#ffffff",
                "tertiary": "#0c2a35",
                "on-surface-variant": "#43474f",
                "surface-bright": "#f7f9fc",
                "on-tertiary": "#ffffff",
                "on-tertiary-fixed-variant": "#2f4a57",
                "outline-variant": "#c4c6d1",
                "on-tertiary-container": "#8fabba",
                "on-secondary-fixed-variant": "#584400",
                "tertiary-container": "#25404c",
                "on-secondary": "#ffffff",
                "on-background": "#191c1e",
                "surface-variant": "#e0e3e6",
                "secondary-fixed": "#ffdf90",
                "on-tertiary-fixed": "#001f2a",
                "on-surface": "#191c1e",
                "on-secondary-fixed": "#241a00",
                "surface-tint": "#415e94",
                "tertiary-fixed": "#cae7f6",
                "surface-container-low": "#f2f4f7",
                "surface": "#f7f9fc",
                "primary-fixed": "#d8e2ff",
                "primary-fixed-dim": "#acc7ff",
                "inverse-surface": "#2d3133",
                "outline": "#747780",
                "surface-container-lowest": "#ffffff"
              },
              fontFamily: {
                "headline": ["Newsreader", "serif"],
                "body": ["Work Sans", "sans-serif"],
                "label": ["Work Sans", "sans-serif"]
              },
              borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
            },
          },
        }
      </script>

    @stack('head')
</head>
<body class="bg-surface font-body text-on-surface flex min-h-screen">
    @include('partials.admin.nav')
    <main class="flex-1 ml-64 min-h-screen bg-surface relative">
        @include('partials.admin.header')
        <div class="dashboard-content">
            @yield('content')
        </div>
    </main>
    @stack('scripts')
</body>
</html>
