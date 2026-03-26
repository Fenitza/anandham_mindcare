<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Anandham Mindcare Academy - Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "surface-tint": "#415e94",
              "primary-fixed-dim": "#acc7ff",
              "on-tertiary-container": "#8fabba",
              "on-primary-fixed": "#001a41",
              "primary-container": "#1b3b6f",
              "outline-variant": "#c4c6d1",
              "inverse-surface": "#2d3133",
              "inverse-primary": "#acc7ff",
              "tertiary-container": "#25404c",
              "surface-variant": "#e0e3e6",
              "on-secondary-container": "#6f5600",
              "on-surface": "#191c1e",
              "on-secondary": "#ffffff",
              "tertiary-fixed": "#cae7f6",
              "on-error": "#ffffff",
              "inverse-on-surface": "#eff1f4",
              "on-tertiary-fixed": "#001f2a",
              "on-surface-variant": "#43474f",
              "on-secondary-fixed": "#241a00",
              "on-primary-fixed-variant": "#28467b",
              "background": "#f7f9fc",
              "surface-container-high": "#e6e8eb",
              "outline": "#747780",
              "on-background": "#191c1e",
              "surface-container-lowest": "#ffffff",
              "on-primary-container": "#8aa7e1",
              "on-error-container": "#93000a",
              "surface-container-low": "#f2f4f7",
              "surface-container": "#eceef1",
              "surface-bright": "#f7f9fc",
              "secondary-fixed-dim": "#f0c12c",
              "tertiary": "#0c2a35",
              "surface-container-highest": "#e0e3e6",
              "on-tertiary-fixed-variant": "#2f4a57",
              "surface-dim": "#d8dadd",
              "error-container": "#ffdad6",
              "secondary-container": "#fccc38",
              "on-secondary-fixed-variant": "#584400",
              "on-primary": "#ffffff",
              "primary": "#002555",
              "secondary-fixed": "#ffdf90",
              "primary-fixed": "#d8e2ff",
              "on-tertiary": "#ffffff",
              "secondary": "#755b00",
              "surface": "#f7f9fc",
              "error": "#ba1a1a",
              "tertiary-fixed-dim": "#aecbda"
            },
            fontFamily: {
              "headline": ["Newsreader"],
              "body": ["Work Sans"],
              "label": ["Work Sans"]
            },
            borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
          },
        },
      }
    </script>
<style>
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }
      .perspective-border {
        border-left: 4px solid #755b00;
      }
      .ghost-border {
        border: 1px solid rgba(196, 198, 209, 0.15);
      }
    </style>
</head>
<body class="bg-background font-body text-on-surface antialiased">
<!-- SideNavBar Implementation -->
@include('partials.user.nav')
<!-- TopAppBar Implementation -->
@include('partials.user.header')
<!-- Main Canvas -->
<main class="ml-64 pt-28 px-12 pb-20 max-w-7xl">
@yield('content')
</main>
</body>
</html>
