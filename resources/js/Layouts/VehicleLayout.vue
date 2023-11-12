<template>
    <MainLayout>
        <VehicleHeroSection :title="title" :description="description" :image="image" :mobile-image="mobileImage"/>
        <slot/>
        <PackDescriptions/>
        <FAQ/>
        <ContactSection/>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import VehicleHeroSection from "@/Components/sections/VehicleHeroSection.vue";
import PackDescriptions from "@/Components/PackDescriptions.vue";
import FAQ from "@/Components/sections/FAQ.vue";
import ContactSection from "@/Components/sections/ContactSection.vue";

defineProps({
    title: String,
    description: String,
    image: String,
    mobileImage: String,
})



</script>
