<template>
    <header class="w-full fixed top-0 z-30 bg-gradient-to-b from-[#050403] to-[#050403]/0 backdrop-blur-sm">
        <MyNavBar/>
    </header>
    <main class="bg-[#050403]">
        <slot/>
    </main>
  <MyFooter/>

</template>

<script setup>

import MyNavBar from "@/Components/MyNavBar.vue";
import Instagram from "@/Icons/Instagram.vue";
import Tiktok from "@/Icons/Tiktok.vue";
import Facebook from "@/Icons/Facebook.vue";
import Tripadvisor from "@/Icons/Tripadvisor.vue";
import Airbnb from "@/Icons/Airbnb.vue";
import WhatsApp from "@/Icons/WhatsApp.vue";
import MyFooter from "@/Components/MyFooter.vue";




const date = new Date();


</script>
