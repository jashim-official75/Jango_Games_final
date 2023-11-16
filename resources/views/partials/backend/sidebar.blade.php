<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('index') }}" class="app-brand-link">
            <img src="{{ asset('assets/frontend/images/logo/jango-games-logo.png') }}" alt="jangogames" width="200px">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Game -->
        <li
            class="menu-item {{ request()->routeIs('game.multiple.create') || request()->routeIs('game.index') || request()->routeIs('game.create') || request()->routeIs('custom_description') ? 'active' : '' }} {{ request()->routeIs('game.multiple.create') || request()->routeIs('game.index') || request()->routeIs('game.create') || request()->routeIs('custom_description') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa-solid fa-gamepad"></i>
                <div data-i18n="Layouts">Games</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('game.index') ? 'active' : '' }}">
                    <a href="{{ route('game.index') }}" class="menu-link">
                        <div data-i18n="Account">All Games</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('game.create') ? 'active' : '' }}">
                    <a href="{{ route('game.create') }}" class="menu-link">
                        <div data-i18n="Account">Add Single Games</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('game.multiple.create') ? 'active' : '' }}">
                    <a href="{{ route('game.multiple.create') }}" class="menu-link">
                        <div data-i18n="Notifications">Add Multiple Game</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('custom_description') ? 'active' : '' }}">
                    <a href="{{ route('custom_description') }}" class="menu-link">
                        <div data-i18n="Notifications">Custom Description</div>
                    </a>
                </li>

            </ul>
        </li>
        <!----end game------->

        <!-- category -->
        <li class="menu-item {{ request()->routeIs('category.index') || request()->routeIs('category.create') || request()->routeIs('category.edit') ? 'active' : '' }}">
            <a href="{{ route('category.index') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-film"></i>
                <div data-i18n="Analytics">Categories</div>
            </a>
        </li>

        <!-- tag -->
        <li class="menu-item {{ request()->routeIs('tag.index') || request()->routeIs('tag.create') ? 'active' : '' }}">
            <a href="{{ route('tag.index') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-tag"></i>
                <div data-i18n="Analytics">Tags</div>
            </a>
        </li>

         <!-- banner -->
         <li class="menu-item {{ request()->routeIs('banner.index') || request()->routeIs('banner.create') ? 'active' : '' }}">
            <a href="{{ route('banner.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Banner</div>
            </a>
        </li>

         <!-- Administrator -->
         <li
         class="menu-item {{ request()->routeIs('user.index')  ? 'active' : '' }} {{ request()->routeIs('user.index')  ? 'open' : '' }}">
         <a href="javascript:void(0);" class="menu-link menu-toggle">
             <i class="menu-icon tf-icons fa-solid fa-user"></i>
             <div data-i18n="Layouts">Administrator</div>
         </a>
         <ul class="menu-sub">
             <li class="menu-item {{ request()->routeIs('user.index')  ? 'active' : '' }}">
                 <a href="{{ route('user.index') }}" class="menu-link">
                     <div data-i18n="Account">All User</div>
                 </a>
             </li>

             <li class="menu-item">
                 <a href="{{ route('register') }}" class="menu-link">
                     <div data-i18n="Account">Add User</div>
                 </a>
             </li>
         </ul>
     </li>
     <!----end Administrator------->

    </ul>
</aside>
