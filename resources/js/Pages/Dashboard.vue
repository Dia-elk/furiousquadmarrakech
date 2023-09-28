<script setup>
import { Head } from '@inertiajs/vue3';
import {Link} from "@inertiajs/vue3";
import MyButton from "@/Components/MyButton.vue";
</script>

<template>
    <Head title="Dashboard" />
    <div class="h-screen flex justify-center items-center text-white">
        Dashboard
        <Link :href="route('logout')" method="post">
        <MyButton>
            Logout
        </MyButton>
    </Link>
    </div>
</template>
