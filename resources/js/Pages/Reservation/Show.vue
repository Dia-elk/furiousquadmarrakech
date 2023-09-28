<template>
    <Head>
        <title>Reservation</title>
    </Head>
    <MainLayout>
        <div class="h-screen flex  flex-col justify-center items-center text-white">
           {{pack.vehicle.name}} Reservation for {{pack.name}} and reservation Id {{reservation.id}} the client email is {{customer.email}}
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Head} from "@inertiajs/vue3";
defineProps({
    reservation:Object,
    pack:Object,
    customer:Object,
})
</script>
