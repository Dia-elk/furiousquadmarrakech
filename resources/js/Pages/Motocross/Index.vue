<template>
    <Head>
        <link rel="canonical" href="https://furiousquadmarrakech.com/motocross-marrakech" />
        <title>Motocross Marrakech | Thrilling Dirt Bike Adventures in Morocco</title>
        <meta name="description" content="Embark on an adrenaline-fueled journey with Motocross Marrakech! Explore the rugged terrains of Morocco on our exhilarating dirt bike adventures. Book your motocross experience now.">
        <meta name="keywords" content="Motocross Marrakech, Marrakech dirt bike tours, Off-road motocross adventures, Extreme biking experiences, Marrakech excursions">
    </Head>

    <VehicleLayout :title="'Motocross Marrakech'"
                   :description="'Experience the adrenaline rush of Motocross Adventures! Ride high-speed motorcycles through diverse terrains and conquer challenging trails. Book your Motocross Adventure today!'"
                   :image="'images/heroMotocrossBg.jpg'"
                   :mobile-image="'images/heroMotocrossBgMobile.jpg'"
    >
        <PackagesSection :packs="packs"  :title="'Motocross Marrakech'"/>

    </VehicleLayout>


</template>

<script setup>
import {Head} from "@inertiajs/vue3";
import PackagesSection from "@/Components/sections/PackagesSection.vue";
import VehicleLayout from "@/Layouts/VehicleLayout.vue";

defineProps({
    packs: Array,
})
</script>
