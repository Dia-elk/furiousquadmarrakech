<template>
    <div class="h-screen w-full relative">

        <div class="z-20 flex flex-col h-full  w-full justify-center items-center absolute top-0">
            <div class="md:max-w-4xl md:mx-auto mx-4">
                <h1 class="text-white text-2xl md:text-4xl text-center font-bold">{{title}}</h1>
                <p class="text-gray-300 text-sm md:text-md  text-center mt-4">{{description}}</p>
            </div>

        </div>

        <div class="w-full h-full absolute top-0 ">
            <img :src="image" class="w-full h-full object-cover z-0 hidden md:block" :alt="title">
            <img :src="mobileImage" class="w-full h-full object-cover z-0 md:hidden block" :alt="title">
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

defineProps({
    image: String,
    mobileImage: String,
    title:String,
    description:String,
})

</script>
