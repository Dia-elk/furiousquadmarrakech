<template>
    <!-- Title -->
    <div class="mx-4 md:mx-24 flex items-center gap-4">
        <div class="h-20 bg-[#c10c10] w-2">
        </div>
        <div>
            <h3 class="text-sm text-gray-400">Starter packs</h3>
            <h1 class="font-bold text-white text-4xl">Plan your ride</h1>
        </div>
    </div>
    <!-- /Title -->
    <div class="my-24 space-y-20">
        <div class="max-w-7xl mx-6  lg:mx-auto grid md:grid-cols-2  lg:grid-cols-3 gap-10 lg:gap-4">
            <StartedPack v-for="pack in packs" :pack="pack"/>
        </div>
    </div>
</template>

<script setup>
import PackagesSection from "@/Components/sections/PackagesSection.vue";
import PackCard from "@/Components/PackCard.vue";
import StartedPack from "@/Components/StartedPack.vue";
defineProps({
    packs: Array,
})
</script>
