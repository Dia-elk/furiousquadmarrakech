<template>
    <MainLayout>
        <VehicleHeroSection :title="title" :description="description" :image="image" :mobile-image="mobileImage"/>
        <slot/>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import VehicleHeroSection from "@/Components/sections/VehicleHeroSection.vue";

defineProps({
    title: String,
    description: String,
    image: String,
    mobileImage: String,
})

</script>
