<template>
    <Head>
        <title>Welcome</title>
    </Head>

    <MainLayout>
        <HeroSection/>
        <AboutSection/>
        <WhyUsSection/>
        <StartedPacks :packs="packs"/>
        <FAQ/>
        <ContactSection/>
    </MainLayout>

</template>

<script setup>
import HeroSection from "@/Components/sections/HeroSection.vue";
import {Head} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import {ref} from "vue";
import PackagesSection from "@/Components/sections/PackagesSection.vue";
import AboutSection from "@/Components/sections/AboutSection.vue";
import WhyUsSection from "@/Components/sections/WhyUsSection.vue";
import StartedPacks from "@/Components/sections/StartedPacks.vue";
import ContactSection from "@/Components/sections/ContactSection.vue";
import FAQ from "@/Components/sections/FAQ.vue";

defineProps({
    packs: Array,
})

</script>

