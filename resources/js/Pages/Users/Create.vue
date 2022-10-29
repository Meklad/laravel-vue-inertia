<template>
    <Head title="Create User" />
    <h1 class="text-3xl">Create New User</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <div class="md-6">
            <label for="name" class="block md-2 uppercase font-bold text-xs text-gray-700 pb-3">
                Username
            </label>
            <input v-model="form.name" type="text" name="name" id="name" class="border brorder-gray-400 p-2 w-full" placeholder="Enter Username ..." required>
        </div>

        <div class="md-6">
            <label for="email" class="block md-2 uppercase font-bold text-xs text-gray-700 pb-3 pt-3">
                Email
            </label>
            <input v-model="form.email" type="email" name="email" id="email" class="border brorder-gray-400 p-2 w-full" placeholder="Enter Email Address ..." required>
        </div>

        <div class="md-6">
            <label for="password" class="block md-2 uppercase font-bold text-xs text-gray-700 pb-3 pt-3">
                Password
            </label>
            <input v-model="form.password" type="password" name="password" id="password" class="border brorder-gray-400 p-2 w-full" placeholder="Enter Password Address ..." required>
        </div>

        <div class="md-6">
            <label for="avatar" class="block md-2 uppercase font-bold text-xs text-gray-700 pb-3 pt-3">
                Avatar URL
            </label>
            <input v-model="form.avatar" type="text" name="avatar" id="avatar" class="border brorder-gray-400 p-2 w-full" placeholder="Enter Avatar Url ...">
        </div>

        <div class="md-6 grid grid-cols-2 gap-2 pt-3">
            <div>
                <label for="role" class="block md-2 uppercase font-bold text-xs text-gray-700 pb-3 pt-3">
                    User Type
                </label>
                <select v-model="form.role" name="role" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a User Type</option>
                    <option value="Editor">Editor</option>
                    <option value="User">User</option>
                </select>
            </div>
            <div>
                <label for="active" class="block md-2 uppercase font-bold text-xs text-gray-700 pb-3 pt-3">
                    Disable User
                </label>
                <select v-model="form.active" name="active" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a Statue Of User</option>
                    <option value="true">Active</option>
                    <option value="false">Inactive</option>
                </select>
            </div>
        </div>

        <div class="md-6 pb-3 pt-3">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Save
            </button>
        </div>
    </form>
</template>

<script setup>
    import { reactive } from 'vue';
    import { Inertia } from '@inertiajs/inertia';

    let form = reactive({
        name: '',
        email: '',
        password: '',
        role: '',
        active: '',
        avatar: ''
    });

    let submit = () => {
        Inertia.post('/users', form);
    };
</script>
