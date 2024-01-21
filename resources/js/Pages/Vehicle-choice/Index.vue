<template>
    <Head>
        <title>Choose Vehicle</title>
    </Head>
    <MainLayout>
        <div class="relative h-screen">
            <div class="w-full h-full absolute top-0 z-10  bg-gradient-to-b from-[#050403]/0 via-[#050403]/20 to-[#050403]   backdrop-blur-sm">
            </div>
            <div class="w-full h-full absolute top-0 z-0">
                <img src="images/heroBg.jpg" class="w-full h-full object-cover z-0 hidden md:block"
                     alt="quad and motocross in marrakech">
                <img src="images/heroBgMobile.jpg" class="w-full h-full object-cover z-0 md:hidden block"
                     alt="quad and motocross in marrakech">
            </div>
            <div class="h-screen  w-full flex flex-col lg:gap-8 gap-4 justify-center items-center absolute top-0 z-20">
                <h1 class="lg:text-2xl font-bold text-white">Choose Vehicle</h1>
                <div class="grid lg:grid-cols-3 gap-4 ">
                    <Link :href="route('buggy')"
                          class="cursor-pointer flex flex-col justify-center items-center  border border-neutral-600 lg:h-44 lg:w-72 h-24 w-52 transition-all duration-300"
                          :class="buggyHover?'bg-[#c10c10]':'bg-transparent'"
                          @mouseenter="buggyHover=!buggyHover"
                          @mouseleave="buggyHover=!buggyHover">
                        <BuggyIcon v-if="!buggyHover"/>
                        <h3 v-if="buggyHover" class="transition-all duration-500 text-gray-100">Buggy</h3>
                    </Link>

                    <Link :href="route('quad')"
                          class="cursor-pointer flex flex-col justify-center items-center  border border-neutral-600 lg:h-44 lg:w-72 h-24 w-52 transition-all duration-300"
                          :class="quadHover?'bg-[#c10c10]':'bg-transparent'"
                          @mouseenter="quadHover=!quadHover"
                          @mouseleave="quadHover=!quadHover">
                        <QuadIcon v-if="!quadHover"/>
                        <h3 v-if="quadHover" class="transition-all duration-500 text-gray-100">Quad</h3>
                    </Link>

                    <Link :href="route('motocross')"
                          class="cursor-pointer flex flex-col justify-center items-center  border border-neutral-600 lg:h-44 lg:w-72 h-24 w-52 transition-all duration-300"
                          :class="motocrossHover?'bg-[#c10c10]':'bg-transparent'"
                          @mouseenter="motocrossHover=!motocrossHover"
                          @mouseleave="motocrossHover=!motocrossHover">
                        <MotocrossIcon v-if="!motocrossHover"/>
                        <h3 v-if="motocrossHover" class="text-gray-100">Motocross</h3>
                    </Link>
                </div>

            </div>
        </div>
    </MainLayout>
</template>

<script setup>

import MainLayout from "@/Layouts/MainLayout.vue";
import MotocrossIcon from "@/Icons/MotocrossIcon.vue";
import QuadIcon from "@/Icons/QuadIcon.vue";
import BuggyIcon from "@/Icons/BuggyIcon.vue";
import {ref} from "vue";
import {Head, Link} from "@inertiajs/vue3";

let buggyHover = ref(false);
let quadHover = ref(false);
let motocrossHover = ref(false);
</script>
