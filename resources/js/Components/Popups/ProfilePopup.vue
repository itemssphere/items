<template>
    <div class="popup open-active d-lg-none align-items-center justify-content-center" data-active="mobile-popup-menu">
        <div class="popup__container">
            <button class="popup__close close-click" data-active="mobile-popup-menu">
                <img src="/assets/img/svg/popup-close.svg" alt="" class="d-none d-lg-block">
                <img src="/assets/img/svg/popup-back-btn.svg" alt="" class="d-block d-lg-none">
            </button>
            <div class="mobile-profile">
                <h1 class="sign-in__title bold">Profile</h1>
                <div class="profile__head">
                    <h1 class="profile__head--title bold">Davit Gelashvili</h1>
                    <p class="profile__head--mail regular">datoogelashvili@gmail.com</p>
                </div>
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
                <ul class="profile__menu regular">
                    <li class="profile__menu--li">
                        <a href="" class="profile__menu--link">Message</a>
                    </li>
                    <li class="profile__menu--li">
                        <a href="" class="profile__menu--link">Change Password</a>
                    </li>
                </ul>
                <div class="profile__logout">
                    <button class="profile__logout--btn regular">Log Out</button>
                </div>
            </div>
        </div>
    </div>
</template>