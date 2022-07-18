<script setup>
import LanguageSwitcher from "@/Components/PageParts/Components/LanguageSwitcher.vue"
const langs = ['en', 'ge']
</script>

<template>
    <div class="header__head">
        <div class="container header__head--container d-flex align-items-center">
            <h3 class="header__head--text regular">
                <p>{{ $t('components.heading.title') }}</p>
            </h3>
            <LanguageSwitcher custom_class="header__head--lang" :langs="langs" />
        </div>
    </div>
</template>