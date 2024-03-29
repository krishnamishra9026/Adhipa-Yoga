<div class="sidebar">
    <nav class="sidebar-nav scrollable-menu">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">

                    </i>
                    {{ trans('global.userManagement.title') }}
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            {{ trans('global.permission.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fas fa-briefcase nav-icon">

                            </i>
                            {{ trans('global.role.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <i class="fas fa-user nav-icon">

                            </i>
                            {{ trans('global.user.title') }}
                        </a>
                    </li>
                </ul>
            </li>
            <!--li class="nav-item">
                <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    {{ trans('global.product.title') }}
                </a>
            </li-->
            <li class="nav-item">
                <a href="{{ route("admin.packages.index") }}" class="nav-link {{ request()->is('admin/packages') || request()->is('admin/packages/*') ? 'active' : '' }}">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    Pakages
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route("admin.school-classes.index") }}" class="nav-link {{ request()->is('admin/school-classes') || request()->is('admin/school-classes/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-school nav-icon">

                    </i>
                    Yoga Classes
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.lessons.index") }}" class="nav-link {{ request()->is('admin/lessons') || request()->is('admin/lessons/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-clock nav-icon">

                    </i>
                    Classes Timetable
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.calendar.index") }}" class="nav-link {{ request()->is('admin/calendar') || request()->is('admin/calendar/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-calendar nav-icon">

                    </i>
                    Schedules
                </a>
            </li>

            <!--li class="nav-item">
                <a href="{{ route("admin.newsletters.index") }}" class="nav-link {{ request()->is('admin/newsletters') || request()->is('admin/newsletters/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-newsletters nav-icon">

                    </i>
                    Newsletters
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route("admin.appointment.index") }}" class="nav-link {{ request()->is('admin/appointment') || request()->is('admin/appointment/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-appointment nav-icon">

                    </i>
                    Appointments
                </a>
            </li-->

            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">

                    </i>
                    Catalogs
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route("admin.gallery.index") }}" class="nav-link {{ request()->is('admin/gallery') || request()->is('admin/gallery/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.blogs.index") }}" class="nav-link {{ request()->is('admin/blogs') || request()->is('admin/blogs/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            Blogs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.cms.edit",1) }}" class="nav-link {{ request()->is('admin/cms') || request()->is('admin/cms/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            CMS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.cmsbenefit.edit",1) }}" class="nav-link {{ request()->is('admin/cmsbenefit') || request()->is('admin/cmsbenefit/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            Benefit CMS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.mainservices.index") }}" class="nav-link {{ request()->is('admin/mainservices') || request()->is('admin/mainservices/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            Main Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.testimonial.index") }}" class="nav-link {{ request()->is('admin/testimonial') || request()->is('admin/testimonial/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            Testimonials
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.contactus.edit",1) }}" class="nav-link {{ request()->is('admin/contactus') || request()->is('admin/contactus/*') ? 'active' : '' }}">
                            <i class="fas fa-user nav-icon">

                            </i>
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.terms-and-conditions.index") }}" class="nav-link {{ request()->is('admin/terms-and-conditions') || request()->is('admin/terms-and-conditions/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            Terms & Conditions
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.privacy-policy.index") }}" class="nav-link {{ request()->is('admin/privacy-policy') || request()->is('admin/privacy-policy/*') ? 'active' : '' }}">
                            <i class="fas fa-briefcase nav-icon">

                            </i>
                            Privacy Policy
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.setting.index') }}" class="nav-link {{ request()->is('admin/setting') || request()->is('admin/setting/*') ? 'active' : '' }}">
                            <i class="fas fa-user nav-icon">

                            </i>
                            Setting
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.about.index') }}" class="nav-link {{ request()->is('admin/about') || request()->is('admin/about/*') ? 'active' : '' }}">
                            <i class="fas fa-user nav-icon">

                            </i>
                            About
                        </a>
                    </li>
                    
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route("admin.booking.index") }}" class="nav-link {{ request()->is('admin/booking') || request()->is('admin/booking/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-appointment nav-icon">

                    </i>
                    Booking
                </a>
            </li-->

            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>


            

        </ul>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 869px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 415px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>