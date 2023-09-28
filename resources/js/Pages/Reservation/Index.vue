<template>
    <Head>
        <title>Reservation</title>
    </Head>
    <MainLayout>
        <div class="h-screen flex  flex-col justify-center items-center text-white">
            Reservation for {{pack.name}}
            <form @submit.prevent="form.post(route('reservation.store',pack))">
                <input type="email" class="text-black" v-model="form.email" >
                <input type="tel" class="text-black" v-model="form.phone" >
               <button type="submit">
                   <MyButton>
                       <p v-if="!form.processing">
                           Book
                       </p>
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
import {ref} from "vue";
import Spinner from "@/Components/Spinner.vue";
defineProps({
    pack:Object,
})
const form = useForm({
    email: ref(''),
    phone:ref(''),
})
</script>
