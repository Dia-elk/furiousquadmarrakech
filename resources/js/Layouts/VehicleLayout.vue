<template>
    <MainLayout>
        <VehicleHeroSection :title="title" :description="description" :image="image" :mobile-image="mobileImage"/>
        <slot/>
        <div class="w-full h-full text-gray-300">
           <div class=" mx-4 max-w-7xl lg:mx-auto">
              <div class="mb-8">
                  <div class="flex  items-center gap-4">
                      <div class="h-[1px]  w-7  bg-[#c10c10] ">
                      </div>
                      <h3 class="font-bold">Duration :</h3>
                  </div>
                  <p class="mt-2 text-sm text-gray-500">
                      For your peace of mind, we advise you to check that you have personal all-risk insurance with a repatriation option ( if necessary, this link may be useful if your actual insurances do not cover all activities ) .
                  </p>
              </div>

               <div class="mb-8">
                   <div class="flex  items-center gap-4">
                       <div class="h-[1px]  w-7  bg-[#c10c10] ">
                       </div>
                       <h3 class="font-bold">Pictures with palm trees :</h3>
                   </div>
                   <p class="mt-2 text-sm text-gray-500">
                       We advise you to wear closed shoes, comfortable clothes, sunscreen and warm clothing for the sun in winter .</p>
               </div>

               <div class="mb-8">
                   <div class="flex  items-center gap-4">
                       <div class="h-[1px]  w-7  bg-[#c10c10] ">
                       </div>
                       <h3 class="font-bold">Tea and snacks :</h3>
                   </div>
                   <p class="mt-2 text-sm text-gray-500">Don't forget to bring your ID ( passport or driver's license ) .</p>
               </div>

               <div class="mb-8">
                   <div class="flex  items-center gap-4">
                       <div class="h-[1px]  w-7  bg-[#c10c10] ">
                       </div>
                       <h3 class="font-bold">Pick up and return to your hotel or nearest :</h3>
                   </div>
                   <p class="mt-2 text-sm text-gray-500">
                       Not recommended for pregnant travelers. Minimum age to ride a quad bike is 16 ( with a parent on site to sign the release form ) .
                   </p>
               </div>

               <div class="mb-8">
                   <div class="flex  items-center gap-4">
                       <div class="h-[1px]  w-7  bg-[#c10c10] ">
                       </div>
                       <h3 class="font-bold">Private Pick Up :</h3>
                   </div>
                   <p class="mt-2 text-sm text-gray-500">
                       Enjoy a day  in the desert as you ride between remote Berber villages, palm tree groves and stark landscapes on this small group ATV trip. Join a guide and your group, on this intimate journey into the rugged deserts just outside of Marrakesh, and enjoy the harsh terrain. Then take a break when you stop at a local family's home for Moroccan tea and a snack .</p>
               </div>

               <div class="mb-8">
                   <div class="flex  items-center gap-4">
                       <div class="h-[1px]  w-7  bg-[#c10c10] ">
                       </div>
                       <h3 class="font-bold">Lunch :</h3>
                   </div>
                   <p class="mt-2 text-sm text-gray-500">
                       One of the best tours we suggest in the surrounding areas of Marrakesh. Feel free to experience the palm desert in a 700cc buggy during your stay in Marrakesh .
                   </p>
               </div>

               <div class="mb-8">
                   <div class="flex  items-center gap-4">
                       <div class="h-[1px]  w-7  bg-[#c10c10] ">
                       </div>
                       <h3 class="font-bold">Dinner complete :</h3>
                   </div>
                   <p class="mt-2 text-sm text-gray-500">
                       One of the best tours we suggest in the surrounding areas of Marrakesh. Feel free to experience the palm desert in a 700cc buggy during your stay in Marrakesh .
                   </p>
               </div>

               <div class="mb-8">
                   <div class="flex  items-center gap-4">
                       <div class="h-[1px]  w-7  bg-[#c10c10] ">
                       </div>
                       <h3 class="font-bold">Personal risk insurance :</h3>
                   </div>
                   <p class="mt-2 text-sm text-gray-500">
                       One of the best tours we suggest in the surrounding areas of Marrakesh. Feel free to experience the palm desert in a 700cc buggy during your stay in Marrakesh .
                   </p>
               </div>

               <div class="mb-8">
                   <div class="flex  items-center gap-4">
                       <div class="h-[1px]  w-7  bg-[#c10c10] ">
                       </div>
                       <h3 class="font-bold">Equipments :</h3>
                   </div>

                   <p class="mt-2 text-sm text-gray-500">
                       One of the best tours we suggest in the surrounding areas of Marrakesh. Feel free to experience the palm desert in a 700cc buggy during your stay in Marrakesh .
                   </p>
               </div>

               <div class="mb-8">
                   <div class="flex  items-center gap-4">
                       <div class="h-[1px]  w-7  bg-[#c10c10] ">
                       </div>
                       <h3 class="font-bold">Desert Scarf :</h3>
                   </div>
                   <p class="mt-2 text-sm text-gray-500">
                       One of the best tours we suggest in the surrounding areas of Marrakesh. Feel free to experience the palm desert in a 700cc buggy during your stay in Marrakesh .
                   </p>
               </div>

               <div class="mb-8" v-if="page.url.startsWith('/motocross')">
                   <div class="flex  items-center gap-4">
                       <div class="h-[1px]  w-7  bg-[#c10c10] ">
                       </div>
                       <h3 class="font-bold">Drift :</h3>
                   </div>
                   <p class="mt-2 text-sm text-gray-500">
                       One of the best tours we suggest in the surrounding areas of Marrakesh. Feel free to experience the palm desert in a 700cc buggy during your stay in Marrakesh .
                   </p>
               </div>
           </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import VehicleHeroSection from "@/Components/sections/VehicleHeroSection.vue";
import Divider from "@/Components/Divider.vue";
import {usePage} from "@inertiajs/vue3";

defineProps({
    title: String,
    description: String,
    image: String,
    mobileImage: String,
})

let page = usePage()

</script>
