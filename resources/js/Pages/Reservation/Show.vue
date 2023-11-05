<template>
    <Head>
        <title>Reservation</title>
    </Head>
    <MainLayout>
        <div class="h-screen flex  justify-center items-center text-white">
            <div class="w-full mt-20 md:mt-0 h-full grid md:grid-cols-3">
                <div class="w-full md:col-span-2 border-r-[0.6px] border-gray-600 text-white ">
                    <div class="w-full h-full items-center justify-center flex gap-10 flex-col">
                        <h1 class="font-bold text-2xl">Reservation For {{ pack.name }}</h1>
                        <div class="space-y-2 w-full px-6">
                            <h1 class="font-bold text-xl">Reservation Details :</h1>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">Reservation Id : </p>
                                <p class="text-sm text-gray-400">{{ reservation.id }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">Date : </p>
                                <p class="text-sm text-gray-400">{{ reservation.reservation_date }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">Time : </p>
                                <p class="text-sm text-gray-400">{{ reservation.reservation_time }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">Drivers : </p>
                                <p class="text-sm text-gray-400">{{ reservation.drivers }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">Passengers : </p>
                                <p class="text-sm text-gray-400">{{ reservation.passengers }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">Children : </p>
                                <p class="text-sm text-gray-400">{{ reservation.children }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">Total Price : </p>
                                <p class="text-sm text-gray-400">€ {{ reservation.total_price }}</p>
                            </div>
                        </div>

                        <Link class="w-60" :href="route('contact')">
                            <MyButton>Contact Us</MyButton>
                        </Link>

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
import MyButton from "@/Components/MyButton.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    reservation: Object,
    pack: Object,
    customer: Object,
})
</script>
