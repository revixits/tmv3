<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ url('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Transmonang V3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/" class="nav-link {{ ($pageTitle === "dashboard") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ ($pageTitle === "reservations_list") || ($pageTitle === "reservations_schedule") || ($pageTitle === "reservations_availability") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Reservation
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/reservations/list" class="nav-link {{ ($pageTitle === "reservations_list") ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/reservations/schedule" class="nav-link {{ ($pageTitle === "reservations_schedule") ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Schedule</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/reservations/availability" class="nav-link {{ ($pageTitle === "reservations_availability") ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Availability</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/invoices/list" class="nav-link {{ ($pageTitle === "invoices_list") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Invoices
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/customers/list" class="nav-link {{ ($pageTitle === "customers_list") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Customers
                        </p>
                    </a>
                </li>

                <li class="nav-header">MASTER DATA</li>

                <li class="nav-item">
                    <a href="#" class="nav-link {{ ($pageTitle === "vehicles_list") || ($pageTitle === "vehicles_brands") || ($pageTitle === "vehicles_models") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Vehicles
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/vehicles/list" class="nav-link {{ ($pageTitle === "vehicles_list") ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/vehicles/brands" class="nav-link {{ ($pageTitle === "vehicles_brands") ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Brands</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/vehicles/models" class="nav-link {{ ($pageTitle === "vehicles_models") ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Models</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ ($pageTitle === "agents_list") || ($pageTitle === "agents_vrhicles") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Agents
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/agents/list" class="nav-link {{ ($pageTitle === "agents_list") ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/agents/vehicles" class="nav-link {{ ($pageTitle === "agents_vehicles") ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Agents Vehicles</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">RENT SETTINGS</li>

                <li class="nav-item">
                    <a href="/periodtypes/list" class="nav-link {{ ($pageTitle === "period_types") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Period Types
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/coverageareas/list" class="nav-link {{ ($pageTitle === "coverage_areas") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Coverage Areas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/renttypes/list" class="nav-link {{ ($pageTitle === "rent_types") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Rent Types
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/termsconditions/list" class="nav-link {{ ($pageTitle === "terms_conditions") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Terms & Conditions
                        </p>
                    </a>
                </li>

                <li class="nav-header">PAYMENT SETTINGS</li>

                <li class="nav-item">
                    <a href="/paymentchanneltypes/list" class="nav-link {{ ($pageTitle === "payment_channel_types") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Payment Channel Types
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/paymentchannels/list" class="nav-link {{ ($pageTitle === "payment_channels") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Payment Channels
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/paymentmethods/list" class="nav-link {{ ($pageTitle === "payment_methods") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Payment Methods
                        </p>
                    </a>
                </li>

                <li class="nav-header">USERS</li>

                <li class="nav-item">
                    <a href="/profiles/list" class="nav-link {{ ($pageTitle === "profiles") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profiles
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/drivers/list" class="nav-link {{ ($pageTitle === "drivers") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Drivers
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/guests/list" class="nav-link {{ ($pageTitle === "guests") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Guests
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/accounts/list" class="nav-link {{ ($pageTitle === "accounts") ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Accounts
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
