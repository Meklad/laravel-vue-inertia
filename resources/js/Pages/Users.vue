<template>
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

<script>
    import Layout from '../Shared/Layout.vue';
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        layout: Layout,
        components: {
            Link
        },
        props: {
            time: String
        }
    };
</script>
