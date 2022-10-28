<template>
    <h1 class="text-4xl font-bold">Users</h1>

    <Nav />

    <div style="margin-top: 600px">
        <p>The Current Time is {{ time }}.</p>
        <Link href="/users" class="text-blue-500" preserve-scroll>
            Refresh
        </Link>
    </div>
</template>

<script>
    import { Link } from "@inertiajs/inertia-vue3"
    import Nav from '../Shared/Nav';

    export default {
        props: {
            time: String
        },
        components: {
            Link,
            Nav
        },
    };
</script>
