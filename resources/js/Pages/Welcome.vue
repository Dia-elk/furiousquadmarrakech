<template>
    <Head>
        <title>Welcome</title>
    </Head>

    <MainLayout>
        <HeroSection/>

    </MainLayout>

</template>

<script setup>
import HeroSection from "@/Components/sections/HeroSection.vue";
import {Head} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import {ref} from "vue";
import PackagesSection from "@/Components/sections/PackagesSection.vue";
defineProps({
    packs:Array,
})

</script>

