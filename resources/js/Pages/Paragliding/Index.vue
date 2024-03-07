<template>
    <Head>
        <title>Paragliding Marrakech</title>
    </Head>
 <MainLayout>
     <VehicleHeroSection title="Paragliding Marrakech" description="We're coming Soon !" image="/images/paragliding.jpg" mobile-image="/images/paragliding.jpg"/>
     <ContactSection/>
 </MainLayout>
</template>

<script setup>

import MainLayout from "@/Layouts/MainLayout.vue";
import VehicleHeroSection from "@/Components/sections/VehicleHeroSection.vue";
import ContactSection from "@/Components/sections/ContactSection.vue";
import {Head} from "@inertiajs/vue3";
</script>
