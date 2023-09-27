<template>
    <header class="w-full fixed top-0 z-30 bg-gradient-to-b from-[#050403] to-[#050403]/0 backdrop-blur-sm">
        <MyNavBar/>
    </header>
    <main>
        <slot/>
    </main>
    <footer class="h-[100px] flex justify-between items-center p-10 border-t-[0.6px] border-gray-600 mx-6 lg:mx-auto lg:max-w-7xl">
        <div>
            <span class="text-gray-500 lg:text-[12px] text-[10px]">© {{date.getFullYear()}} Furious Quad Marrakech - Made with <span
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
        </div>
    </footer>
</template>

<script setup>

import MyNavBar from "@/Components/MyNavBar.vue";
import Instagram from "@/Icons/Instagram.vue";
import Tiktok from "@/Icons/Tiktok.vue";
import Facebook from "@/Icons/Facebook.vue";

const date = new Date();


</script>
