<template>
    <Head>
        <title>Buggy Marrakech Tours | Exciting Off-Road Adventures in Morocco</title>
        <meta name="description" content="Experience the thrill of off-road adventure with our Buggy Marrakech tours! Explore the scenic beauty of Morocco on our guided buggy tours. Book your adrenaline-packed journey now.">
        <meta name="keywords" content="Buggy Marrakech, Marrakech off-road tours, Buggy adventures Morocco, Off-roading experiences, Marrakech excursions">
    </Head>
    <VehicleLayout :title="'Buggy'"
                   :description="'Discover the excitement of Buggy Adventures! Drive our rugged buggies through diverse landscapes and embark on thrilling journeys. From desert dunes to scenic trails, it\'s an adventure like no other. Book your Buggy Adventure today!'"
                   :image="'images/heroBuggyBg.jpg'"
                   :mobile-image="'images/heroBuggyBgMobile.jpg'"
    >
        <PackagesSection :packs="packs"  :title="'Buggy Packs'"/>
    </VehicleLayout>
</template>

<script setup>

import PackagesSection from "@/Components/sections/PackagesSection.vue";

import {Head} from "@inertiajs/vue3";
import VehicleLayout from "@/Layouts/VehicleLayout.vue";
import FAQ from "@/Components/sections/FAQ.vue";
import ContactSection from "@/Components/sections/ContactSection.vue";
import PackDescriptions from "@/Components/PackDescriptions.vue";

defineProps({
    packs: Array,
})
</script>
