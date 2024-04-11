<template>
    <div class="border border-gray-600 rounded-lg p-4">
        <h2 class="text-white font-bold">{{name}}</h2>
        <p class="text-gray-400 text-xs">{{platform}}</p>
        <p class="mt-8 text-white text-sm">{{ body}}</p>
    </div>
</template>

<script setup>
defineProps({
    name: String,
    platform: String,
    body: String,
})
</script>

<style lang="scss" scoped>

</style>
