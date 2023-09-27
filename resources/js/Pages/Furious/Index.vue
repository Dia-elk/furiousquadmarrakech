<template>
    <MainLayout>
       <FuriousHeroSection :title="'Furious'"/>
        <video autoplay muted loop id="myVideo" class="">
            <source src="Lemhllwess.mp4" type="video/mp4">
        </video>
    </MainLayout>
</template>

<script setup>

import HeroSection from "@/Components/sections/HeroSection.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import FuriousHeroSection from "@/Components/sections/FuriousHeroSection.vue";
</script>
