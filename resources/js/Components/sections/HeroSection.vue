<template>
    <div class="h-screen w-full relative">
        <div class="z-20 flex h-full  w-full justify-center items-center absolute top-0">
            <div >
                <h1 class="text-white text-4xl font-bold">Welcome to furious</h1>
            </div>
        </div>
        <div class="w-full h-full absolute top-0 ">
            <img src="images/heroBg.jpg" class="w-full h-full object-cover z-0 hidden md:block">
            <img src="images/heroBgMobile.jpg" class="w-full h-full object-cover z-0 md:hidden block">
        </div>
    </div>
</template>

<script setup>

import MyNavBar from "@/Components/MyNavBar.vue";
</script>
