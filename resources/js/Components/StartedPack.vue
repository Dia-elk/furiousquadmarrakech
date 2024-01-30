<template>
    <div class="flex flex-col gap-4">
        <div class="h-full border border-gray-600">
            <div class="mt-10">
                <h1 class="text-gray-100  font-bold text-center md:text-lg">{{pack.vehicle.id === 3 ? 'Motocross Ride' :pack.vehicle.id === 2 ?'Quad Ride':pack.vehicle.id === 1?'Buggy Ride':''}}</h1>
                <div class="flex justify-center items-center gap-2">
                    <p class="text-sm text-gray-300">From</p>
                    <div class="flex text-xl text-gray-300 font-bold justify-center mt-1">
                        <p >{{price}}</p>
                        <p class=" text-xs">.{{decimalValue}}</p>
                        <p class="ml-2">Dh</p>
                    </div>
                </div>
            </div>

            <div class="mx-6 my-10 space-y-2">
                <PackFeature :title="'Duration : '+ pack.duration" :is-include="true"/>
                <PackFeature :title="'Pictures with palm trees'" :is-include="true"/>
                <PackFeature :title="'Tea and Snacks'" :is-include="true"/>
                <PackFeature :title="'Pick Up and return to your Hotel or nearest'" :is-include="true"/>
                <PackFeature :title="'Private Pick Up'" :is-include="true"/>
                <PackFeature :title="'Lunch'" :is-include="true"/>
                <PackFeature :title="'Dinner complete'" :is-include="true"/>
                <PackFeature :title="'Equipments'" :is-include="true"/>
                <PackFeature :title="'Furious Scarf'" :is-include="true"/>
                <PackFeature v-if="pack.vehicle.id === 3" :title="'Drift'" :is-include="true"/>
            </div>
        </div>
        <div class="h-[50px] flex justify-center items-center ">
            <Link :href="pack.vehicle.id === 3? route('motocross'):pack.vehicle.id === 2? route('quad'):pack.vehicle.id === 1? route('buggy'):'#'" class="w-full">
                <MyButton>
                    Reserve
                </MyButton>
            </Link>
        </div>
    </div>
</template>

<script setup>
import MyButton from "@/Components/MyButton.vue";
import PackFeature from "@/Components/PackFeature.vue";
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    pack:Object,
})


const number = props.pack.price;
const decimalValue = number.toString().substring(number.toString().indexOf(".")+1);
const price = Math.floor(props.pack.price);
</script>

