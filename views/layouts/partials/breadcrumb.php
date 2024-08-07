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