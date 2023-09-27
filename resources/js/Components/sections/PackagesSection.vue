<template>
    <div class="my-24 md:my-40 lg:my-56 space-y-20">
          <h3 class="text-white text-center w-full text-2xl font-medium">{{title}}</h3>
        <div class="max-w-7xl mx-6  lg:mx-auto grid md:grid-cols-2  lg:grid-cols-3 gap-10 lg:gap-4">
            <PackCard v-for="pack in packs" :pack="pack" :vehicle="vehicle"/>
        </div>
    </div>
</template>

<script setup>
import PackCard from "@/Components/PackCard.vue";

defineProps({
    packs:Array,
    vehicle:Object,
    title: String,
})
</script>
