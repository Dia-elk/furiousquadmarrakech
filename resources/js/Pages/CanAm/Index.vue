<template>
    <Head>
        <link rel="canonical" href="https://furiousquadmarrakech.com/buggy-marrakech" />
        <title>Can-Am Marrakech | Exciting Off-Road Adventures in Morocco</title>
        <meta name="description" content="Explore the thrill of Can-Am Adventures! Pilot our high-performance Can-Am vehicles across a variety of terrains and experience exhilarating escapades. Whether navigating through desert sands or winding mountain paths, every ride promises unmatched excitement.">
        <meta name="keywords" content="Can-Am Marrakech, Marrakech off-road tours, Can-Am adventures Morocco, Off-roading experiences, Marrakech excursions">
    </Head>
    <VehicleLayout :title="'Can-Am Marrakech'"
                   :description="'Explore the thrill of Can-Am Adventures! Pilot our high-performance Can-Am vehicles across a variety of terrains and experience exhilarating escapades. Whether navigating through desert sands or winding mountain paths, every ride promises unmatched excitement.'"
                   :image="'images/heroCanAmBg.avif'"
                   :mobile-image="'images/heroCanAmBg.avif'"
    >
        <PackagesSection :packs="packs"  :title="'Can-AM Marrakech'"/>
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
