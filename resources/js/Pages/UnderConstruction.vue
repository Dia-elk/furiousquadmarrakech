<template>
    <Head>
        <title>Under construction</title>
    </Head>
    <div class="h-screen relative">
        <div class="absolute top-0 p-4 z-40 w-full ">
            <UnderConstructionLogo/>
        </div>
        <div class=" hidden md:grid grid-cols-2 h-full">
            <div class="relative">
                <div class="w-full h-full"><img src="images/underConstructionBg.jpg" class="h-screen w-full object-cover" alt="two in motocross"></div>
                <div class="w-full h-full bg-gradient-to-r from-[#050403]/0 to-[#050403] absolute top-0"></div>
            </div>

            <div class="flex flex-col bg-[#050403] h-full justify-center ">

                <div class="w-[400px] mb-6">
                    <h1 class="font-bold font-roboto text-white text-4xl mb-4">We're coming soon!</h1>
                    <p class="font-light font-roboto text-gray-300 text-sm">Our website is currently undergoing
                        scheduled maintenance. We should be back shortly. Thank you for your patience.</p>
                </div>

                <!-- Forum-->
                <div v-if="!isSubscribed">
                    <form  @submit.prevent="form.post(route('subscriber.store'))">
                      <div class="flex">
                          <input v-model="form.email" type="email"
                                 class="h-12 w-[400px] focus:ring-[#c10c10] focus:border-[#c10c10] bg-neutral-800 text-white placeholder-gray-300"
                                 placeholder="name@furiousquadmarrakech.com" required>

                          <button class="bg-[#c10c10]  h-12 px-6 flex justify-center items-center"
                                  :disabled="form.processing" type="submit">
                              <p v-if="!form.processing" class="font-bold text-white text-sm">NOTIFY US</p>
                              <Spinner v-if="form.processing"/>
                          </button>
                      </div>
                        <p v-if="errors.email" class="text-[#c10c10] text-sm">{{errors.email}}</p>
                        <p v-if="isSubscribed" class="text-[#c10c10] text-sm">You are already subscribed. Thank you for trying again</p>
                    </form>
                </div>
                <div class="font-light font-roboto text-gray-300 text-sm mt-6">
                    <p v-if="$page.url === '/'"> Sign up now to get early notification of our launch date!</p>
                    <p v-if="$page.url === '/subscribed'"> 🌟 Thank you for subscribing! 🌟</p>
                </div>
                <!-- /Forum -->

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
            <div class="flex flex-col  bg-[#050403]/40 h-full justify-center z-40">

                <div class="px-6 mb-6">
                    <h1 class="font-bold font-roboto text-white text-4xl mb-4">We're coming soon!</h1>
                    <p class="font-light font-roboto text-gray-300 text-sm">Our website is currently undergoing
                        scheduled maintenance. We should be back shortly. Thank you for your patience.</p>
                </div>

                <!-- Forum-->
                <div v-if="!isSubscribed" class="px-6">
                    <form class="flex" @submit.prevent="form.post(route('subscriber.store'))">
                        <input v-model="form.email" type="email"
                               class="h-10 w-[200px] focus:ring-[#c10c10] focus:border-[#c10c10] bg-neutral-800 text-white placeholder-gray-300 text-sm"
                               placeholder="name@furiousquadmarrakech.com" required>
                        <button class="bg-[#c10c10]  h-10 px-6 flex justify-center items-center"
                                :disabled="form.processing" type="submit">
                            <p v-if="!form.processing" class="font-bold text-white text-xs">NOTIFY US</p>
                            <Spinner v-if="form.processing"/>
                        </button>
                    </form>
                </div>
                <div class="font-light px-6 font-roboto text-gray-300 text-sm mt-6">
                    <p v-if="$page.url === '/'"> Sign up now to get early notification of our launch date!</p>
                    <p v-if="$page.url === '/subscribed'"> 🌟 Thank you for subscribing! 🌟</p>
                </div>
                <!-- /Forum -->

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
    isSubscribed: Boolean,
    errors : Object,
})
const form = useForm({
    email: ref(''),
})
</script>
