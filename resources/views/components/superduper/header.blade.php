<header class="fixed z-50 w-full py-3 transition-all duration-300 bg-white/80 backdrop-blur-md shadow-soft md:py-4" role="banner">
    <div class="px-4 mx-auto container-default">
        <div class="flex items-center justify-between gap-x-4 md:gap-x-8">
            <!-- Header Logo -->
            <a href="{{ route('home') }}" class="relative z-10 flex-shrink-0 transition-transform hover:scale-105" aria-label="Go to homepage">
                @php
                    $brandLogo = $siteSettings->logo ?? null;
                    $brandName = $generalSettings->brand_name ?? $siteSettings->name ?? config('app.name', 'SuperDuper');
                @endphp

                @if($brandLogo)
                    <img src="{{ Storage::url($brandLogo) }}"
                         alt="{{ $brandName }} logo"
                         class="w-auto h-10 md:h-12"
                    />
                @else
                    <div class="flex items-center gap-2">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-green">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-transparent md:text-2xl font-display text-gradient-green header-brand-text">{{ $brandName }}</span>
                    </div>
                @endif
            </a>

            <!-- Header Navigation -->
            <div class="menu-block-wrapper lg:static">
                <div class="fixed inset-0 z-40 menu-overlay bg-secondary-900/50 backdrop-blur-sm lg:hidden" style="display: none;" aria-hidden="true"></div>
                <nav class="menu-block fixed top-0 right-0 bottom-0 w-[280px] md:w-[320px] bg-white dark:bg-secondary-800 z-50 shadow-strong overflow-y-auto transform translate-x-full transition-transform duration-300 lg:static lg:translate-x-0 lg:w-auto lg:bg-transparent lg:shadow-none lg:overflow-visible lg:dark:bg-transparent"
                     id="append-menu-header"
                     role="navigation"
                     aria-label="Main navigation">
                    <!-- Mobile Menu Header -->
                    <div class="flex items-center justify-between p-4 border-b border-secondary-200 lg:hidden">
                        <button class="flex items-center gap-2 transition-colors go-back text-secondary-700 hover:text-primary-600"
                                aria-label="Go back to previous menu">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            <span class="font-medium">Back</span>
                        </button>
                        <div class="font-semibold current-menu-title text-secondary-800" aria-live="polite"></div>
                        <button class="flex items-center justify-center w-8 h-8 text-2xl transition-colors rounded-lg cursor-pointer mobile-menu-close text-secondary-600 hover:bg-secondary-100 hover:text-primary-600"
                                aria-label="Close navigation menu">
                            &times;
                        </button>
                    </div>

                    @php
                        use Datlechin\FilamentMenuBuilder\Models\Menu;
                        $menu = Menu::location('header');
                    @endphp

                    <ul class="p-4 site-menu-main lg:p-0 lg:flex lg:items-center lg:gap-2">
                        @if($menu)
                            @foreach($menu->menuItems as $index => $item)
                                @php
                                    $hasChildren = count($item->children) > 0;
                                    $menuId = 'submenu-' . ($index + 1);
                                @endphp

                                <li class="mb-1 nav-item lg:mb-0 lg:relative {{ $hasChildren ? 'nav-item-has-children group' : '' }}">
                                    <a href="{{ $item->url }}"
                                       class="nav-link-item flex items-center justify-between text-secondary-700 hover:text-primary-600 header-nav-link font-medium py-3 lg:py-2 lg:px-4 rounded-xl lg:hover:bg-primary-50 transition-all duration-200 {{ $hasChildren ? 'drop-trigger' : '' }}"
                                       @if($item->target) target="{{ $item->target }}" @endif>
                                        <span>{{ $item->title }}</span>
                                        @if($hasChildren)
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        @endif
                                    </a>

                                    @if($hasChildren)
                                        <ul class="sub-menu pl-4 mt-1 space-y-1 lg:absolute lg:left-0 lg:top-full lg:mt-2 lg:pl-0 lg:min-w-[220px] lg:bg-white lg:dark:bg-secondary-800 lg:shadow-medium lg:rounded-xl lg:p-2 lg:opacity-0 lg:invisible lg:transform lg:translate-y-2 lg:transition-all lg:duration-200 lg:group-hover:opacity-100 lg:group-hover:visible lg:group-hover:translate-y-0 lg:z-20" id="{{ $menuId }}">
                                            @foreach($item->children as $childIndex => $childItem)
                                                @php
                                                    $hasGrandchildren = count($childItem->children) > 0;
                                                    $submenuId = $menuId . '-' . ($childIndex + 1);
                                                @endphp

                                                <li class="sub-menu--item {{ $hasGrandchildren ? 'nav-item-has-children group' : '' }}">
                                                    <a href="{{ $childItem->url }}"
                                                       class="block px-4 py-2.5 transition-all rounded-lg text-secondary-700 hover:text-primary-600 hover:bg-primary-50 {{ $hasGrandchildren ? 'flex items-center justify-between drop-trigger' : '' }}"
                                                       @if($childItem->target) target="{{ $childItem->target }}" @endif>
                                                        <span>{{ $childItem->title }}</span>
                                                        @if($hasGrandchildren)
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                            </svg>
                                                        @endif
                                                    </a>

                                                    @if($hasGrandchildren)
                                                        <ul class="sub-menu pl-4 mt-1 space-y-1 lg:absolute lg:left-full lg:top-0 lg:pl-0 lg:mt-0 lg:ml-2 lg:min-w-[220px] lg:bg-white lg:dark:bg-secondary-800 lg:shadow-medium lg:rounded-xl lg:p-2 lg:opacity-0 lg:invisible lg:transform lg:translate-x-2 lg:transition-all lg:duration-200 lg:group-hover:opacity-100 lg:group-hover:visible lg:group-hover:translate-x-0" id="{{ $submenuId }}">
                                                            @foreach($childItem->children as $grandchildItem)
                                                                <li class="sub-menu--item">
                                                                    <a href="{{ $grandchildItem->url }}"
                                                                       class="block px-4 py-2.5 transition-all rounded-lg text-secondary-700 hover:text-primary-600 hover:bg-primary-50"
                                                                       @if($grandchildItem->target) target="{{ $grandchildItem->target }}" @endif>
                                                                        {{ $grandchildItem->title }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        @endif

                        <!-- Admin Panel Button for Mobile -->
                        <li class="pt-4 mt-4 border-t nav-item border-secondary-200 lg:hidden">
                            <a href="admin/login" class="block w-full">
                                <button class="w-full btn btn-primary">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                    Admin Panel
                                </button>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header Event - Admin Panel Button for Desktop -->
            <div class="flex items-center gap-3 md:gap-4">
                <a href="admin/login" class="hidden sm:inline-block">
                    <button class="btn btn-primary btn-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                        Admin Panel
                    </button>
                </a>

                <div class="block lg:hidden">
                    <button id="openBtn"
                            class="flex flex-col items-center justify-center w-10 h-10 transition-all duration-200 rounded-lg hamburger-menu mobile-menu-trigger hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-primary-500"
                            aria-label="Open navigation menu"
                            aria-expanded="false"
                            aria-controls="append-menu-header">
                        <span class="block w-6 h-0.5 bg-primary-600 mb-1.5 transition-all duration-200 hamburger-line" aria-hidden="true"></span>
                        <span class="block w-6 h-0.5 bg-primary-600 mb-1.5 transition-all duration-200 hamburger-line" aria-hidden="true"></span>
                        <span class="block w-6 h-0.5 bg-primary-600 transition-all duration-200 hamburger-line" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

@push('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuTrigger = document.querySelector('.mobile-menu-trigger');
    const menuOverlay = document.querySelector('.menu-overlay');
    const menuBlock = document.querySelector('.menu-block');
    const menuClose = document.querySelector('.mobile-menu-close');
    const dropTriggers = document.querySelectorAll('.drop-trigger');
    const goBack = document.querySelector('.go-back');
    const currentMenuTitle = document.querySelector('.current-menu-title');
    const header = document.querySelector('header');

    // Improved menu toggle function
    function toggleMenu() {
        menuBlock.classList.toggle('translate-x-full');
        document.body.classList.toggle('overflow-hidden');
        menuOverlay.style.display = menuBlock.classList.contains('translate-x-full') ? 'none' : 'block';

        // Animate hamburger to X
        const spans = menuTrigger.querySelectorAll('span');
        if (!menuBlock.classList.contains('translate-x-full')) {
            spans[0].classList.add('rotate-45', 'translate-y-2');
            spans[1].classList.add('opacity-0');
            spans[2].classList.add('-rotate-45', '-translate-y-2');
        } else {
            spans[0].classList.remove('rotate-45', 'translate-y-2');
            spans[1].classList.remove('opacity-0');
            spans[2].classList.remove('-rotate-45', '-translate-y-2');
        }
    }

    menuTrigger.addEventListener('click', toggleMenu);
    menuOverlay.addEventListener('click', toggleMenu);
    menuClose.addEventListener('click', toggleMenu);

    // Handle scroll for header background
    function handleScroll() {
        if (window.scrollY > 50) {
            header.classList.add('header-scrolled');
            header.classList.remove('bg-white/80');
            header.classList.add('bg-white', 'shadow-medium');
        } else {
            header.classList.remove('header-scrolled', 'shadow-medium');
            header.classList.add('bg-white/80', 'shadow-soft');
        }
    }

    window.addEventListener('scroll', handleScroll);
    handleScroll();

    function setupMobileMenu() {
        if (window.innerWidth < 1024) {
            // Reset any previously opened submenus
            document.querySelectorAll('.sub-menu').forEach(menu => {
                menu.style.display = 'none';
            });

            document.querySelector('.site-menu-main').style.display = 'block';

            if (goBack) goBack.style.display = 'none';

            dropTriggers.forEach(trigger => {
                trigger.addEventListener('click', function(e) {
                    if (window.innerWidth < 1024) {
                        e.preventDefault();
                        const parent = this.parentElement;
                        const submenu = parent.querySelector('.sub-menu');
                        const title = this.querySelector('span').textContent;

                        if (submenu) {
                            const siblingMenus = parent.parentElement.querySelectorAll('.sub-menu');
                            siblingMenus.forEach(menu => {
                                if (menu !== submenu) menu.style.display = 'none';
                            });

                            submenu.style.display = 'block';
                            currentMenuTitle.textContent = title;
                            parent.parentElement.style.display = 'none';
                            goBack.style.display = 'flex';
                        }
                    }
                });
            });

            // Back button functionality
            goBack.addEventListener('click', function() {
                const activeSubmenu = document.querySelector('.sub-menu[style="display: block;"]');
                if (activeSubmenu) {
                    activeSubmenu.style.display = 'none';
                    activeSubmenu.parentElement.parentElement.style.display = 'block';

                    if (activeSubmenu.parentElement.parentElement.classList.contains('site-menu-main')) {
                        currentMenuTitle.textContent = '';
                        this.style.display = 'none';
                    } else {
                        const parentTrigger = activeSubmenu.parentElement.parentElement.previousElementSibling;
                        if (parentTrigger && parentTrigger.classList.contains('drop-trigger')) {
                            currentMenuTitle.textContent = parentTrigger.querySelector('span').textContent;
                        }
                    }
                }
            });
        }
    }

    // Initial setup
    setupMobileMenu();

    // Re-setup on resize
    window.addEventListener('resize', function() {
        setupMobileMenu();
    });
});
</script>
@endpush
