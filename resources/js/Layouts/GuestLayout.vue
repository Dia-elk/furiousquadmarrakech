<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full h-full absolute top-0 ">
            <img src="images/heroBg.jpg" class="w-full h-full object-cover z-0 hidden md:block" alt="quad and motocross in marrakech">
            <img src="images/heroBgMobile.jpg" class="w-full h-full object-cover z-0 md:hidden block" alt="quad and motocross in marrakech">
        </div>
        <div>
            <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 z-10 bg-white/20 backdrop-blur-sm  shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
