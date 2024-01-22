<template>
    <header class="w-full fixed top-0 z-30 bg-gradient-to-b from-[#050403] to-[#050403]/0 backdrop-blur-sm">
        <MyNavBar/>
    </header>
    <main class="bg-[#050403]">
        <slot/>
    </main>
    <footer
        class="h-[100px] flex flex-col-reverse  justify-center  items-center px-2 md:p-10 border-t-[0.6px] border-gray-600 mx-6 lg:mx-auto lg:max-w-7xl">
        <div>
            <span class="text-gray-500 lg:text-[12px] text-[10px]">© {{ date.getFullYear() }} Furious Quad Marrakech - Made with <span
                class="text-[#c10c10]">♥</span> by </span>
            <span class="text-gray-200 lg:text-[12px] text-[8px] font-bold underline cursor-pointer">
                <a href="https://diaelk.dev/" target="_blank">Dia</a>
            </span>
        </div>
        <div class="flex gap-4">
            <a target="_blank" href="https://www.instagram.com/furious.quad/">
                <Instagram/>
            </a>
            <a v-if="false" target="_blank" href="#">
                <Facebook/>
            </a>
            <a target="_blank" href="https://www.tiktok.com/@furious.quad">
                <Tiktok/>
            </a>
            <a target="_blank" href="https://www.airbnb.fr/users/show/543464602">
                <Airbnb/>
            </a>
            <a target="_blank"
               href="https://www.tripadvisor.com/Attraction_Review-g293734-d26818101-Reviews-Furious_Quad_Marrakech-Marrakech_Marrakech_Safi.html">
                <Tripadvisor/>
            </a>
        </div>
    </footer>
    <div class="fixed bottom-0 right-0 p-4 z-50">
       <a href="https://wa.me/message/RPG5SLURNGAEE1" target="_blank">
           <div class="h-[50px] w-[50px] flex justify-center items-center bg-green-500 rounded-full ">
               <WhatsApp/>
           </div>
       </a>
    </div>
</template>

<script setup>

import MyNavBar from "@/Components/MyNavBar.vue";
import Instagram from "@/Icons/Instagram.vue";
import Tiktok from "@/Icons/Tiktok.vue";
import Facebook from "@/Icons/Facebook.vue";
import Tripadvisor from "@/Icons/Tripadvisor.vue";
import Airbnb from "@/Icons/Airbnb.vue";
import WhatsApp from "@/Icons/WhatsApp.vue";

const date = new Date();


</script>
