<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import FrontPage from '@/Layouts/FrontPage.vue'
</script>
<template>
    <Head title="Contact Page" />
    <FrontPage>
        <div class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="contact-page--left">
                            <h1 class="contact-page--title bold">CONTACT US</h1>
                            <form class="contact-page__form">
                                <label class="contact-page__form--label">
                                    <h1 class="contact-page__form--title regular">Full name</h1>
                                    <input type="text" class="contact-page__form--input" >
                                </label>
                                <label class="contact-page__form--label">
                                    <h1 class="contact-page__form--title regular">E-mail</h1>
                                    <input type="text" class="contact-page__form--input" >
                                </label>
                                <label class="contact-page__form--label">
                                    <h1 class="contact-page__form--title regular">Subject</h1>
                                    <input type="text" class="contact-page__form--input" >
                                </label>
                                <label class="contact-page__form--label">
                                    <h1 class="contact-page__form--title regular">Mesage</h1>
                                    <textarea type="text" rows="5" class="contact-page__form--input contact-page__form--textarea"></textarea>
                                </label>
                                <div class="d-flex align-items-center">
                                    <button class="contact-page__form--btn bold">Send</button>
                                    <p class="contact-page__form--done regular">Message sent successfully</p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.3125097062943!2d44.73999331567787!3d41.71377488366008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4044734070c695c9%3A0xf1488fa3aace5385!2s16%2C%2016%20Givi%20Svanidze%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1658334679317!5m2!1sen!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </FrontPage>
</template>