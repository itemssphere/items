<script setup>
/** Components */
import Header from '@/Components/Header.vue'
import Footer from '@/Components/Footer.vue'
import OrganizationMenu from '@/Components/Navigation/Menus/OrganizationMenu.vue'
/** Constants */
const pageName = 'home'
</script>
<!-- Authenticated Layout Template -->
<template>
    <Header :pageName="pageName"/>
    <div class="container">
        <ul class="page__navigation--links d-none d-lg-flex">
            <li class="page__navigation--link regular">
                <a href="">Home</a>
            </li>
            <li class="page__navigation--link regular">
                <a href="">Home</a>
            </li>
        </ul>
        <div class="page__title regular d-none d-lg-block">
            <slot name="page_title" />
        </div>
        <div class="organization">
            <div class="organization__header">
                <div class="organization__header--cover">
                    <img src="/assets/img/organization-cover.png" alt="">
                </div>
                <div class="row">
                    <div class="col-4 col-lg-3">
                        <div class="organization__header--logo d-flex align-items-center justify-content-center">
                            <img src="/assets/img/zoomer.png" alt="">
                        </div>
                    </div>
                    <div class="col-8 col-lg-9">
                        <h1 class="organization__header--title bold d-none d-lg-block">
                            Organization Name
                        </h1>
                        <div class="d-flex">
                            <div class="organization__header--follow click-open regular" data-active="follow-popup">
                                <p>20</p>
                                <span>Followers</span>
                            </div>
                            <div class="organization__header--follow click-open regular" data-active="follow-popup">
                                <p>15</p>
                                <span>Following</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex d-lg-none">
                        <h1 class=" bold">
                            Organization Name
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-none d-lg-block col-lg-3">
                    <OrganizationMenu />
                </div>
                <div class="col-12 col-lg-9">
                    <div class="organization__content">
                        <!-- Default Slot -->
                        <slot />
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <Footer />
</template>
