<template>
    <Head>
        <title>{{ $t('reservation_confirmation.title') }}</title>
    </Head>
    <MainLayout>
        <div class="h-screen flex justify-center items-center text-white">
            <div class="w-full mt-20 md:mt-0 h-full grid md:grid-cols-3">
                <div class="w-full md:col-span-2 border-r-[0.6px] border-gray-600 text-white">
                    <div class="w-full h-full flex flex-col gap-10 items-center justify-center px-4 md:px-6">
                        <h1 class="font-bold text-2xl">{{ $t('reservation_confirmation.success') }}</h1>
                        <div class="space-y-2 w-full">
                            <h1 class="font-bold text-xl">{{ $t('reservation_confirmation.details') }}</h1>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">{{ $t('reservation_confirmation.id') }} :</p>
                                <p class="text-sm text-gray-400">{{ reservation.id }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">{{ $t('reservation_confirmation.date') }} :</p>
                                <p class="text-sm text-gray-400">{{ reservation.reservation_date }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">{{ $t('reservation_confirmation.time') }} :</p>
                                <p class="text-sm text-gray-400">{{ reservation.reservation_time }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">{{ $t('reservation_confirmation.drivers') }} :</p>
                                <p class="text-sm text-gray-400">{{ reservation.drivers }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">{{ $t('reservation_confirmation.passengers') }} :</p>
                                <p class="text-sm text-gray-400">{{ reservation.passengers }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">{{ $t('reservation_confirmation.children') }} :</p>
                                <p class="text-sm text-gray-400">{{ reservation.children }}</p>
                            </div>

                            <div class="flex justify-between">
                                <p class="text-md font-medium text-gray-400">{{ $t('reservation_confirmation.total_price') }} :</p>
                                <p class="text-sm text-gray-400">€ {{ reservation.total_price }}</p>
                            </div>
                        </div>

                        <Link class="w-60" :href="route('contact')">
                            <MyButton>{{ $t('reservation_confirmation.contact_us') }}</MyButton>
                        </Link>
                    </div>
                </div>

                <div class="hidden md:flex w-full md:col-span-1 flex-col justify-center">
                    <PackCardShowReservation :pack="pack"/>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Head, Link} from "@inertiajs/vue3";
import PackCardShowReservation from "@/Components/PackCardShowReservation.vue";
import MyButton from "@/Components/MyButton.vue";

defineProps({
    reservation: Object,
    pack: Object,
    customer: Object,
})
</script>
