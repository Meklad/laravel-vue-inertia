<template>
    <Head>
        <title>YoDa</title>
        <meta name="title" content="Yoda Market" head-key="title">
        <meta name="description" content="Yoda Market Content" head-key="description">
    </Head>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg">
                    {{ appName }}
                </h1>
                <p class="text-ms ml-1">
                    Welcome Back, {{ user.name }}
                </p>
            </div>
            <Nav />
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />
        </div>
    </section>
</template>

<script>
    import Nav from '../Shared/Nav.vue';

    export default {
        components: {
            Nav
        },
        computed: {
            appName() {
                return this.$page.props.appName
            },
            user() {
                return this.$page.props.user
            }
        }
    };
</script>
