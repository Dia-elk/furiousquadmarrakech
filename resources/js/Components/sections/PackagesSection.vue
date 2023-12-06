<template>
    <div class="my-24 md:my-40 lg:my-56 space-y-20">
          <h2 class="text-white text-center w-full text-2xl font-medium">{{title}}</h2>
        <div class="max-w-7xl mx-6  lg:mx-auto grid md:grid-cols-2  lg:grid-cols-3 gap-10 lg:gap-4">
            <PackCard v-for="pack in packs" :pack="pack"/>
        </div>
    </div>
</template>

<script setup>
import PackCard from "@/Components/PackCard.vue";

defineProps({
    packs:Array,
    title: String,
})
</script>
