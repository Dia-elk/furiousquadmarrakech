<template>
    <div class="h-screen w-full relative">

        <div class="z-20 flex flex-col h-full  w-full justify-center items-center absolute top-0">
            <div class="md:max-w-4xl md:mx-auto mx-4">
                <h1 class="text-white text-2xl md:text-4xl text-center font-bold">Choose Your Ultimate Off-Road Adventure!</h1>
                <p class="text-gray-300 text-sm md:text-md  text-center mt-4">Rev Up Your Life with Quad, Buggy, or Motocross! Choose the
                    Furious Adventure That's Right for You! Dive into the world of adrenaline-pumping off-road
                    experiences and select the perfect adventure that electrifies your senses.</p>
                <div class="flex justify-center gap-4 mt-10">
                    <div class="w-[300px]">
                        <Link class="w-full" :href="route('furious')">
                            <MyButton>Plan your Ride</MyButton>
                        </Link>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-full h-full absolute top-0 ">
            <img src="images/heroBg.jpg" class="w-full h-full object-cover z-0 hidden md:block" alt="quad and motocross in marrakech">
            <img src="images/heroBgMobile.jpg" class="w-full h-full object-cover z-0 md:hidden block" alt="quad and motocross in marrakech">
        </div>
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-[#050403]/0 via-[#050403]/10 to-[#050403]">

        </div>
        <div class="absolute bottom-4 w-full flex justify-center items-center ">
            <ScrollMouse/>
        </div>
    </div>
</template>

<script setup>


import MyButton from "@/Components/MyButton.vue";
import ScrollMouse from "@/Components/ScrollMouse.vue";
import {ref} from "vue";
import {Link} from "@inertiajs/vue3";



</script>
