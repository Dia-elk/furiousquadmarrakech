<template>
    <Head>
        <title>{{ $t('reservation.title') }}</title>
    </Head>
    <MainLayout>
        <div class="h-screen flex flex-col justify-center items-center text-white">
            {{ $t('reservation.for') }} {{ pack.name }}
            <form @submit.prevent="form.post(route('reservation.store', pack))" class="flex flex-col gap-4 mt-4">
                <input type="email" class="text-black" v-model="form.email" :placeholder="$t('reservation.email')" required>
                <input type="tel" class="text-black" v-model="form.phone" :placeholder="$t('reservation.phone')" required>
                <button type="submit">
                    <MyButton>
                        <p v-if="!form.processing">{{ $t('reservation.book_now') }}</p>
                        <Spinner v-if="form.processing"/>
                    </MyButton>
                </button>
            </form>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import MyButton from "@/Components/MyButton.vue";
import {Head, useForm} from "@inertiajs/vue3";
import Spinner from "@/Components/Spinner.vue";
import {ref} from "vue";

defineProps({
    pack: Object
})

const form = useForm({
    email: ref(''),
    phone: ref(''),
})
</script>
