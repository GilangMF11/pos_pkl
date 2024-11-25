<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <span class="brand-text font-weight-light">POS APP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Master Data -->
                <li class="nav-item has-treeview">
                    
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>

                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/products') }}" class="nav-link">
                                <i class="fas fa-box-open nav-icon"></i>
                                <p>Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/categories') }}" class="nav-link">
                                <i class="fas fa-tags nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/suppliers') }}" class="nav-link">
                                <i class="fas fa-truck nav-icon"></i>
                                <p>Suppliers</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Transactions -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>
                            Transactions
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/sales') }}" class="nav-link">
                                <i class="fas fa-cash-register nav-icon"></i>
                                <p>Sales</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/purchases') }}" class="nav-link">
                                <i class="fas fa-shopping-cart nav-icon"></i>
                                <p>Purchases</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Reports -->
                <li class="nav-item">
                    <a href="{{ url('/reports') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Reports</p>
                    </a>
                </li>

                <!-- User Management -->
                <li class="nav-item">
                    <a href="{{ url('/users') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Users</p>
                    </a>
                </li>

                <!-- Settings -->
                <li class="nav-item">
                    <a href="{{ url('/settings') }}" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
