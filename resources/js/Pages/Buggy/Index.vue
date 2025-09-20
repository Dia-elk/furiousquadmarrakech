<template>
    <Head>
        <link rel="canonical" href="https://furiousquadmarrakech.com/buggy-marrakech" />
        <title>{{ $t('buggy.title') }}</title>
        <meta name="description" :content="$t('buggy.metaDescription')" />
        <meta name="keywords" :content="$t('buggy.metaKeywords')" />
    </Head>
    <VehicleLayout :title="$t('buggy.pageTitle')"
                   :description="$t('buggy.pageDescription')"
                   :image="'images/heroBuggyBg.jpg'"
                   :mobile-image="'images/heroBuggyBgMobile.jpg'"
    >
        <PackagesSection :packs="packs" :title="$t('buggy.pageTitle')" />
    </VehicleLayout>
</template>

<script setup>
import PackagesSection from "@/Components/sections/PackagesSection.vue";
import { Head } from "@inertiajs/vue3";
import VehicleLayout from "@/Layouts/VehicleLayout.vue";

defineProps({
    packs: Array,
});
</script>
