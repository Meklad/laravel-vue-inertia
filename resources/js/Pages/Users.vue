<template>
    <Head>
        <title>Users</title>
        <meta name="title" content="Users Page" head-key="title">
        <meta name="description" content="Users Page Content" head-key="description">
    </Head>
    <h1 class="text-3xl">
        Users
    </h1>
    <ul>
        <li v-for="(user, index) in users" :key="index" v-text="user.name"></li>
    </ul>
</template>

<script setup>
    defineProps({users: Array})
</script>
