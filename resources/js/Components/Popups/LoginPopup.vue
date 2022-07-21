<template>
    <div class="popup open-active align-items-center justify-content-center" data-active="login-popup">
        <div class="popup__container">
            <button class="popup__close close-click" data-active="login-popup">
                <img src="/assets/img/svg/popup-close.svg" alt="" class="d-none d-lg-block">
                <img src="/assets/img/svg/popup-back-btn.svg" alt="" class="d-block d-lg-none">
            </button>
            <div class="sign-in login">
                <h1 class="sign-in__title bold">Sign in</h1>
                <form class="sign-in__form">
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="text" class="sign-in__form--input regular" placeholder="Email">
                        <img src="/assets/img/svg/username.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="password" class="sign-in__form--input regular" placeholder="Password">
                        <img src="/assets/img/svg/key.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <li class="sign-in__forgot d-flex justify-content-end">
                        <a href="" class="regular">Forgot Password?</a>
                    </li>
                    <button class="sign-in__form--btn bold">Sign in</button>
                </form>
                <div class="sign-in__or d-flex align-items-center justify-content-center">
                    <span class="sign-in__or--text regular">Or</span>
                    <button class="sign-in__or--btn"><img src="/assets/img/svg/login-google-btn.svg" alt=""></button>
                    <button class="sign-in__or--btn"><img src="/assets/img/svg/login-fb-btn.svg" alt=""></button>
                </div>
                <div class="sign-in__register d-flex align-items-center justify-content-between">
                    <span class="sign-in__register--text regular">New customer?</span>
                    <button class="sign-in__register--btn register-open bold">Register</button>
                </div>
            </div>
            <div class="sign-in register">
                <h1 class="sign-in__title bold">Registration as:</h1>
                <div class="register__btns d-flex justify-content-between">
                    <button data-step="1" class="register__btns--btn active regular d-flex justify-content-center align-items-center">
                        Individual
                    </button>
                    <button data-step="2" class="register__btns--btn regular d-flex justify-content-center align-items-center">
                        Shop
                    </button>
                    <button data-step="3" class="register__btns--btn regular d-flex justify-content-center align-items-center">
                        Charity
                    </button>
                </div><!-- tep nav end -->
                <form data-step="1" class="sign-in__form register__step active">
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="text" class="sign-in__form--input regular" placeholder="Full name">
                        <img src="/assets/img/svg/username.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="text" class="sign-in__form--input regular" placeholder="Email">
                        <img src="/assets/img/svg/input-mail.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="password" class="sign-in__form--input regular" placeholder="Password">
                        <img src="/assets/img/svg/key.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="password" class="sign-in__form--input regular" placeholder="Password">
                        <img src="/assets/img/svg/key.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <button class="sign-in__form--btn bold">Create Account</button>
                </form><!-- step end -->
                <form data-step="2" class="sign-in__form register__step">
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="text" class="sign-in__form--input regular" placeholder="Company name">
                        <img src="/assets/img/svg/username.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="text" class="sign-in__form--input regular" placeholder="Email">
                        <img src="/assets/img/svg/input-mail.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="password" class="sign-in__form--input regular" placeholder="Password">
                        <img src="/assets/img/svg/key.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="password" class="sign-in__form--input regular" placeholder="Password">
                        <img src="/assets/img/svg/key.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <button class="sign-in__form--btn bold">Create Account</button>
                </form><!-- step end -->
                <form data-step="3" class="sign-in__form register__step">
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="text" class="sign-in__form--input regular" placeholder="Name">
                        <img src="/assets/img/svg/username.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="text" class="sign-in__form--input regular" placeholder="Email">
                        <img src="/assets/img/svg/input-mail.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="password" class="sign-in__form--input regular" placeholder="Password">
                        <img src="/assets/img/svg/key.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <label class="sign-in__form--label d-flex align-items-center">
                        <input type="password" class="sign-in__form--input regular" placeholder="Password">
                        <img src="/assets/img/svg/key.svg" alt="" class="sign-in__form--icon">
                    </label>
                    <button class="sign-in__form--btn bold">Create Account</button>
                </form><!-- step end -->
                <div class="register__text regular">
                    <p class="sign-in__register--text">By creating account, you agree to the</p>
                    <a href="">ItemsSphere's Free Membership Agreement</a>
                    <p class="sign-in__register--text">and <a href="">Privacy Policy</a></p>
                </div>
                <div class="register__link">
                    <span class="sign-in__register--text regular">Have account?</span>
                    <button class="register__link--btn register-open bold">Sign in</button>
                </div>
            </div>
        </div>
    </div>
</template>