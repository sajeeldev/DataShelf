<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('csv.png') }}" type="image/x-icon">
    <title>Welcome – {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        mono: ['JetBrains Mono', 'ui-monospace', 'monospace'],
                    },
                },
            },
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .mesh-surface {
            background-color: #070b14;
            background-image:
                radial-gradient(ellipse 90% 55% at 15% -10%, rgba(34, 211, 238, 0.28), transparent 55%),
                radial-gradient(ellipse 70% 45% at 85% 5%, rgba(139, 92, 246, 0.22), transparent 50%),
                radial-gradient(ellipse 55% 50% at 50% 110%, rgba(20, 184, 166, 0.18), transparent 55%),
                radial-gradient(ellipse 45% 35% at 100% 55%, rgba(59, 130, 246, 0.14), transparent 45%);
        }

        .mesh-surface--animate {
            animation: mesh-drift 20s ease-in-out infinite alternate;
        }

        @keyframes mesh-drift {
            0% {
                filter: hue-rotate(0deg) saturate(1);
            }

            100% {
                filter: hue-rotate(14deg) saturate(1.06);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .mesh-surface--animate {
                animation: none;
            }
        }

        .noise-overlay {
            pointer-events: none;
            opacity: 0.035;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="min-h-screen font-sans antialiased text-white">

    <div class="relative min-h-screen mesh-surface mesh-surface--animate">
        <div class="noise-overlay absolute inset-0"></div>

        <div class="relative z-10 flex min-h-screen flex-col items-center justify-center px-4 py-14 sm:py-16 lg:py-20">

            <p class="mb-6 font-mono text-xs font-medium uppercase tracking-[0.2em] text-cyan-200/80">
                Built for heavy CSV workflows
            </p>

            <div
                class="w-full max-w-2xl rounded-3xl border border-white/20 bg-white/[0.08] p-10 shadow-2xl shadow-cyan-950/40 ring-1 ring-white/10 backdrop-blur-2xl backdrop-saturate-150 transition duration-300 motion-reduce:transition-none sm:p-12 md:p-14">

                <div class="mb-10 text-center">
                    <h1 class="mb-4 text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">
                        Welcome to
                        <span
                            class="bg-gradient-to-r from-cyan-300 via-teal-300 to-violet-400 bg-clip-text text-transparent">
                            {{ config('app.name') }}
                        </span>
                    </h1>
                    <p class="mx-auto max-w-lg text-lg text-white/85 md:text-xl">
                        Upload your CSV, queue processing in the background, and track progress on your dashboard—all in one place.
                    </p>
                </div>

                <div class="flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a href="{{ route('signUp') }}"
                        class="w-full rounded-xl bg-gradient-to-r from-cyan-500 via-teal-500 to-emerald-600 px-10 py-4 text-center text-base font-semibold text-white shadow-lg shadow-teal-900/30 transition duration-200 hover:scale-[1.02] hover:shadow-xl hover:shadow-teal-900/40 motion-reduce:transition-none motion-reduce:hover:scale-100 sm:w-auto">
                        Register
                    </a>
                    <a href="{{ route('login') }}"
                        class="w-full rounded-xl border-2 border-white/35 bg-white/10 px-10 py-4 text-center text-base font-semibold text-white backdrop-blur-sm transition duration-200 hover:border-white/50 hover:bg-white/15 motion-reduce:transition-none sm:w-auto">
                        Login
                    </a>
                </div>

                <div class="mt-12 text-center">
                    <p class="text-sm text-white/60">
                        <i class="fas fa-heart text-rose-400/90"></i> Made with love by SajeelurRehman
                    </p>
                </div>
            </div>

            <div class="mt-12 grid w-full max-w-4xl grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-5">
                <div
                    class="rounded-2xl border border-white/15 bg-white/[0.06] p-6 shadow-lg backdrop-blur-md transition duration-200 hover:border-cyan-400/25 hover:bg-white/[0.09] motion-reduce:transition-none">
                    <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-cyan-500/20 text-cyan-300">
                        <i class="fas fa-file-csv text-lg"></i>
                    </div>
                    <h3 class="mb-2 font-semibold text-white">CSV upload</h3>
                    <p class="text-sm leading-relaxed text-white/65">
                        Drop large files securely; we validate and stage them for processing.
                    </p>
                </div>
                <div
                    class="rounded-2xl border border-white/15 bg-white/[0.06] p-6 shadow-lg backdrop-blur-md transition duration-200 hover:border-violet-400/25 hover:bg-white/[0.09] motion-reduce:transition-none">
                    <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-violet-500/20 text-violet-300">
                        <i class="fas fa-gears text-lg"></i>
                    </div>
                    <h3 class="mb-2 font-semibold text-white">Background jobs</h3>
                    <p class="text-sm leading-relaxed text-white/65">
                        Rows are parsed off the request so your UI stays fast and responsive.
                    </p>
                </div>
                <div
                    class="rounded-2xl border border-white/15 bg-white/[0.06] p-6 shadow-lg backdrop-blur-md transition duration-200 hover:border-teal-400/25 hover:bg-white/[0.09] motion-reduce:transition-none sm:col-span-1">
                    <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-teal-500/20 text-teal-300">
                        <i class="fas fa-chart-line text-lg"></i>
                    </div>
                    <h3 class="mb-2 font-semibold text-white">Live progress</h3>
                    <p class="text-sm leading-relaxed text-white/65">
                        Poll status and see counts update as each batch completes.
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
