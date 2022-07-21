<script setup>
/** Components */
import DownloadAppSection from './Sections/DownloadAppSection.vue'
import TermsList from './Navigation/Lists/TermsList.vue'
import TermsListMobile from './Navigation/Lists/TermsListMobile.vue'
import PaymentMethodsMobile from './Navigation/Pickers/PaymentMethodsMobile.vue'
import ContactUs from './Blocks/ContactUs.vue'
import FindUs from './Blocks/FindUs.vue'
import ProfilePopup from './Popups/ProfilePopup.vue'
import LoginPopup from './Popups/LoginPopup.vue'
import CardPopup from './Popups/CardPopup.vue'
import WishlistPopup from './Popups/WishlistPopup.vue'
</script>
<!-- Footer Template -->
<template>
    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="row flex-wrap-reverse flex-wrap">
                    <div class="col-lg-5">
                        <div class="footer__content--left">
                            <DownloadAppSection />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-6 col-lg-12">
                                        <h2 class="footer__title d-none d-lg-block regular">TERMS</h2>
                                        <TermsList />
                                    </div>
                                    <TermsListMobile />
                                </div>
                            </div>
                            <PaymentMethodsMobile />
                            <div class="col-lg-4">
                                <h2 class="footer__title d-none d-lg-block regular">CONTACT US</h2>
                                <ContactUs />
                            </div>
                            <div class="col-lg-4">
                                <h2 class="footer__title d-none d-lg-block regular">FIND US</h2>
                                <FindUs />
                                <div class="footer__payment d-none d-lg-block">
                                    <h2 class="footer__payment--title regular">Payment method</h2>
                                    <div class="d-flex">
                                        <img src="/assets/img/svg/footer-icon/visa.svg" alt="" class="footer__payment--icon">
                                        <img src="/assets/img/svg/footer-icon/master.svg" alt="" class="footer__payment--icon">
                                        <img src="/assets/img/svg/footer-icon/cash.svg" alt="" class="footer__payment--icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Popups -->
    <ProfilePopup />
    <LoginPopup />
    <CardPopup />
    <WishlistPopup />
</template>