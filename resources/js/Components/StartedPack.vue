<template>
    <div class="flex flex-col gap-2">
        <Link
            :href="pack.vehicle.id === 3 ? route('motocross') : pack.vehicle.id === 2 ? route('quad') : pack.vehicle.id === 1 ? route('buggy') : '#'"
            class="relative h-[400px] cursor-pointer"
            @mouseenter="isHover=true"
            @mouseleave="isHover=false"
        >
            <div class="w-full h-full overflow-hidden">
                <img
                    :src="pack.vehicle.id === 3 ? '/images/heroMotocrossBgMobile.jpg' : pack.vehicle.id === 2 ? '/images/heroQuadBgMobile.jpg' : pack.vehicle.id === 4 ? '/images/heroCanAmBg.avif' : ''"
                    class="w-full h-full object-cover transition-all duration-500"
                    :class="{'scale-110': isHover}"
                    :alt="pack.vehicle.id === 3 ? $t('motocrossRideAlt') : pack.vehicle.id === 2 ? $t('quadRideAlt') : pack.vehicle.id === 1 ? $t('buggyRideAlt') : ''"
                >
            </div>
            <div class="absolute bottom-4 w-full transition-all duration-500" :class="isHover ? 'bottom-6' : 'bottom-4'">
                <h1 class="text-gray-100 font-bold text-center md:text-lg">
                    {{ pack.vehicle.id === 3 ? $t('motocrossRide') : pack.vehicle.id === 2 ? $t('quadRide') : pack.vehicle.id === 4 ? $t('buggyRide') : '' }}
                </h1>
            </div>
        </Link>

        <div class="h-[50px] flex justify-center items-center">
            <Link
                :href="pack.vehicle.id === 3 ? route('motocross') : pack.vehicle.id === 2 ? route('quad') : pack.vehicle.id === 4 ? route('can-am') : '#'"
                class="w-full"
            >
                <MyButton>
                    {{ $t('reserveButton') }}
                </MyButton>
            </Link>
        </div>
    </div>

    <!-- Optional features section -->
    <div v-if="false" class="flex flex-col gap-4">
        <div class="h-full border border-gray-600">
            <div v-if="false" class="mx-6 my-10 space-y-2">
                <PackFeature :title="$t('duration') + ' : ' + pack.duration" :is-include="true"/>
                <PackFeature :title="$t('picturesWithPalmTrees')" :is-include="true"/>
                <PackFeature :title="$t('teaAndSnacks')" :is-include="true"/>
                <PackFeature :title="$t('pickUpAndReturn')" :is-include="true"/>
                <PackFeature :title="$t('privatePickUp')" :is-include="true"/>
                <PackFeature :title="$t('lunch')" :is-include="true"/>
                <PackFeature :title="$t('dinnerComplete')" :is-include="true"/>
                <PackFeature :title="$t('equipments')" :is-include="true"/>
                <PackFeature :title="$t('furiousScarf')" :is-include="true"/>
                <PackFeature v-if="pack.vehicle.id === 3 || pack.vehicle.id === 4" :title="$t('drift')" :is-include="true"/>
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
    pack: Object,
})

let isHover = ref(false)

const number = props.pack.price;
const decimalValue = number.toString().substring(number.toString().indexOf(".")+1);
const price = Math.floor(props.pack.price);
</script>
