<template>
    <Head>
        <title>Quad Marrakech Adventures | Exciting ATV Tours in Morocco</title>
        <meta name="description" content="Discover the thrill of quad biking in Marrakech! Join our guided ATV tours for an unforgettable adventure through the stunning landscapes of Morocco. Book now!">
        <meta name="keywords" content="Quad Marrakech, Marrakech ATV tours, Quad biking Morocco, Adventure tours, Marrakech excursions">
    </Head>

    <VehicleLayout :title="'Quad Marrakech'"
                   :description="'Discover the thrill of Quad Adventures! Navigate all-terrain vehicles through various landscapes and embark on exciting journeys. Book your Quad Adventure today!'"
                   :image="'images/heroQuadBg.jpg'"
                   :mobile-image="'images/heroQuadBgMobile.jpg'"
    >
        <PackagesSection :packs="packs" :title="'Quad Marrakech'"/>
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
