<template>
    <Head>
        <title>Furious Packs</title>
    </Head>
    <MainLayout>
       <FuriousHeroSection :title="'Furious Pack'" :description="'We\'re coming Soon !'"/>
        <ContactSection/>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import FuriousHeroSection from "@/Components/sections/FuriousHeroSection.vue";
import {Head} from "@inertiajs/vue3";
import ContactSection from "@/Components/sections/ContactSection.vue";
</script>
