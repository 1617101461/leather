<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{asset ('assets/admin/images/FB_IMG_15361098794607620.png') }}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">AS LEATHER</p>
                  <div>
                    <small class="designation text-muted">Admin</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Input Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('barang.index')}}">Barang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('kategori.index')}}">Kategori</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('checkout.index')}}">CheckOut</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('cart.index')}}">Cart</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>