<template>
    <Head>
        <title>Users</title>
        <meta name="title" content="Users Page" head-key="title">
        <meta name="description" content="Users Page Content" head-key="description">
    </Head>
    <h1 class="text-3xl">
        Users
    </h1>

    <div style="margin-top: 600px">
        <p>The Current Time is {{ time }}.</p>
        <Link href="/users" class="text-blue-500" preserve-scroll>
            Refresh
        </Link>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    defineProps({time: String})
</script>
