<template>
    <Head>
        <title>Quad</title>
    </Head>

    <VehicleLayout :title="'Quad'"
                   :description="'Discover the thrill of Quad Adventures! Navigate all-terrain vehicles through various landscapes and embark on exciting journeys. Book your Quad Adventure today!'"
                   :image="'images/heroQuadBg.jpg'"
                   :mobile-image="'images/heroQuadBgMobile.jpg'"
    >
        <PackagesSection :packs="packs" :title="'Quad Packs'"/>
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
