<template>
    <Head>
        <link rel="canonical" href="https://furiousquadmarrakech.com/motocross-marrakech" />
        <title>{{ $t('motocross.title') }}</title>
        <meta name="description" :content="$t('motocross.meta_description')" />
        <meta name="keywords" :content="$t('motocross.meta_keywords')" />
    </Head>

    <VehicleLayout
        :title="$t('motocross.title')"
        :description="$t('motocross.description')"
        :image="'images/heroMotocrossBg.jpg'"
        :mobile-image="'images/heroMotocrossBgMobile.jpg'"
    >
        <PackagesSection :packs="packs" :title="$t('motocross.title')" />
    </VehicleLayout>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import PackagesSection from "@/Components/sections/PackagesSection.vue";
import VehicleLayout from "@/Layouts/VehicleLayout.vue";

defineProps({
    packs: Array,
})
</script>
