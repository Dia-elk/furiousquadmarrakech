<template>
    <div class=" transition-all duration-300 w-full  p-6 "
         :class="isOpen?' bg-white':'bg-[#484746]'">
        <h6 class="transition-all duration-300 flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-left"
            :class="isOpen?'pb-4  text-[#c10c10]':'text-white'">
            {{ question }}
            <svg v-if="!isOpen"
                 class="transition-all duration-300 w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-gray-400"
                 width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
            <svg v-if="isOpen"
                 class="transition-all duration-300 w-3 h-3 text-gray-900 group-hover:text-gray-500 "
                 width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </h6>
        <div v-if="isOpen" class="transition-all duration-300  w-full">
            <p class="text-gray-800 ">
                {{ answer }}
            </p>
        </div>
    </div>

</template>

<script setup>

import {ref} from "vue";

defineProps({
    isOpen: Boolean,
    question: String,
    answer: String,
})

</script>
