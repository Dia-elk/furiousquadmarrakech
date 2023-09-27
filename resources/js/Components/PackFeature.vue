<template>
    <div class="flex items-center gap-4 text-gray-400 text-xs">
        <Correct v-if="isInclude"/>
        <X v-if="!isInclude"/>
        <p :class="isInclude?'':'line-through'">{{ title }}</p>
    </div>
</template>

<script setup>
import Correct from "@/Icons/Correct.vue";
import X from "@/Icons/X.vue";

defineProps({
    title: String,
    isInclude: Boolean
})
</script>
