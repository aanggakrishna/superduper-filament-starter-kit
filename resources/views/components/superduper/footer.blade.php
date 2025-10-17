<footer class="section-footer bg-gradient-to-br from-primary-700 via-primary-600 to-primary-800">
    <!-- CTA Section -->
    <div class="relative">
        <div class="absolute inset-0 bg-white/5"></div>
        <div class="relative z-10 section-padding">
            <div class="container-default">
                <div class="flex flex-col items-center justify-center gap-8 md:gap-12">
                    <div class="max-w-3xl text-center">
                        <h2 class="mb-4 text-3xl font-bold leading-tight text-white md:text-4xl lg:text-5xl font-display">
                            Ready to Transform Your Business?
                        </h2>
                        <p class="text-lg text-white/90 md:text-xl">
                            Start your journey with <span class="font-semibold text-accent-200">SuperDuper</span> today and experience the difference
                        </p>
                    </div>
                    <a href="{{ $siteSettings->footer_cta_button_url ?? '#' }}"
                        class="group relative overflow-hidden bg-white text-primary-700 hover:bg-accent-500 hover:text-white btn btn-lg shadow-green-lg">
                        <span class="relative z-10 flex items-center gap-2">
                            Get Started — It's Free
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="h-px bg-white/10"></div>

    <!-- Main Footer Content -->
    <div class="text-white">
        <div class="py-16 lg:py-20">
            <div class="container-default">
                <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-[1.5fr_repeat(4,_1fr)] xl:gap-12">
                    <!-- Brand Section -->
                    <div class="flex flex-col md:col-span-3 lg:col-span-1 gap-y-6">
                        <a href="{{ route('home') }}" class="inline-block transition-transform hover:scale-105">
                            @php
                                $brandLogo = $generalSettings->brand_logo ?? null;
                                $brandName = $generalSettings->brand_name ?? $siteSettings->name ?? config('app.name', 'SuperDuper');
                                $footerLogo = $siteSettings->footer_logo ?? $brandLogo;
                            @endphp

                            @if($footerLogo)
                                <img src="{{ Storage::url($footerLogo) }}" alt="{{ $brandName }}" class="h-10 w-auto" />
                            @else
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center justify-center w-10 h-10 bg-white rounded-xl">
                                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                        </svg>
                                    </div>
                                    <span class="text-2xl font-bold text-white font-display">{{ $brandName }}</span>
                                </div>
                            @endif
                        </a>

                        <div class="space-y-4">
                            <p class="text-white/80 leading-relaxed lg:max-w-sm">
                                {{ $siteSettings->description ?? 'Building amazing experiences with modern technology and innovative solutions.' }}
                            </p>

                            <a href="mailto:{{ $siteSettings->company_email ?? 'yourdemo@email.com' }}"
                                class="inline-flex items-center gap-2 text-white transition-all duration-200 hover:text-accent-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="font-medium">{{ $siteSettings->company_email ?? 'yourdemo@email.com' }}</span>
                            </a>

                            <div class="flex flex-wrap gap-3 pt-2">
                                @php
                                    $socialLinks = [
                                        'facebook' => $siteSocialSettings->facebook_url ?? null,
                                        'twitter' => $siteSocialSettings->twitter_url ?? null,
                                        'instagram' => $siteSocialSettings->instagram_url ?? null,
                                        'linkedin' => $siteSocialSettings->linkedin_url ?? null,
                                        'youtube' => $siteSocialSettings->youtube_url ?? null,
                                        'tiktok' => $siteSocialSettings->tiktok_url ?? null,
                                    ];

                                    $faIcons = [
                                        'twitter' => 'fa-brands fa-x-twitter',
                                        'facebook' => 'fa-brands fa-facebook-f',
                                        'instagram' => 'fa-brands fa-instagram',
                                        'linkedin' => 'fa-brands fa-linkedin-in',
                                        'youtube' => 'fa-brands fa-youtube',
                                        'tiktok' => 'fa-brands fa-tiktok',
                                    ];
                                @endphp

                                @foreach($socialLinks as $platform => $url)
                                    @if(!empty($url))
                                        <a href="{{ $url }}" target="_blank" rel="noopener noreferrer"
                                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-white transition-all duration-200 hover:bg-white hover:text-primary-600 hover:scale-110"
                                            aria-label="{{ ucfirst($platform) }}">
                                            <i class="{{ $faIcons[$platform] ?? 'fa-brands fa-'.$platform }}"></i>
                                        </a>
                                    @endif
                                @endforeach

                                @if(empty(array_filter($socialLinks)))
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"
                                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-white transition-all duration-200 hover:bg-white hover:text-primary-600 hover:scale-110"
                                        aria-label="Twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"
                                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-white transition-all duration-200 hover:bg-white hover:text-primary-600 hover:scale-110"
                                        aria-label="Facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Main Links -->
                    <div class="flex flex-col gap-y-5">
                        <h3 class="text-lg font-semibold text-white font-display">
                            Main
                        </h3>
                        @php
                            use Datlechin\FilamentMenuBuilder\Models\Menu;
                            $footerMenu = Menu::location('footer');
                        @endphp
                        <ul class="flex flex-col gap-y-3">
                            @if($footerMenu)
                                @foreach($footerMenu->menuItems as $item)
                                    <li>
                                        <a href="{{ $item->url }}" @if($item->target) target="{{ $item->target }}" @endif
                                            class="text-white/80 hover:text-white transition-colors duration-200 hover:translate-x-1 inline-block">
                                            {{ $item->title }}
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                <li>
                                    <a href="{{ route('home') }}"
                                        class="text-white/80 hover:text-white transition-colors duration-200 hover:translate-x-1 inline-block">
                                        Home
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>

                    <!-- Sample Pages -->
                    <div class="flex flex-col gap-y-5">
                        <h3 class="text-lg font-semibold text-white font-display">
                            Sample Pages
                        </h3>
                        @php
                            $footerOthers = Menu::location('footer-2');
                        @endphp
                        <ul class="flex flex-col gap-y-3">
                            @if($footerOthers)
                                @foreach($footerOthers->menuItems as $item)
                                    <li>
                                        <a href="{{ $item->url }}" @if($item->target) target="{{ $item->target }}" @endif
                                            class="text-white/80 hover:text-white transition-colors duration-200 hover:translate-x-1 inline-block">
                                            {{ $item->title }}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <!-- Resources -->
                    <div class="flex flex-col gap-y-5">
                        <h3 class="text-lg font-semibold text-white font-display">
                            Resources
                        </h3>
                        @php
                            $footerResources = Menu::location('footer-3');
                        @endphp
                        <ul class="flex flex-col gap-y-3">
                            @if($footerResources)
                                @foreach($footerResources->menuItems as $item)
                                    <li>
                                        <a href="{{ $item->url }}" @if($item->target) target="{{ $item->target }}" @endif
                                            class="text-white/80 hover:text-white transition-colors duration-200 hover:translate-x-1 inline-block"
                                            aria-label="{{ $item->title }}">
                                            {{ $item->title }}
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                <li>
                                    <a href="{{ route('blog') }}"
                                       class="text-white/80 hover:text-white transition-colors duration-200 hover:translate-x-1 inline-block"
                                       aria-label="Blog">
                                        Blog
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>

                    <!-- Community -->
                    <div class="flex flex-col gap-y-5">
                        <h3 class="text-lg font-semibold text-white font-display">
                            Community
                        </h3>
                        @php
                            $footerCommunity = Menu::location('footer-4');
                        @endphp
                        <ul class="flex flex-col gap-y-3">
                            @if($footerCommunity)
                                @foreach($footerCommunity->menuItems as $item)
                                    <li>
                                        <a href="{{ $item->url }}" @if($item->target) target="{{ $item->target }}" @endif
                                            class="text-white/80 hover:text-white transition-colors duration-200 hover:translate-x-1 inline-block"
                                            aria-label="{{ $item->title }}">
                                            {{ $item->title }}
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                <li>
                                    <a href="{{ route('contact-us') }}"
                                       class="text-white/80 hover:text-white transition-colors duration-200 hover:translate-x-1 inline-block"
                                       aria-label="Contact Us">
                                        Contact Us
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="bg-white/5 backdrop-blur-sm">
        <div class="py-6">
            <div class="container-default">
                <div class="flex flex-col items-center justify-between gap-4 text-center md:flex-row md:text-left">
                    <p class="text-sm text-white/70">
                        &copy; {{ date('Y') }} {{ $generalSettings->brand_name ?? $siteSettings->name ?? config('app.name', 'SuperDuper') }}. 
                        {{ $siteSettings->copyright_text ?? 'All Rights Reserved' }}
                    </p>
                    <div class="flex items-center gap-6 text-sm">
                        <a href="#" class="text-white/70 transition-colors hover:text-white">Privacy Policy</a>
                        <a href="#" class="text-white/70 transition-colors hover:text-white">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
