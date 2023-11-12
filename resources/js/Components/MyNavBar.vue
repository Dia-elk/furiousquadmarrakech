<template>
    <nav class="flex w-full px-6 md:px-16 py-6  justify-between items-center">
        <Link :href="route('welcome')" class="z-50 ">
            <WhiteLogo v-if="!isOpen"/>
            <BlackLogo v-if="isOpen"/>
        </Link>
        <div class="hidden lg:flex gap-10 items-center z-50">
            <MyNavLink :is-active="$page.url === '/'" :href="route('welcome')">
                Home
            </MyNavLink>
            <MyNavLink :is-active="$page.url.startsWith('/buggy')" :href="route('buggy')">
                Buggy
            </MyNavLink>
            <MyNavLink :is-active="$page.url.startsWith('/quad')" :href="route('quad')">
                Quad
            </MyNavLink>
            <MyNavLink :is-active="$page.url.startsWith('/motocross')" :href="route('motocross')">
                Motocross
            </MyNavLink>
            <MyNavLink v-if="true" :is-active="$page.url.startsWith('/furious')" :href="route('furious')">
                Furious
            </MyNavLink>
            <MyNavLink :is-active="$page.url.startsWith('/contact')" :href="route('contact')">
                Contact
            </MyNavLink>
            <BtnNavLink :href="route('vehicle-choice')">
                Book
            </BtnNavLink>
        </div>
        <div class="block lg:hidden z-50">
            <DrawerMenu v-if="!isOpen" @click="isOpen = !isOpen"/>
        </div>
    </nav>

    <!-- Drawer -->
    <div @click="isOpen = !isOpen"
         class="lg:hidden w-full h-screen bg-black bg-opacity-50  z-10 fixed top-0  duration-700 transition-all"
         :class="{'right-0':isOpen} , {'right-[-1640px]':!isOpen}">
        <div class="h-screen w-[300px] top-0 fixed duration-1000 transition-all bg-white z-40"
             :class="{'left-0':isOpen} , {'left-[-300px]':!isOpen}">

            <div class="flex flex-col h-screen justify-between pb-10 items-center w-full">
                <div class=" invisible mb-10">
                    <BlackLogo/>
                </div>
                <div class="flex flex-col space-y-10 items-center">
                    <MyNavLink :href="route('welcome')" :is-active="$page.url === '/'">Home</MyNavLink>
                    <MyNavLink :href="route('buggy')" :is-active="$page.url.startsWith('/buggy')">Buggy</MyNavLink>
                    <MyNavLink :href="route('quad')" :is-active="$page.url.startsWith('/quad')">Quad</MyNavLink>
                    <MyNavLink :href="route('motocross')" :is-active="$page.url.startsWith('/motocross')">Motocross
                    </MyNavLink>
                    <MyNavLink v-if="true" :href="route('furious')" :is-active="$page.url.startsWith('/furious')">
                        Furious
                    </MyNavLink>
                    <MyNavLink :href="route('contact')" :is-active="$page.url.startsWith('/contact')">Contact
                    </MyNavLink>
                    <BtnNavLink>Book</BtnNavLink>
                </div>

                <div class="flex space-x-4 mt-20">
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
                    <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293734-d26818101-Reviews-Furious_Quad_Marrakech-Marrakech_Marrakech_Safi.html">
                        <Tripadvisor/>
                    </a>
                </div>


            </div>

        </div>
    </div>
    <!-- End of Drawer -->
</template>

<script setup>

import {Link} from "@inertiajs/vue3";
import MyNavLink from "@/Components/MyNavLink.vue";
import BtnNavLink from "@/Components/BtnNavLink.vue";
import DrawerMenu from "@/Components/DrawerMenu.vue";
import WhiteLogo from "@/Components/Logos/WhiteLogo.vue";
import {ref} from "vue";
import BlackLogo from "@/Components/Logos/BlackLogo.vue";
import Instagram from "@/Icons/Instagram.vue";
import Tiktok from "@/Icons/Tiktok.vue";
import Facebook from "@/Icons/Facebook.vue";
import MyButton from "@/Components/MyButton.vue";
import Airbnb from "@/Icons/Airbnb.vue";
import Tripadvisor from "@/Icons/Tripadvisor.vue";

const isOpen = ref(false)
</script>
