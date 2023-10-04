<template>
    <Head>
        <title>Reservation</title>
    </Head>
    <MainLayout>
        <div class="h-screen flex  justify-center items-center text-white ">
            <div class="w-full mt-20 md:mt-0 h-full grid md:grid-cols-3">
                <div class="w-full md:col-span-2 border-r-[0.6px] border-gray-600 text-white ">
                    <div class="w-full h-full justify-center flex gap-6 flex-col">
                        <h1 class="text-center text-sm"><span class="text-md font-semibold">Reservation Id : </span>{{reservation.id}}</h1>
                    </div>
                </div>

                <div class="w-full md:col-span-1 flex flex-col justify-center">
                    <PackCardShowReservation :pack="pack"/>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Head} from "@inertiajs/vue3";
import PackCardShowReservation from "@/Components/PackCardShowReservation.vue";
import Divider from "@/Components/Divider.vue";

defineProps({
    reservation: Object,
    pack: Object,
    customer: Object,
})
</script>
