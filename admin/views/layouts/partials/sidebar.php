<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL_ADMIN ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- USER BAR -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user"></i>
            <span>User management</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=users">User List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=user-create">New Adding</a>
            </div>
        </div>
    </li>

    <!-- CATEGORY BAR -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-tasks"></i>
            <span>Category management</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=categories">Category List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=category-create">New Adding</a>
            </div>
        </div>

        <!-- SIZE BAR -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
            <i class="fas fa-sitemap"></i>
            <span>Size management</span>
        </a>
        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=sizes">Size List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=size-create">New Adding</a>
            </div>
        </div>
    </li>

    <!-- PRODUCT BAR -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
            <i class="fas fa-boxes"></i>
            <span>Product management</span>
        </a>
        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=products">Product List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=product-create">New Adding</a>
            </div>
        </div>
    </li>

    <!-- COMMENT BAR -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
            <i class="fas fa-comments"></i>
            <span>Comment management</span>
        </a>
        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=comments">Comment List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=comment-create">New Adding</a>
            </div>
        </div>
    </li>

    <!-- CART BAR -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
            <i class="fas fa-shopping-cart"></i>
            <span>Cart management</span>
        </a>
        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=carts">Cart-items List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=cart-create">New Adding</a>
            </div>
        </div>
    </li>

    <!-- ORDER BAR -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
            <i class="fas fa-receipt"></i>
            <span>Order management</span>
        </a>
        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=orders">Cart-items List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=order-create">New Adding</a>
            </div>
        </div>
    </li>







    <!-- Divider -->
    <hr class="sidebar-divider">



</ul>