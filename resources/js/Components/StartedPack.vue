<template>
    <div class="flex flex-col gap-2">
        <Link :href="pack.vehicle.id === 3? route('motocross'):pack.vehicle.id === 2? route('quad'):pack.vehicle.id === 1? route('buggy'):'#'"  class="relative h-[400px] cursor-pointer" @mouseenter="isHover=true" @mouseleave="isHover=false">
            <div class="w-full h-full overflow-hidden">
                <img :src="pack.vehicle.id === 3 ? '/images/heroMotocrossBgMobile.jpg' :pack.vehicle.id === 2 ?'/images/heroQuadBgMobile.jpg':pack.vehicle.id === 1?'/images/heroBuggyBgMobile.jpg':''" class="w-full h-full object-cover transition-all duration-500" :class="{'scale-110':isHover}">
            </div>
            <div class="absolute bottom-4 w-full transition-all duration-500" :class="isHover?'bottom-6':'bottom-4'">
                <h1 class="text-gray-100  font-bold text-center md:text-lg">{{pack.vehicle.id === 3 ? 'Motocross Ride' :pack.vehicle.id === 2 ?'Quad Ride':pack.vehicle.id === 1?'Buggy Ride':''}}</h1>
            </div>
        </Link>
        <div class="h-[50px] flex justify-center items-center">
            <Link :href="pack.vehicle.id === 3? route('motocross'):pack.vehicle.id === 2? route('quad'):pack.vehicle.id === 1? route('buggy'):'#'" class="w-full">
                <MyButton>
                    Reserve
                </MyButton>
            </Link>
        </div>
    </div>
    <div v-if="false" class="flex flex-col gap-4">
        <div class="h-full border border-gray-600">



            <div v-if="false" class="mx-6 my-10 space-y-2">
                <PackFeature :title="'Duration : '+ pack.duration" :is-include="true"/>
                <PackFeature :title="'Pictures with palm trees'" :is-include="true"/>
                <PackFeature :title="'Tea and Snacks'" :is-include="true"/>
                <PackFeature :title="'Pick Up and return to your Hotel or nearest'" :is-include="true"/>
                <PackFeature :title="'Private Pick Up'" :is-include="true"/>
                <PackFeature :title="'Lunch'" :is-include="true"/>
                <PackFeature :title="'Dinner complete'" :is-include="true"/>
                <PackFeature :title="'Equipments'" :is-include="true"/>
                <PackFeature :title="'Furious Scarf'" :is-include="true"/>
                <PackFeature v-if="pack.vehicle.id === 3 || pack.vehicle.id === 4" :title="'Drift'" :is-include="true"/>
            </div>
        </div>

    </div>
</template>

<script setup>
import MyButton from "@/Components/MyButton.vue";
import PackFeature from "@/Components/PackFeature.vue";
import {Link} from "@inertiajs/vue3";
import {ref} from "vue";

const props = defineProps({
    pack:Object,
})

let isHover = ref(false)


const number = props.pack.price;
const decimalValue = number.toString().substring(number.toString().indexOf(".")+1);
const price = Math.floor(props.pack.price);
</script>

