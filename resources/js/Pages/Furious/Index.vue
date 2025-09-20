<template>
    <Head>
        <title>{{ $t('furious_packs.title') }}</title>
    </Head>
    <MainLayout>
        <FuriousHeroSection
            :title="$t('furious_packs.hero_title')"
            :description="$t('furious_packs.hero_description')"
        />
        <ContactSection/>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import FuriousHeroSection from "@/Components/sections/FuriousHeroSection.vue";
import { Head } from "@inertiajs/vue3";
import ContactSection from "@/Components/sections/ContactSection.vue";
</script>
