<script setup>
import SocialProgramItem from './SocialProgramItem.vue'
</script>
<!-- ... -->
<template>
    <div class="social-programs-container">
        <div class="social-programs-background">
            <div class="social-programs-content">
                <div class="social-program-text-section">
                    <h2 class="social-program-title bold">Social Programs</h2>
                    <h3 class="social-program-level-two-title bold">Lorem ipsum</h3>
                    <p class="social-program-description-text">We used light green and blue colors that match the
                        company identity. The app provides users with different types of statistics on products and
                        sales. To make this data easy to understand, we visualized it with charts and</p>
                    <button class="view-all-social-program">View all</button>
                </div>
            </div>
            <div class="social-program-items-list">
                <SocialProgramItem class="social-program-item" />
                <SocialProgramItem class="social-program-item" />
                <SocialProgramItem class="social-program-item" />
                <SocialProgramItem class="social-program-item" />
                <SocialProgramItem class="social-program-item" />
            </div>
        </div>
    </div>
</template>