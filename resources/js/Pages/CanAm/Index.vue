<template>
    <Head>
        <link rel="canonical" href="https://furiousquadmarrakech.com/can-am-marrakech" />
        <title>{{ $t('canAm.title') }}</title>
        <meta name="description" :content="$t('canAm.metaDescription')" />
        <meta name="keywords" :content="$t('canAm.metaKeywords')" />
    </Head>
    <VehicleLayout :title="$t('canAm.pageTitle')"
                   :description="$t('canAm.pageDescription')"
                   :image="'images/heroCanAmBg.avif'"
                   :mobile-image="'images/heroCanAmBg.avif'"
    >
        <PackagesSection :packs="packs" :title="$t('canAm.pageTitle')" />
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
