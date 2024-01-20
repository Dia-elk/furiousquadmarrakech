<template>
    <Head>
        <title>Adventure Tours in Marrakech | Quad, Buggy, and Motocross Experiences</title>
        <meta name="description" content="Explore Marrakech with our thrilling adventure tours! Join us for Quad Marrakech adventures, Buggy tours, and Motocross experiences. Unforgettable off-road journeys await – book your adventure now!">
        <meta name="keywords" content="Quad Marrakech, Buggy Marrakech, Motocross Marrakech, Marrakech adventure tours, Off-road experiences, Excursions in Morocco">
    </Head>

    <MainLayout>
        <HeroSection/>
        <StartedPacks :packs="packs"/>
        <AboutSection/>
        <WhyUsSection/>
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

