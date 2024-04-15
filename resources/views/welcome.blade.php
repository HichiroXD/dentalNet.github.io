<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0px
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-sm {
            border-radius: 0.125rem
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #FF2D20
        }

        .object-cover {
            object-fit: cover
        }

        .object-top {
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-semibold {
            font-weight: 600
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8)
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
            }
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-rGSgTYUUCw6VFzYQp7c3NwkGXy2/KIGekvV4aAZ9ZuHcEoY0ykgN7mzf1bC+J4sXxu/eMHsfoEWiu7kVjF6TvA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/2c018cead1.js" crossorigin="anonymous"></script>

</head>

<body class="antialiased">
    <div class="bg-gray-50 text-black/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                                    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                                        <span class="self-center text-2xl font-semibold whitespace-nowrap">DentalNet</span>
                                    </a>
                                    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                                        <button type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Get
                                            started</button>
                                        <button data-collapse-toggle="navbar-sticky" type="button"
                                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                            aria-controls="navbar-sticky" aria-expanded="false">
                                            <span class="sr-only">Open main menu</span>
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 17 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M1 1h15M1 7h15M1 13h15" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                                        <ul
                                            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                                    aria-current="page">Home</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">About</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Services</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                                    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                                        <span class="self-center text-2xl font-semibold whitespace-nowrap">DentalNet</span>
                                    </a>
                                    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                                        <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Get
                                        started</button>
                                        <button data-collapse-toggle="navbar-sticky" type="button"
                                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                        aria-controls="navbar-sticky" aria-expanded="false">
                                        <span class="sr-only">Open main menu</span>
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 17 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 1h15M1 7h15M1 13h15" />
                                    </svg>
                                </button>
                            </div>
                            @auth
                                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                                        <ul
                                            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                                    aria-current="page">Home</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">About</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Services</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

    {{-- <main class="mt-6"> --}}
        {{-- barra de navegacion --}}
        <header>
            <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
                {{-- <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                                        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                                            <span class="self-center text-2xl font-semibold whitespace-nowrap">DentalNet</span>
                                        </a>
                                        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                                            <button type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Get
                                                started</button>
                                            <button data-collapse-toggle="navbar-sticky" type="button"
                                                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                                aria-controls="navbar-sticky" aria-expanded="false">
                                                <span class="sr-only">Open main menu</span>
                                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 17 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M1 1h15M1 7h15M1 13h15" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                                            <ul
                                                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                                        aria-current="page">Home</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">About</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Services</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}
            </nav>
        </header>

        <main>
            {{-- Seccion 1:hero /  intro section imagen principal --}}
            <div class="grid grid-cols-2 gap-4 bg-my-gray p-16 mt-16">
                <div class="col-start-1">
                    <p class="font-ubuntu font-bold text-2xl text-pretty"> Ofrecemos un servicio de alta calidad </p>
                    <p class="font-">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quos natus eius voluptatum
                    </p>
                    <div class="grid grid-cols-2 pt-16">
                        <form action="#" method="POST">
                            @csrf <!-- Token CSRF para proteger tu formulario -->
                            <button
                                class="font-ubuntu bg-my-blue hover:bg-blue-700 text-white font-bold py-2 px-6 rounded shadow-md">
                                Comenzar
                            </button>
                        </form>
                        <form action="#" method="POST">
                            @csrf <!-- Token CSRF para proteger tu formulario -->
                            <button
                                class="font-ubuntu rounded-md font-bold py-2 px-6  border
                                                    hover:bg-my-blue text-black  border-blue-900">
                                Leer más
                            </button>
                        </form>
                    </div>

                </div>
                <div class="">
                    <img src="{{ asset('images/dentist-hero.png') }}" alt="dentista profesional" class="">
                </div>
            </div>

            {{-- Seccion 2: Primera franja | Llamada telefonica | Agenda tu cita | Consuta --}}
            <div class="grid grid-cols-4 bg-my-blue
                                text-white">
                <div class="col-start-1 mt-12 pl-4">
                    <h1 class="font-ubuntu font-bold text-2xl">¿Cuáles son nuestros servicios?</h1>
                    <p>sigue los siguientes pasos
                    <p>
                </div>



                {{-- Targetas  --}}
                <div
                    class="rounded-md overflow-hidden border-4 shadow-lg hover:border-my-skyblue  transition duration-300 bg-white m-8 ">
                    <div class=" px-10 py-4">
                        <svg class="fill-current text-slate-700  w-10 h-10 ml-7" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="">
                            <path class=""stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        <div
                            class="font-ubuntu  text-lg w-full text-slate-700
                                            flex justify-center items-center">
                            <h1>Tu estado en tiempo real</h1>
                        </div>
                    </div>
                </div>

                {{-- Targetas  2  --}}
                <div
                    class="rounded-md overflow-hidden border-4 shadow-lg hover:border-my-skyblue  transition duration-300 bg-white m-8 ">
                    <div class=" px-10 py-4">
                        <svg class="stroke-current text-slate-700  w-10 h-10 ml-7" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>

                        <div
                            class="font-ubuntu  text-lg w-full text-slate-700
                                            flex justify-center items-center">
                            <h1>Agenda tu cita</h1>
                        </div>
                    </div>
                </div>

                {{-- Targetas 3  --}}
                <div
                    class="rounded-md overflow-hidden border-4 shadow-lg hover:border-my-skyblue  transition duration-300 bg-white m-8 ">
                    <div class=" px-10 py-4">
                        <svg class="stroke-current text-slate-700  w-10 h-10 ml-7" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>

                        </svg>
                        <div
                            class="font-ubuntu  text-lg w-full text-slate-700
                                            flex justify-center items-center">
                            <h1>Sistema de recetas</h1>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Seccion 3: Que es lo que ofrecemos  --}}
            <div class="font-ubuntu grid grid-cols-2 bg-white mx-auto pl-4  p-4 ">
                <div class="pt-16 text-center bg-my-gray  rounded-br-2xl">
                    <h1 class="text-2xl">"Un dia sin sonreir es un dia perdido"</h1>
                    <p>-Charles Chaplin</p>
                </div>
                <div class="col-start-2 gap-8 mx-4">
                    <h1 class="text-2xl mb-4 "> Nosotros te garantizamos</h1>

                    <ul class="gap-4">
                        <li class="font-bold text-slate-700">
                            <svg class="w-6 h-6 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li class="font-bold text-slate-700">
                            <svg class="w-6 h-6 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li class="font-bold text-slate-700">
                            <svg class="w-6 h-6 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li class="font-bold text-slate-700">
                            <svg class="w-6 h-6 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li class="font-bold text-slate-700">
                            <svg class="w-6 h-6 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li class="font-bold text-slate-700">
                            <svg class="w-6 h-6 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>

                    </ul>
                </div>

            </div>

            {{-- Seccion 4: Que es lo que nos hace especial --}}
            <div class="font-ubuntu">
                <div class="grid grid-cols-2  mt-2 mx-6">
                    <h1 class="font-bold text-2xl">¿Qué nos hace</h1>
                    <h1 class="font-bold text-3xl col-start-1">especiales?</h1>
                    <h1 class="col-start-2">Futuro Claves</h1>
                </div>
                <div class="grid grid-cols-3  mt-2">


                    {{-- Targetas  --}}
                    <div
                        class="rounded-md bg-my-gray p-4 rounded-lg shadow-md transform hover:scale-105 transition duration-300  m-8 ">
                        <div class=" px-10 py-4">
                            <svg class="fill-current text-slate-700  w-10 h-10 ml-7 text-center"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="">
                                <path class=""stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div
                                class="font-ubuntu  text-lg w-full text-slate-700
                                            flex justify-center items-center">
                                <h1 class="text-bold text-center">Tu estado en tiempo real</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    {{-- Targetas  --}}
                    <div
                        class="rounded-md bg-my-gray p-4 rounded-lg shadow-md transform hover:scale-105 transition duration-300  m-8 ">
                        <div class=" px-10 py-4">
                            <svg class="fill-current text-slate-700  w-10 h-10 ml-7 text-center"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="">
                                <path class=""stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div
                                class="font-ubuntu  text-lg w-full text-slate-700
                                            flex justify-center items-center">
                                <h1 class="text-bold text-center">Tu estado en tiempo real</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    {{-- Targetas  --}}
                    <div
                        class="rounded-md bg-my-gray p-4 rounded-lg shadow-md transform hover:scale-105 transition duration-300  m-8 ">
                        <div class=" px-10 py-4">
                            <svg class="fill-current text-slate-700  w-10 h-10 ml-7 text-center"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="">
                                <path class=""stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div
                                class="font-ubuntu  text-lg w-full text-slate-700
                                            flex justify-center items-center">
                                <h1 class="text-bold text-center">Tu estado en tiempo real</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    {{-- Targetas  --}}
                    <div
                        class="rounded-md bg-my-gray p-4 rounded-lg shadow-md transform hover:scale-105 transition duration-300  m-8 ">
                        <div class=" px-10 py-4">
                            <svg class="fill-current text-slate-700  w-10 h-10 ml-7 text-center"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="">
                                <path class=""stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div
                                class="font-ubuntu  text-lg w-full text-slate-700
                                            flex justify-center items-center">
                                <h1 class="text-bold text-center">Tu estado en tiempo real</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    {{-- Targetas  --}}
                    <div
                        class="rounded-md bg-my-gray p-4 rounded-lg shadow-md transform hover:scale-105 transition duration-300  m-8 ">
                        <div class=" px-10 py-4">
                            <svg class="fill-current text-slate-700  w-10 h-10 ml-7 text-center"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="">
                                <path class=""stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div
                                class="font-ubuntu  text-lg w-full text-slate-700
                                            flex justify-center items-center">
                                <h1 class="text-bold text-center">Tu estado en tiempo real</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    {{-- Targetas  --}}
                    <div
                        class="rounded-md bg-my-gray p-4 rounded-lg shadow-md transform hover:scale-105 transition duration-300  m-8 ">
                        <div class=" px-10 py-4">
                            <svg class="fill-current text-slate-700  w-10 h-10 ml-7 text-center"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="">
                                <path class=""stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div
                                class="font-ubuntu  text-lg w-full text-slate-700
                                            flex justify-center items-center">
                                <h1 class="text-bold text-center">Tu estado en tiempo real</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                </div>
            </div>

            </div>
            </div>

            {{-- Seccion 5: Franja motivadora --}}
            <div class="grid grid-cols-1 bg-my-blue w-full h-80 text-center text-white font-ubutu">
                <h1 class="pt-8 text-3xl">Let us bighten Your Smile!</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Cumque fugit distinctio sunt fugiat dolor sequi nisi beatae
                    officiis, ratione consectetur fuga pariatur. Earum dignissimos distinctio vitae nulla
                    necessitatibus, quidem itaque.
                <p>
                <form action="#" method="POST">
                    @csrf <!-- Token CSRF para proteger tu formulario -->
                    <button
                        class="font-ubuntu bg-my-blue hover:bg-blue-700 text-white font-bold py-2 px-6 rounded shadow-md border ">
                        Comenzar
                    </button>
                </form>

            </div>

            {{-- Seccion 6: Quienes somos --}}
            <div class="grid grid-cols-2 mt-10 p-10 font-ubuntu ">
                <h1 class="text-4xl text-start font-bold"> Quienes somos</h1>
                <h1 class="font-bold text-xl"> Nuestra gloriosa historia</h1>
                <div class="">
                    <img src="{{ asset('images/quienes-somos.png') }}" alt="quienes somos" class="w-80 h-auto">
                </div>
                <div class="col-start-2">
                    <div class="bg-my-gray p-6 rounded-md border-2">
                        <h1 class="text-bold"> Nuestra Historia </h1>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id porta velit, at porttitor
                        justo. Curabitur a fermentum ipsum. Ut id purus vel libero fringilla vehicula sed ac lectus.
                        Fusce at lobortis velit, at congue magna. Aenean a mauris diam. Sed ac auctor ex. Praesent
                        aliquam sagittis lectus, et interdum est elementum eget.
                    </div>
                </div>
            </div>

            {{-- Seccion 7: Conoce a nuestros doctores --}}
            <div class="grid grid-col-4 mx-8">
                <div class="grid grid-cols-2  mt-10">
                    <h1 class="text-2xl text-bold">Conoce a nuestros doctores</h1>
                </div>

                <div class="grid grid-cols-4">

                    <div
                        class="rounded-md col-start-1 bg-my-gray p-4 shadow-md transform hover:scale-105 transition duration-300  m-8 ">
                        <div class=" px-10 py-4">
                            <svg class="fill-current text-slate-700  w-10 h-10 ml-7 text-center"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="">
                                <path class=""stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div
                                class="font-ubuntu  text-lg w-full text-slate-700
                                            flex justify-center items-center">
                                <h1 class="text-bold text-center">Tu estado en tiempo real</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div
                        class="rounded-md col-start-2 bg-my-gray p-4 shadow-md transform hover:scale-105 transition duration-300  m-8 ">
                        <div class=" px-10 py-4">
                            <svg class="fill-current text-slate-700  w-10 h-10 ml-7 text-center"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="">
                                <path class=""stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div
                                class="font-ubuntu  text-lg w-full text-slate-700
                                        flex justify-center items-center">
                                <h1 class="text-bold text-center">Tu estado en tiempo real</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div
                        class="rounded-md col-start-3 bg-my-gray p-4 shadow-md transform hover:scale-105 transition duration-300  m-8 ">
                        <div class=" px-10 py-4">
                            <svg class="fill-current text-slate-700  w-10 h-10 ml-7 text-center"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="">
                                <path class=""stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div
                                class="font-ubuntu  text-lg w-full text-slate-700
                                    flex justify-center items-center">
                                <h1 class="text-bold text-center">Tu estado en tiempo real</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div
                        class="rounded-md col-start-4 bg-my-gray p-4 shadow-md transform hover:scale-105 transition duration-300  m-8 ">
                        <div class=" px-10 py-4">
                            <svg class="fill-current text-slate-700  w-10 h-10 ml-7 text-center"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="">
                                <path class=""stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <div
                                class="font-ubuntu  text-lg w-full text-slate-700
                                flex justify-center items-center">
                                <h1 class="text-bold text-center">Tu estado en tiempo real</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                </div>




                {{-- Seccion 8: Testimonios de nuestros clientes | Carrusel --}}
                <div class="grid grid-cols-2 bg-my-blue  w-full h-80 font-ubuntu text-white ">
                    <h1> Aca va una imagen</h1>
                    <div class="col-start-2  container mx-auto my-auto">
                        <h1 class="text-center text-2xl"> ¿Qué es lo que nuestros clientes piensan de nosotros?</h1>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex maiores porro cum quae officia!
                            Voluptatem neque itaque quos, beatae fugiat placeat corporis modi laudantium quaerat ab
                            asperiores
                            ratione quidem quibusdam!</p>
                    </div>

                </div>

                {{-- Seccion 9: Formulario de contacto --}}
                <div class="grid grid-cols-2 bg-white m-10 ">
                    <div class="col-start-1">
                        <h1 class="text-center mx-auto">Formulario de contacto</h1>
                        {{-- <img class="w-80 h-full "src="/images/formulario-imagen.png" alt="Imagen del formulario de contacto" /> --}}
                    </div>

                    <div class="col-start-2 font-ubuntu">
                        <div class="max-w-md mx-auto">
                            <h1>Formulario de contacto</h1>
                            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                              <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                  Nombre
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Nombre">
                              </div>
                              <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                  Teléfono
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="tel" placeholder="Teléfono">
                              </div>
                              <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                  Correo Electrónico
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Correo Electrónico">
                              </div>
                              <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                                  Mensaje
                                </label>
                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Mensaje"></textarea>
                              </div>
                              <div class="mb-4">
                                <input class="mr-2 leading-tight" type="checkbox" id="accept">
                                <label class="text-gray-700 text-sm font-bold mb-2" for="accept">
                                  Acepto las políticas
                                </label>
                              </div>
                              <form action="#" method="POST">
                                @csrf <!-- Token CSRF para proteger tu formulario -->
                                <button
                                    class="font-ubuntu bg-my-blue hover:bg-blue-700 text-white font-bold py-2 px-6 rounded shadow-md mx-auto my-auto">
                                    enviar
                                </button>
                            </form>
                              </div>
                            </form>
                          </div>

                    </div>

                </div>
        </main>

    </main>

    <footer class=" bg-my-blue text-white">
        {{-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) --}}
        <div class="grid grid-cols-2 h-40 w-full bg-my-blue mt-10">
            <div class="mt-4 px-4">
                     <svg width="40" height="" viewBox="0 0 2170 2076" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1997.5 641.547C1926 499.547 1853.94 407.192 1743 309.047C1611.95 204.824 1543.15 171.824 1419 128.547C1156.44 62.0113 1002.95 59.0668 708.002 169.547C385.071 331.031 135.199 638.406 149.002 1097.54C162.804 1556.68 549.9 1911.71 944.002 1986.04C1459.82 2053.19 1822.79 1784.03 1980.21 1468.69C1987.32 1454.06 1994.25 1439.18 2001 1424.04C1994.53 1439.01 1987.59 1453.9 1980.21 1468.69C1776.93 1887.03 1427.59 2098.2 944.002 2074.05C280.881 1989.84 25.0016 1494.54 0.00156866 1090.04C-0.719567 614.609 247.262 259.216 607.502 92.0467C962.502 -70.4533 1327 11.5468 1508 113.547C1756.42 256.518 1866.42 369.008 1997.5 641.547Z" fill="#ffffff"/>
                        <path d="M2019.5 704.547L2002 801.547L1909 817.547L2004.5 833.547L2019.5 926.547L2036 833.547L2132 817.547L2036 799.047L2019.5 704.547Z" fill="#ffffff"/>
                        <path d="M1838.75 515.547L1834.36 539.578L1811 543.542L1834.98 547.506L1838.75 570.547L1842.89 547.506L1867 543.542L1842.89 538.959L1838.75 515.547Z" fill="#ffffff"/>
                        <path d="M2102.4 488.547L2091.88 547.97L2036 557.772L2093.39 567.574L2102.4 624.547L2112.32 567.574L2170 557.772L2112.32 546.439L2102.4 488.547Z" fill="#ffffff"/>
                        <path d="M968.002 1436.05C938.448 1602.5 956.872 1860 962.196 1909.73C962.37 1911.35 962.498 1912.42 962.573 1913.01C962.679 1913.73 962.673 1913.79 962.573 1913.01C962.438 1912.09 962.123 1910.1 961.588 1907.41L937.501 1786.05L922.502 1669.55C913.752 1582.81 914.642 1534.21 927.502 1447.55C934.975 1400.09 943.556 1374.2 963.659 1335.73C966.511 1330.27 969.947 1325.13 973.813 1320.34L981.186 1311.2C988.972 1301.54 998.743 1293.68 1009.84 1288.13L1010.72 1287.69C1016.22 1284.94 1022.03 1282.84 1028.02 1281.46C1044.56 1277.62 1061.89 1279.28 1077.41 1286.17L1085 1289.54C1090.99 1292.21 1096.7 1295.45 1102.05 1299.23L1113.53 1307.33C1117.51 1310.14 1121.27 1313.23 1124.8 1316.59L1144.58 1335.41C1148.52 1339.16 1152.15 1343.23 1155.43 1347.57L1184.5 1386.05L1220.5 1443.55L1250 1503.05L1279.5 1572.05L1304 1641.05L1329 1716.05L1253.5 1545.55L1209.5 1459.55L1166.06 1393.71C1162.69 1388.61 1158.87 1383.83 1154.64 1379.44L1132.15 1356.07C1125.75 1349.42 1118.46 1343.69 1110.49 1339.04L1095.11 1330.07C1081.75 1322.28 1066.18 1319.14 1050.84 1321.16C1029.77 1323.93 1011.12 1336.15 1000.16 1354.36L992.549 1366.99C989.523 1372.02 986.946 1377.3 984.846 1382.78L976.501 1404.55L968.002 1436.05Z" fill="#ffffff"/>
                        <path d="M1209.5 578.047C1209.5 578.047 1104.5 608.547 1003 588.047C1031.44 606.72 1051.93 616.144 1105.5 629.047C1142 635.047 1175.29 635.838 1217.5 632.047C1270.96 625.015 1301.07 619.958 1355 609.047C1429.35 599.267 1473.87 589.503 1512 634.547C1553 707.047 1564.12 788.898 1539.5 1038.05C1529.34 1112.78 1521.79 1154.43 1507 1228.55C1492.8 1287.26 1486.29 1321.12 1468 1380.55C1449.71 1439.97 1361.41 1712.13 1369.5 1695.05C1470.07 1502.3 1520.55 1388.61 1593 1169.05C1602.8 1137.77 1607.87 1120.26 1616.5 1089.05C1626.21 1049.03 1631.51 1025.98 1640.5 983.047C1653.64 912.649 1659.41 872.547 1666 799.547C1667.68 757.37 1667.53 733.723 1666 691.547C1658.2 630.917 1653 611.054 1643 588.047C1629.14 554.864 1617.52 539.414 1590.5 517.047C1558.78 498.264 1537.97 492.871 1495 493.047C1454.28 495.71 1428.82 500.281 1373.5 520.047C1310.98 545.186 1275.17 558.051 1209.5 578.047Z" fill="#ffffff"/>
                        <path d="M806.001 541.547C866.501 605.047 971.501 700.547 1110.5 713.047C1075.49 717.307 1054.69 717.63 1015.5 714.547C939.824 708.112 897.396 693.712 821.501 654.047C745.594 612.891 704.411 591.828 658.501 594.547C626.341 604.056 607.84 611.078 572.501 645.547C533.791 693.513 522.545 728.46 514.501 800.047C512.424 903.209 528.392 967.837 560.501 1084.55L657.501 1342.55L897.501 1889.05C765.506 1690.66 686.162 1583.14 575.501 1357.55C462.805 1102.9 422.623 976.099 411.501 805.547C406.142 686.67 417.012 629.938 462.001 554.547C515.501 477.047 555.484 454.482 643.001 455.047C701.348 460.124 737.776 483.061 806.001 541.547Z" fill="#ffffff"/>
                    </svg>


            </div>
            <div>
                <h1>Footer</h1>
            </div>
            <div>
                <h1>Footer</h1>
            </div>
        </div>
        <div class="bg-my-skyblue font-ubuntu  my-auto py-2">
            <h1 class="text-center my-auto mx-auto  text-sm"> &copy; DentalNet 2024, Todos los derechos reservados</h1>
        </div>
    </footer>
</div>
    </div>
    </div>

</body>

</html>
