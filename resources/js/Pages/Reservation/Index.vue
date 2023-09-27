<template>
    <MainLayout>
        <div class="h-screen flex justify-center items-center text-white">
            Reservation for {{pack.name}}
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
defineProps({
    pack:Object,
})
</script>
