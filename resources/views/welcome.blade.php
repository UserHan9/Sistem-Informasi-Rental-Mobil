<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Rental Mobil') }}</title>

    <script>document.documentElement.classList.add('js')</script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-100 text-neutral-900 antialiased">


    <div id="intro" class="fixed inset-0 z-[100] flex items-center justify-center">
        <div id="intro-bg" class="absolute inset-0 bg-black"></div>
        <span id="intro-brand"
              class="relative opacity-0 origin-top-left text-white text-5xl md:text-7xl font-semibold uppercase tracking-[0.3em] will-change-transform">
            Laravel
        </span>
    </div>

    
    <header class="fixed top-0 inset-x-0 z-50">
        <nav class="mx-auto grid max-w-7xl grid-cols-3 items-center px-6 py-5">
            <div class="hidden md:flex items-center gap-8 text-sm">
                <a href="#" class="transition hover:opacity-60">Car</a>
                <a href="#" class="transition hover:opacity-60">Service</a>
                <a href="#" class="transition hover:opacity-60">Price</a>
                <a href="#" class="transition hover:opacity-60">Help</a>
            </div>

            <a id="nav-brand" href="#"
               class="col-start-2 justify-self-center text-xl font-semibold uppercase tracking-[0.3em] text-neutral-900 opacity-0">
                Laravel
            </a>

            <div class="col-start-3 flex items-center justify-end gap-4">
                {{-- <button type="button" aria-label="Cari"
                        class="rounded-full p-2 transition hover:bg-black/5 focus-visible:outline-2 focus-visible:outline-neutral-900">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/>
                    </svg>
                </button> --}}
                <a href="#"
                   class="hidden sm:inline-block rounded-full bg-neutral-900 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-neutral-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-900">
                    Log in
                </a>
            </div>
        </nav>
    </header>

    
    <main class="relative isolate flex min-h-screen flex-col overflow-hidden bg-linear-to-br from-white via-neutral-100 to-neutral-200">

        <div class="relative mx-auto w-full max-w-7xl flex-1 px-6 pt-32 lg:pt-40">
            <div class="relative z-10 max-w-xl">
                <h1 class="reveal text-5xl font-semibold leading-[1.05] tracking-tight md:text-7xl">
                    Car Rent, Easy, Fast and Made Simple.
                </h1>

                <p class="reveal delay-150 mt-6 max-w-md text-neutral-600">
                    Choose a car, pick your dates, and head off. Our cars are well-maintained, our pricing is transparent, 
                    and booking takes just a few minutes.
                </p>

                <div class="reveal delay-300 mt-8 flex flex-wrap items-center gap-4">
                    <a href="#"
                       class="rounded-full bg-neutral-900 px-7 py-3.5 text-sm font-medium text-white transition hover:bg-neutral-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-900">
                        Book now
                    </a>
                    {{-- <button type="button"
                            class="inline-flex items-center gap-2 rounded-full border border-neutral-300 bg-white/60 px-4 py-2 text-xs text-neutral-700 transition hover:bg-white focus-visible:outline-2 focus-visible:outline-neutral-900">
                        Lihat armada
                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button> --}}
                </div>
            </div>

            
           <img src="{{ asset('images/mobil.png') }}"
     alt="Mobil listrik putih"
     class="reveal reveal-right delay-300 pointer-events-none mt-10
            w-3/4 select-none mix-blend-multiply
            lg:absolute lg:bottom-0 lg:right-[3%] lg:mt-0 lg:w-[50%]">
        </div>

        
        <div class="reveal delay-500 relative z-10 mx-auto w-full max-w-7xl px-6 pb-8 pt-10">
            <dl class="flex flex-wrap items-center justify-center gap-x-12 gap-y-6">
                <div class="flex items-center gap-4">
                    <svg class="h-7 w-7 text-neutral-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="13" r="8"/><path d="M12 9v4l2.5 2.5M9.5 2.5h5"/>
                    </svg>
                    <div>
                        <dt class="text-xs text-neutral-500">0–100 km/h</dt>
                        <dd class="text-2xl font-semibold">3,1 s</dd>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <svg class="h-7 w-7 text-neutral-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="3" y="7" width="16" height="10" rx="2"/><path d="M22 11v2M7 12h6"/>
                    </svg>
                    <div>
                        <dt class="text-xs text-neutral-500">Estimated Range</dt>
                        <dd class="text-2xl font-semibold">600 km</dd>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <svg class="h-7 w-7 text-neutral-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M13 2 3 14h8l-1 8 10-12h-8z"/>
                    </svg>
                    <div>
                        <dt class="text-xs text-neutral-500">Max Power</dt>
                        <dd class="text-2xl font-semibold">520 kW</dd>
                    </div>
                </div>
            </dl>
        </div>
    </main>

</body>
</html>