<template>
    <nav class="flex w-full px-6 md:px-16 py-6  justify-between items-center">
        <Link :href="route('welcome')" class="z-50 " >
            <WhiteLogo v-if="!isOpen"/>
            <BlackLogo v-if="isOpen"/>
        </Link>
        <div class="hidden lg:flex gap-10 items-center ">
            <MyNavLink :is-active="true" :href="route('welcome')">
                Home
            </MyNavLink>
            <MyNavLink>
                Buggy
            </MyNavLink>
            <MyNavLink :is-active="false" :href="route('welcome')">
                Quad
            </MyNavLink>
            <MyNavLink :is-active="false" :href="route('welcome')">
                Motocross
            </MyNavLink>
            <MyNavLink :is-active="false" :href="route('welcome')">
                Furious
            </MyNavLink>
            <MyNavLink :is-active="false" :href="route('welcome')">
                Contact
            </MyNavLink>
            <BtnNavLink :href="route('welcome')">
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

            <div class="flex flex-col h-screen justify-end pb-10 items-center w-full">

                <div class="flex flex-col space-y-10 items-center">
                    <MyNavLink :href="route('welcome')" :is-active="true" >Home</MyNavLink>
                    <MyNavLink :href="route('welcome')" :is-active="false" >Buggy</MyNavLink>
                    <MyNavLink :href="route('welcome')" :is-active="false" >Quad</MyNavLink>
                    <MyNavLink :href="route('welcome')" :is-active="false" >Motocross</MyNavLink>
                    <MyNavLink :href="route('welcome')" :is-active="false" >Furious</MyNavLink>
                    <MyNavLink :href="route('welcome')" :is-active="false" >Contact</MyNavLink>
                    <BtnNavLink>Book</BtnNavLink>
                </div>

                <div class="flex space-x-4 mt-40">
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

const isOpen = ref(false)
</script>
