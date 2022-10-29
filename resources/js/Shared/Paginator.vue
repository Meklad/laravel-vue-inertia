<template>
    <div class="mt-6">
        <Component
            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
            :class="link.url ? '' : 'bg-white border-gray-500 text-gray-700 hover:text-gray-500 hover:bg-white hover:border-gray-500'"
            :is="link.url ? Link : 'span'"
            v-for="(link, index) in links"
            :key="index"
            :href="link.url"
            v-html="link.label"
        />
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3'
    defineProps({links: Object})
</script>
