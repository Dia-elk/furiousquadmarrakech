<template>
    <Head>
        <link rel="canonical" href="https://furiousquadmarrakech.com/quad-marrakech" />
        <title>{{ $t('quad.title') }}</title>
        <meta name="description" :content="$t('quad.meta_description')" />
        <meta name="keywords" :content="$t('quad.meta_keywords')" />
    </Head>

    <VehicleLayout
        :title="$t('quad.title')"
        :description="$t('quad.description')"
        :image="'images/heroQuadBg.jpg'"
        :mobile-image="'images/heroQuadBgMobile.jpg'"
    >
        <PackagesSection :packs="packs" :title="$t('quad.title')" />
    </VehicleLayout>
</template>

<script setup>
import PackagesSection from "@/Components/sections/PackagesSection.vue";
import { Head } from "@inertiajs/vue3";
import VehicleLayout from "@/Layouts/VehicleLayout.vue";

defineProps({
    packs: Array,
})
</script>
