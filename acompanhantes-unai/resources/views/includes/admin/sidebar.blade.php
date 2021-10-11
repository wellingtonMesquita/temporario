<nav class="sidebar sidebar-offcanvas style-sidebar" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile noHover">
            <a class="nav-link">
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2" style="font-size: 20px">Admin</span>
                    <span class="text-secondary text-small"></span>
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('publicacao.index')}}">
                <span class="menu-title">Publicação</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('anuncios.index')}}">
                <span class="menu-title">Anuncios</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
