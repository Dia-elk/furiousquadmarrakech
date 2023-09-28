<template>
    <Head>
        <title>Buggy</title>
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

defineProps({
    packs: Array,
})
</script>
