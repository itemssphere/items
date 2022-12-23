<script setup>
/**
 *   $(".account-control-btn").on("click", () => {
    $(".show-unauthed-account-controller").show();
  });
  $(".messages-content-header").on("click", () => {
    $(".show-unauthed-account-controller-messages").show();
  });
  $(".notifications-content-header").on("click", () => {
    $(".show-unauthed-account-controller-notifications").show();
  });
  $(document).mouseup(function (e) {
    const targetEl = $(".show-unauthed-account-controller");

    if (!targetEl.is(e.target) && targetEl.has(e.target).length === 0) {
      targetEl.hide();
    }
  });
  $(document).mouseup(function (e) {
    const targetEl = $(".show-unauthed-account-controller-messages");

    if (!targetEl.is(e.target) && targetEl.has(e.target).length === 0) {
      targetEl.hide();
    }
  });
  $(document).mouseup(function (e) {
    const targetEl = $(".show-unauthed-account-controller-notifications");

    if (!targetEl.is(e.target) && targetEl.has(e.target).length === 0) {
      targetEl.hide();
    }
  });
 * 
 */
import MobileBottomBar from '@/Fragnemts/MobileBottomBar.vue'
import Slider from '@/Fragnemts/Slider.vue'
</script>
<!-- Page header -->
<template>
    <MobileBottomBar />
    <header class="main-page-header">
        <div class="header-top">
            <span> Manage Your Property and Contribute to Sustainable Dvelopment </span>
            <img src="/image/svg/close.svg" alt="close icon" class="close-header-head" />
        </div>
        <div class="container desktop-header">
            <div class="header-content">
                <img src="/image/svg/header-logo.svg" class="convert-svg" alt="Logo" />
                <div class="header-search-block">
                    <input type="text" name="search" id="search-content" class="form-control-search"
                        placeholder="Search for anything…" />
                    <button class="start-search-btn-header">
                        <object data="/image/svg/loop.svg" width="26" height="26"></object>
                    </button>
                </div>
                <div class="header-buttons">
                    <div class="account-controler-header">
                        <div class="account-control-btn">
                            <div class="user-info-account-control">
                                <button class="header-avatar-image">
                                    <img src="/image/svg/header-btn/avatar.svg" alt="avatar" />
                                </button>
                                <div class="welcome-text-account-control">
                                    <p>Welcome</p>
                                    <span>Name</span>
                                </div>
                            </div>
                            <img src="/image/svg/header-btn/arrow.svg" alt="down icon" />
                        </div>
                        <div class="account-controller-dropdown-unauthorized show-unauthed-account-controller">
                            <div class="account-controller-dropdown-btns">
                                <button class="sign-in bold">Sign in</button>
                                <button class="register bold">Register</button>
                            </div>
                            <hr class="account-controller-dropdown-hr" />
                            <div class="language-switcher">
                                <div class="choose-language" style="background-image: url('/image/uk-flag.png')"
                                    data-name="en"></div>
                                <div class="choose-language" data-name="geo"
                                    style="background-image: url('/image/geo-flag.webp')"></div>
                            </div>
                            <hr class="account-controller-dropdown-hr" style="margin-bottom: 16px" />
                            <a href="#" class="account-controller-password-change">Password change</a>
                            <hr class="account-controller-dropdown-hr" style="margin-top: 16px" />
                            <ul class="account-controller-dropdown-menu-items">
                                <li><a href="#">View Profile</a></li>
                                <li><a href="#">Account Informaton</a></li>
                                <li><a href="#">My Social Projects</a></li>
                                <li><a href="#">My Products</a></li>
                                <li><a href="#">Sold</a></li>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">Delivery Addresses</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="add-new-content-header header-buttons-content">
                        <div class="add-new-content-btn"><span>+</span></div>
                    </div>
                    <div class="messages-content-header header-buttons-content">
                        <button class="header-btn-standard">
                            <img src="/image/svg/header-btn/mail.svg" alt="msg" />
                        </button>
                    </div>

                    <div class="account-controller-dropdown-unauthorized show-unauthed-account-controller-messages"
                        style="margin-top: 500px; margin-left: 1px; height: 430px; overflow: auto; z-index: 111111;">
                        <div class="account-controller-dropdown-btns fs18">Messages</div>
                        <hr class="account-controller-dropdown-hr" />
                        <hr class="account-controller-dropdown-hr" style="margin-bottom: 16px" />
                        <div class="messages-list-selectable">
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item"></div>
                                    <img src="/image/zoomer.png" alt="" class="message-sender-image-in-list"
                                        style="width: 57px; height: 57px;" />
                                    <div class="message-item-info">
                                        <p class="sender-name regular">Zoomer</p>
                                        <p class="latest-message regular">You: Madloba didi</p>
                                    </div>
                                </div>
                                <div class="read-message-in-list organization-messages-seen"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item unread-message"></div>
                                    <img src="/image/zoomer.png" alt="" class="message-sender-image-in-list"
                                        style="width: 57px; height: 57px;" />
                                    <div class="message-item-info">
                                        <p class="sender-name regular unread-text-messages-list-item">
                                            Chita
                                        </p>
                                        <p class="latest-message regular unread-text-messages-list-item">
                                            Chita: Nomeri momweret...
                                        </p>
                                    </div>
                                </div>
                                <div class="read-message-in-list"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                            <div class="messages-list-item active-chat">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item"></div>
                                    <img src="/image/zoomer.png" alt="" class="message-sender-image-in-list"
                                        style="width: 57px; height: 57px;" />
                                    <div class="messenger-active-user"></div>
                                    <div class="message-item-info">
                                        <p class="sender-name regular">Irakli Mazmishvili</p>
                                        <p class="latest-message regular">
                                            Irakli: mokled ra velodebi ...
                                        </p>
                                    </div>
                                </div>
                                <div class="read-message-in-list"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item"></div>
                                    <img src="/image/zoomer.png" style="width: 57px; height: 57px;" alt=""
                                        class="message-sender-image-in-list" />
                                    <div class="message-item-info">
                                        <p class="sender-name regular">Zoomer</p>
                                        <p class="latest-message regular">You: Madloba didi</p>
                                    </div>
                                </div>
                                <div class="read-message-in-list organization-messages-seen"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item unread-message"></div>
                                    <img src="/image/zoomer.png" style="width: 57px; height: 57px;" alt=""
                                        class="message-sender-image-in-list" />
                                    <div class="message-item-info">
                                        <p class="sender-name regular unread-text-messages-list-item">
                                            Chita
                                        </p>
                                        <p class="latest-message regular unread-text-messages-list-item">
                                            Chita: Nomeri momweret...
                                        </p>
                                    </div>
                                </div>
                                <div class="read-message-in-list"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                            <div class="messages-list-item active-chat">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item"></div>
                                    <img src="/image/zoomer.png" style="width: 57px; height: 57px;" alt=""
                                        class="message-sender-image-in-list" />
                                    <div class="messenger-active-user"></div>
                                    <div class="message-item-info">
                                        <p class="sender-name regular">Irakli Mazmishvili</p>
                                        <p class="latest-message regular">
                                            Irakli: mokled ra velodebi ...
                                        </p>
                                    </div>
                                </div>
                                <div class="read-message-in-list"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item"></div>
                                    <img src="/image/zoomer.png" style="width: 57px; height: 57px;" alt=""
                                        class="message-sender-image-in-list" />
                                    <div class="message-item-info">
                                        <p class="sender-name regular">Zoomer</p>
                                        <p class="latest-message regular">You: Madloba didi</p>
                                    </div>
                                </div>
                                <div class="read-message-in-list organization-messages-seen"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item unread-message"></div>
                                    <img src="/image/zoomer.png" alt="" class="message-sender-image-in-list"
                                        style="width: 57px; height: 57px;" />
                                    <div class="message-item-info">
                                        <p class="sender-name regular unread-text-messages-list-item">
                                            Chita
                                        </p>
                                        <p class="latest-message regular unread-text-messages-list-item">
                                            Chita: Nomeri momweret...
                                        </p>
                                    </div>
                                </div>
                                <div class="read-message-in-list"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                            <div class="messages-list-item active-chat">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item"></div>
                                    <img src="/image/zoomer.png" alt="" class="message-sender-image-in-list"
                                        style="width: 57px; height: 57px;" />
                                    <div class="messenger-active-user"></div>
                                    <div class="message-item-info">
                                        <p class="sender-name regular">Irakli Mazmishvili</p>
                                        <p class="latest-message regular">
                                            Irakli: mokled ra velodebi ...
                                        </p>
                                    </div>
                                </div>
                                <div class="read-message-in-list"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item"></div>
                                    <img src="/image/zoomer.png" alt="" class="message-sender-image-in-list"
                                        style="width: 57px; height: 57px;" />
                                    <div class="message-item-info">
                                        <p class="sender-name regular">Zoomer</p>
                                        <p class="latest-message regular">You: Madloba didi</p>
                                    </div>
                                </div>
                                <div class="read-message-in-list organization-messages-seen"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item unread-message"></div>
                                    <img src="/image/zoomer.png" style="width: 57px; height: 57px;" alt=""
                                        class="message-sender-image-in-list" />
                                    <div class="message-item-info">
                                        <p class="sender-name regular unread-text-messages-list-item">
                                            Chita
                                        </p>
                                        <p class="latest-message regular unread-text-messages-list-item">
                                            Chita: Nomeri momweret...
                                        </p>
                                    </div>
                                </div>
                                <div class="read-message-in-list"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                            <div class="messages-list-item active-chat">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item"></div>
                                    <img src="/image/zoomer.png" alt="" class="message-sender-image-in-list"
                                        style="width: 57px; height: 57px;" />
                                    <div class="messenger-active-user"></div>
                                    <div class="message-item-info">
                                        <p class="sender-name regular">Irakli Mazmishvili</p>
                                        <p class="latest-message regular">
                                            Irakli: mokled ra velodebi ...
                                        </p>
                                    </div>
                                </div>
                                <div class="read-message-in-list"
                                    style="background-image: url('/image/zoomer.png')"></div>
                            </div>
                        </div>
                    </div>

                    <div class="account-controller-dropdown-unauthorized show-unauthed-account-controller-notifications"
                        style="margin-top: 500px; margin-left: 1px; height: 430px; overflow: auto; z-index: 111111;">
                        <div class="account-controller-dropdown-btns fs18">Notifications</div>
                        <hr class="account-controller-dropdown-hr" />
                        <hr class="account-controller-dropdown-hr" style="margin-bottom: 16px" />
                        <div class="messages-list-selectable">
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item"></div>
                                    <img src="/image/zoomer.png" alt="" class="message-sender-image-in-list"
                                        style="width: 57px; height: 57px;" />
                                    <div class="message-item-info">
                                        <p class="notification-creator regular"
                                            style="width: 240px; color: #707070; margin-bottom: 7px;">Irakli commented
                                            on your social program Justice for Jake Blake</p>
                                        <p class="notification-date regular fs13" style="color: #707070">13 hours ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item unread-message"></div>
                                    <img src="/image/zoomer.png" alt="" class="message-sender-image-in-list"
                                        style="width: 57px; height: 57px;" />
                                    <div class="message-item-info">
                                        <p class="notification-creator regular"
                                            style="width: 240px; color: #707070; margin-bottom: 7px;">Irakli commented
                                            on your social program Justice for Jake Blake</p>
                                        <p class="notification-date regular fs13" style="color: #707070">13 hours ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item unread-message"></div>
                                    <img src="/image/zoomer.png" alt="" class="message-sender-image-in-list"
                                        style="width: 57px; height: 57px;" />
                                    <div class="message-item-info">
                                        <p class="notification-creator regular"
                                            style="width: 240px; color: #707070; margin-bottom: 7px;">Irakli commented
                                            on your social program Justice for Jake Blake</p>
                                        <p class="notification-date regular fs13" style="color: #707070">13 hours ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item unread-message"></div>
                                    <img src="/image/zoomer.png" style="width: 57px; height: 57px;" alt=""
                                        class="message-sender-image-in-list" />
                                    <div class="message-item-info">
                                        <p class="notification-creator regular"
                                            style="width: 240px; color: #707070; margin-bottom: 7px;">Irakli commented
                                            on your social program Justice for Jake Blake</p>
                                        <p class="notification-date regular fs13" style="color: #707070">13 hours ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item unread-message"></div>
                                    <img src="/image/zoomer.png" style="width: 57px; height: 57px;" alt=""
                                        class="message-sender-image-in-list" />
                                    <div class="message-item-info">
                                        <p class="notification-creator regular"
                                            style="width: 240px; color: #707070; margin-bottom: 7px;">Irakli commented
                                            on your social program Justice for Jake Blake</p>
                                        <p class="notification-date regular fs13" style="color: #707070">13 hours ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="messages-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="unread-messages-item unread-message"></div>
                                    <img src="/image/zoomer.png" alt="" style="width: 57px; height: 57px;"
                                        class="message-sender-image-in-list" />
                                    <div class="message-item-info">
                                        <p class="notification-creator regular"
                                            style="width: 240px; color: #707070; margin-bottom: 7px;">Irakli commented
                                            on your social program Justice for Jake Blake</p>
                                        <p class="notification-date regular fs13" style="color: #707070">13 hours ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="notifications-content-header header-buttons-content">
                        <button class="header-btn-standard">
                            <img src="/image/svg/header-btn/zari.svg" alt="nots" />
                        </button>
                    </div>
                    <div class="favorite-content-header header-buttons-content">
                        <button class="header-btn-standard">
                            <img src="/image/svg/header-btn/heart.svg" alt="favorite" />
                        </button>
                    </div>
                    <div class="cart-content-header header-buttons-content">
                        <button class="header-btn-standard">
                            <img src="/image/svg/header-btn/shop.svg" alt="card" />
                        </button>
                    </div>
                </div>
            </div>
            <nav class="header-show-sections-desktop">
                <ul class="nav-bar-list">
                    <li class="header-pages-home">
                        <object data="/image/svg/menu/home.svg" height="16px"></object>
                        <p class="navbar-desktop-text">Home</p>
                    </li>
                    <li class="header-pages-market">
                        <object data="/image/svg/menu/market.svg" height="16px"></object>
                        <p class="navbar-desktop-text">Market</p>
                    </li>
                    <li class="header-pages-shop">
                        <object data="/image/svg/menu/shop.svg" height="16px"></object>
                        <p class="navbar-desktop-text">Shop</p>
                    </li>
                    <li class="header-pages-social-one">
                        <object data="/image/svg/menu/social1.svg" height="16px"></object>
                        <p class="navbar-desktop-text">Charities & NPOs</p>
                    </li>
                    <li class="header-pages-social">
                        <object data="/image/svg/menu/social.svg" height="16px"></object>
                        <p class="navbar-desktop-text">Social Programs</p>
                    </li>
                    <li class="header-pages-news">
                        <object data="/image/svg/menu/news.svg" height="16px"></object>
                        <p class="navbar-desktop-text">News</p>
                    </li>
                </ul>
                <div class="navbar-redirect-links">
                    <a href="/about">About Us</a>
                    <a href="/help">Help&Contact</a>
                </div>
            </nav>
        </div>

        <div class="header-mobile mobile-view">
            <div class="header-mobile-item mobile-header-home">
                <div class="header-mobile-items-block">
                    <object data="/image/svg/menu/home.svg" height="22px"></object>
                </div>
                <p class="header-mobile-item-title" style="visibility: hidden">Home</p>
            </div>
            <div class="vr-line"></div>
            <div class="header-mobile-item mobile-header-market">
                <div class="header-mobile-items-block">
                    <object data="/image/svg/menu/market.svg" height="22px"></object>
                </div>
                <p class="header-mobile-item-title" style="visibility: hidden">Market</p>
            </div>
            <div class="vr-line"></div>
            <div class="header-mobile-item mobile-header-shop">
                <div class="header-mobile-items-block">
                    <object data="/image/svg/menu/shop.svg" height="22px"></object>
                </div>
                <p class="header-mobile-item-title" style="visibility: hidden">Shop</p>
            </div>
            <div class="vr-line"></div>
            <div class="header-mobile-item mobile-header-social-one">
                <div class="header-mobile-items-block">
                    <object data="/image/svg/menu/social1.svg" height="22px"></object>
                </div>
                <p class="header-mobile-item-title" style="visibility: hidden">Social</p>
            </div>
            <div class="vr-line"></div>
            <div class="header-mobile-item mobile-header-social">
                <div class="header-mobile-items-block">
                    <object data="/image/svg/menu/social.svg" height="22px"></object>
                </div>
                <p class="header-mobile-item-title" style="visibility: hidden">Social</p>
            </div>
            <div class="vr-line"></div>
            <div class="header-mobile-item mobile-header-news">
                <div class="header-mobile-items-block">
                    <object data="/image/svg/menu/news.svg" height="22px"></object>
                </div>
                <p class="header-mobile-item-title" style="visibility: hidden">News</p>
            </div>
        </div>

        <div class="header-bottom-section-mobile mobile-view">
            <img src="/image/svg/header-logo.svg" class="logo-on-mobile" alt="Logo" />
            <button class="show-filter-mobile-view-btn">
                <img src="/image/svg/filter-icon.svg" alt="filter icon" class="categories-icon-header-mobile-view" />
                Filters
            </button>
            <button class="show-categories-mobile-view">
                <img src="/image//svg/categories-icon.svg" alt="categories"
                    class="categories-icon-header-mobile-view" />
                Categories
            </button>
        </div>
        <div class="show-only-logo">
            <img src="/image/svg/popup-back-btn.svg" alt="back" class="header-back" />
            <div class="logo-on-only-logo-header">
                <img src="/image/svg/header-logo.svg" class="convert-svg" alt="Logo" />
            </div>
        </div>

        <div class="header-search-block-mobile mobile-view">
            <input type="text" name="search" id="search-content-mobile" class="form-control-search-mobile"
                placeholder="Search for anything…" />
            <button class="start-search-btn-header-mobile">
                <object data="/image/svg/loop.svg" width="26" height="26"></object>
            </button>
        </div>
    </header>
    <Slider />
</template>



