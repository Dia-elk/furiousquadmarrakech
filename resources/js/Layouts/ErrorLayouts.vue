<template>
    <div class="h-screen relative">
        <Link :href="route('underConstruction')" class="absolute top-0 p-4 z-40 w-full ">
            <UnderConstructionLogo/>
        </Link>
        <div class=" hidden md:grid grid-cols-2 h-full">
            <div class="relative">
                <div class="w-full h-full"><img src="images/underConstructionBg.jpg" class="h-screen w-full object-cover" alt="two in motocross"></div>
                <div class="w-full h-full bg-gradient-to-r from-[#050403]/0 to-[#050403] absolute top-0"></div>
            </div>

            <div class="flex flex-col bg-[#050403] h-full justify-center ">

                <div class="w-[400px] mb-6">
                    <h1 class="font-bold font-roboto text-white text-4xl mb-4">{{title}}</h1>
                    <p class="font-light font-roboto text-gray-300 text-sm">{{message}}</p>
                </div>


                <!-- Social media -->
                <div class="flex gap-6 items-center mt-10">
                    <div class="w-24 h-[0.6px] bg-gray-300"></div>
                    <div class="flex gap-4 items-center">
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
                    <div class="w-24 h-[0.6px] bg-gray-300"></div>
                </div>
                <!-- /Social media -->
            </div>
        </div>

        <div class="md:hidden h-screen flex justify-center items-center relative">
            <div class="absolute top-0 w-full h-full"> <img src="images/underConstructionBg.jpg" class="h-full w-full object-cover"></div>
            <div class="flex flex-col  bg-[#050403]/40 h-full w-full  items-center justify-center z-10">
                <div class="px-6 mb-6">
                    <h1 class="font-bold font-roboto text-white text-4xl mb-4">{{title}}</h1>
                    <p class="font-light font-roboto text-gray-300 text-sm">{{message}}</p>
                </div>

                <!-- Social media -->
                <div class="flex  justify-center">
                    <div class="flex gap-6 items-center mt-10">
                        <div class="w-24 h-[0.6px] bg-gray-300"></div>
                        <div class="flex gap-4 items-center">
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
                        <div class="w-24 h-[0.6px] bg-gray-300"></div>
                    </div>
                </div>
                <!-- /Social media -->

            </div>
        </div>
    </div>
</template>

<script setup>
import {Head, useForm} from "@inertiajs/vue3";
import UnderConstructionLogo from "@/Components/Logos/UnderConstructionLogo.vue";
import {Link} from "@inertiajs/vue3";
import Instagram from "@/Icons/Instagram.vue";
import Facebook from "@/Icons/Facebook.vue";
import Tiktok from "@/Icons/Tiktok.vue";
import {ref} from "vue";
import Spinner from "@/Components/Spinner.vue";

defineProps({
    title:String,
    message:String,
})

</script>
