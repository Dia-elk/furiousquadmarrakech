<template>
    <Head>
        <title>Welcome</title>
    </Head>

    <MainLayout>
        <HeroSection/>
        <AboutSection/>
    </MainLayout>

</template>

<script setup>
import HeroSection from "@/Components/sections/HeroSection.vue";
import {Head} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import {ref} from "vue";
import PackagesSection from "@/Components/sections/PackagesSection.vue";
import AboutSection from "@/Components/sections/AboutSection.vue";

defineProps({
    packs: Array,
})

</script>

