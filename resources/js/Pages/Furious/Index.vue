<template>
    <Head>
        <title>Furious Packs</title>
    </Head>
    <MainLayout>
       <FuriousHeroSection :title="'Furious Pack'" :description="'Welcome to Furious Packs Customization, where your adventure takes center stage. With our customizable Furious Packs, you\'re in control of crafting the perfect expedition. Select from a variety of thrilling activities, set the duration that suits your schedule, and personalize your experience with optional amenities. At Furious Quad Marrakech.'"/>

    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import FuriousHeroSection from "@/Components/sections/FuriousHeroSection.vue";
import {Head} from "@inertiajs/vue3";
</script>
