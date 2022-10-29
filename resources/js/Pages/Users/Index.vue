<template>
    <Head>
        <title>Users</title>
        <meta name="title" content="Users Page" head-key="title">
        <meta name="description" content="Users Page Content" head-key="description">
    </Head>
    <div class="flex justify-between mb-6">
        <h1 class="text-3xl">Users</h1>
        <input v-model="search" type="text" placeholder="search ..." class="border px-3 rounded-lg">
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="(user,index) in users.data" :key="index">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img
                                                class="h-10 w-10 rounded-full"
                                                 :src="user.avatar"
                                                 :alt="user.name"
                                            >
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ user.name }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ user.email }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800" :class="{ 'bg-red-600  text-red-100': user.is_active == false }">
                                        {{ user.is_active == true ? "Active" : "Inactive"}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-600 text-blue-100" :class="{ ' bg-yellow-600 text-yellow-100': user.role == 'SuperAdmin' }">
                                        {{ user.role }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <Link :href="`/users/${user.id}/edit`" class="text-indigo-600 hover:text-indigo-900">
                                        <font-awesome-icon class="fa-solid fa-coffee fa-xl pr-4  text-blue-600" icon="pen-to-square" />
                                    </Link>
                                    <Link :href="`/users/${user.id}/show`" class="text-indigo-600 hover:text-indigo-900">
                                        <font-awesome-icon class="fa-solid fa-coffee fa-xl pr-4  text-yellow-600" icon="eye" />
                                    </Link>
                                    <Link :href="`/users/${user.id}/delete`" class="text-indigo-600 hover:text-indigo-900">
                                        <font-awesome-icon class="fa-solid fa-coffee fa-xl pr-4  text-red-600" icon="trash" />
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <Paginator :links="users.links" />
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3'
    import { Inertia } from '@inertiajs/inertia';
    import Paginator from '../../Shared/Paginator.vue';
    import { ref, watch } from 'vue';

    let props = defineProps({
        users: Object,
        filters: Object
    });

    let search = ref(props.filters.search);

    watch(search, value => {
        Inertia.get('/users', { search: value }, {
            preserveState: true,
            replace: true
        });
    })
</script>
