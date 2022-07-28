<script setup>
/** Components */
import Authenticated from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3'
</script>
<template>
    <Head title="Messages" />
    <Authenticated>
        <template #page_title>
            Messages
        </template>
        <h1 class="organization__content--title organization__content--padding bold">Messages</h1>
        <div class="organization__content--padding">
            Messages
        </div>
    </Authenticated>
</template>
