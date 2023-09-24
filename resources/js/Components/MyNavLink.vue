<template>
    <Link :href="href">
        <div class="h-full text-center  flex flex-col justify-between">
            <div class="h-[1px] "></div>
            <p
                class="text-xs transition-all duration-500"
                :class="isActive?'text-[#c10c10] drop-shadow-[0_20px_35px_rgba(9,220,160,100)]':'text-gray-400  hover:text-[#c10c10] hover:drop-shadow-[0_20px_35px_rgba(9,220,160,100)]'"
            >
                <slot/>
            </p>
            <div
                class="h-[1px]  bg-gradient-to-r from-[#c10c10]/0 via-[#c10c10]  to-[#c10c10]/0 transition-all duration-500"
                :class="isActive?'from-[#c10c10]/0 via-[#c10c10]  to-[#c10c10]/0':'from-[#c10c10]/0 via-[#c10c10]/0  to-[#c10c10]/0'"
            ></div>
        </div>
    </Link>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";
defineProps({
    isActive : Boolean,
    href : String
})
</script>

