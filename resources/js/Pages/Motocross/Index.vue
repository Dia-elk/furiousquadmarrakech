<template>
    <Head>
        <title>Motocross</title>
    </Head>

    <VehicleLayout :title="'Motocross'"
                   :description="'Experience the adrenaline rush of Motocross Adventures! Ride high-speed motorcycles through diverse terrains and conquer challenging trails. Book your Motocross Adventure today!'"
                   :image="'images/heroMotocrossBg.jpg'"
                   :mobile-image="'images/heroMotocrossBgMobile.jpg'"
    >
        <PackagesSection :packs="packs"  :title="'Motocross Packs'"/>
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
