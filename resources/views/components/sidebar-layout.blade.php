<div>
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">T-Shirt.</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">TS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ url('/') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            <li class="menu-header">Master</li>
            <li class="{{ (request()->is('produk')) ? 'active' : ''}}"><a href="{{ url('produk') }}" class="nav-link"><i
                        class="fas fa-regular fa-pen"></i><span>Produk</span></a>

            </li>
            <!-- <li class="{{ (request()->is('category-produk')) ? 'active' : ''}}"><a href="{{ url('category-produk') }}"
                    class="nav-link"><i class="fas fa-regular fa-pen"></i><span>Kategori Produk</span></a>

            <li class="menu-header">Offline</li>
            <li class="{{ (request()->is('transaksi-offline')) ? 'active' : '' }}"><a
                    href="{{ url('transaksi-offline') }}" class=" nav-link"><i
                        class="fas  fa-archive"></i><span>Transaksi Offline</span></a>
            <li class=""><a href="#" class="nav-link"><i class="fas  fa-male"></i><span>Sales Offline</span></a>

            <li class="menu-header">Online</li>
            <li class=""><a href="#" class="nav-link"><i class="fas  fa-archive"></i><span>Transaksi Online</span></a>
            <li class=""><a href="#" class="nav-link"><i class="fas  fa-male"></i><span>Sales Online</span></a>

            <li class="menu-header">Warehouse</i></li>

            </li> -->
        </ul>
    </aside>
</div>