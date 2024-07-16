<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="https://ps.w.org/360-player/assets/icon-128x128.png" width="60px" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">
                <b><?= $_SESSION["tai_khoan"]["ten"] ?? "ADMIN" ?></b>
            </p>
            <p class="app-sidebar__user-designation">Welcome to Admin</p>
        </div>
    </div>
    <hr>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="?url=list-category">
                <i class="app-menu__icon fa fa-list"></i>
                <span class="app-menu__label">category management</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item " href="?url=list-product">
                <span class="app-menu__icon fa-solid fa-image"></span>
                <span class="app-menu__label">Product Management</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item " href="?url=list-user">
                <i class="app-menu__icon fa fa-user"></i>
                <span class="app-menu__label">user management</span>
            </a>
        </li>
        <a class="app-sidebar__toggle" href="" data-toggle="sidebar" aria-label="Ẩn thanh bên"></a>
    </ul>

 


</aside>