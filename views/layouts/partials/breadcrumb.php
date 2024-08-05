<nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="<?= BASE_URL ?>">Home 
                                        <!-- <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg> -->
                                    </a>
                                    <!-- <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="index.html" class="header__sub--menu__link">Home One</a></li>
                                    </ul> -->
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="<?= BASE_URL ?>">Shop 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <?php foreach($categoriesForMenu as $item) : ?>
                                        <li class="header__sub--menu__items">
                                            <a href="<?= BASE_URL ?>?act=category&id=<?= $item['id'] ?>" class="header__sub--menu__link"><?= $item['name']?></a>
                                        </li>
                                        <?php endforeach; ?>    
                                    </ul>
                                </li>
                                
                                <!-- <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link" href="shop.html">Shop 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__mega--menu d-flex">
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">Category</span>
                                            <ul style="max-width:250px;" class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="shop.html">Shop Left Sidebar</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="shop-grid.html">Shop Grid</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="shop-grid-list.html">Shop Grid List</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="shop-list.html">Shop List</a></li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">Column Two</span>
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="product-details.html">Product Details</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="product-video.html">Video Product</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="product-details.html">Variable Product</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="product-left-sidebar.html">Product Left Sidebar</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="product-gallery.html">Product Gallery</a></li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">Column Three</span>
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="my-account.html">My Account</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="my-account-2.html">My Account 2</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="404.html">404 Page</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="login.html">Login Page</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="faq.html">Faq Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">Column Four</span>
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="compare.html">Compare Pages</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="checkout.html">Checkout page</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="checkout-2.html">Checkout Style 2</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="checkout-3.html">Checkout Style 3</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="checkout-4.html">Checkout Style 4</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li class="header__menu--items">
                                    <a class="header__menu--link" href="blog.html">Blog 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="blog.html" class="header__sub--menu__link">Blog Grid</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-details.html" class="header__sub--menu__link">Blog Details</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-left-sidebar.html" class="header__sub--menu__link">Blog Left Sidebar</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-right-sidebar.html" class="header__sub--menu__link">Blog Right Sidebar</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="header__menu--items">
                                    <a class="header__menu--link" href="#">Pages 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="about.html" class="header__sub--menu__link">About Us</a></li>
                                        <li class="header__sub--menu__items"><a href="contact.html" class="header__sub--menu__link">Contact Us</a></li>
                                        <li class="header__sub--menu__items"><a href="cart.html" class="header__sub--menu__link">Cart Page</a></li>
                                        <li class="header__sub--menu__items"><a href="portfolio.html" class="header__sub--menu__link">Portfolio Page</a></li>
                                        <li class="header__sub--menu__items"><a href="wishlist.html" class="header__sub--menu__link">Wishlist Page</a></li>
                                        <li class="header__sub--menu__items"><a href="login.html" class="header__sub--menu__link">Login Page</a></li>
                                        <li class="header__sub--menu__items"><a href="404.html" class="header__sub--menu__link">Error Page</a></li>
                                    </ul>
                                </li> -->
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="contact.html">Contact </a>  
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="<?= BASE_URL ?>">Account 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="<?= BASE_URL ?>?act=login" class="header__sub--menu__link">Login</a></li>
                                        <li class="header__sub--menu__items"><a href="<?= BASE_URL ?>?act=logout" class="header__sub--menu__link">Logout</a></li>
                                        <li class="header__sub--menu__items"><a href="<?= BASE_URL ?>?act=user-register" class="header__sub--menu__link">Register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>