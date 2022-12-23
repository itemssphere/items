<!-- profile popup mobile template -->
<template>
    <div class="popup open-active d-lg-none align-items-center justify-content-center" data-active="mobile-popup-menu">
        <div class="popup__container">
            <button class="popup__close close-click" data-active="mobile-popup-menu">
                <img src="/assets/img/svg/popup-close.svg" alt="" class="d-none d-lg-block">
                <img src="/assets/img/svg/popup-back-btn.svg" alt="" class="d-block d-lg-none">
            </button>
            <div class="mobile-profile">
                <div class="profile__head">
                    <h1 class="profile__head--title bold">Davit Gelashvili</h1>
                    <span class="profile__head--mail regular d-flex justify-content-between">
                        <p>
                            datoogelashvili@gmail.com
                        </p>
                        <button class="profile__logout--btn regular">Log Out</button>
                    </span>
                </div>
                <div class="profile__head d-flex">
                    <button class="profile__head--signin bold btn click-open" data-active="login-popup">
                        Sign in
                    </button>
                    <button class="profile__head--regis bold btn click-open" data-active="login-popup">
                        Register
                    </button>
                </div>
                <ul class="profile__menu regular">
                    <li class="profile__menu--li">
                        <a href="" class="profile__menu--link">Change Password</a>
                    </li>
                </ul>
                <ul class="profile__menu regular">
                    <li class="profile__menu--li">
                        <a href="" class="profile__menu--link">Profile</a>
                    </li>
                    <li class="profile__menu--li">
                        <a href="" class="profile__menu--link">Account Information</a>
                    </li>
                    <li class="profile__menu--li">
                        <a href="" class="profile__menu--link">My Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>