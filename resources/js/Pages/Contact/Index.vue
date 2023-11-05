<template>
    <Head>
        <title>Contact</title>
    </Head>

    <MainLayout>
       <div class="relative h-screen">
           <div class="h-screen w-full bg-gradient-to-b from-[#050403]/0 via-[#050403]/20 to-[#050403] absolute top-0 z-10 backdrop-blur-sm">

           </div>
           <div class="w-full h-full absolute top-0">
               <img src="images/heroBg.jpg" class="w-full h-full object-cover z-0 hidden md:block" alt="quad and motocross in marrakech">
               <img src="images/heroBgMobile.jpg" class="w-full h-full object-cover z-0 md:hidden block" alt="quad and motocross in marrakech">
           </div>
           <div class="flex h-full w-full text-white justify-center items-center absolute top-0  z-20  mt-10 px-4">
               <div class="max-w-7xl space-y-6">
                   <div class=" text-center space-y-2">
                       <h1 class="text-2xl  font-bold">Contact Us</h1>
                       <p class="text-sm max-w-2xl text-gray-300">Got a technical issue? Want to send feedback about a
                           Furious Quad Marrakech? Need details about Reservation? Let us know.</p>
                   </div>

                   <form class="w-full flex flex-col gap-4"
                         @submit.prevent="form.post(route('contact.store'), {onSuccess: successMessage,})">
                       <div class="flex flex-col md:flex-row gap-4">
                           <label class="w-full">
                               <h3 class="font-semibold">Name</h3>
                               <input v-model="form.name" type="text"
                                      class="bg-neutral-900/20 backdrop-blur-sm border-neutral-600 ring-0 focus:border-[#c10c10] focus:ring-[#c10c10] w-full">
                               <div class="text-sm text-[#c10c10]" v-if="form.errors.name">{{ form.errors.name }}</div>
                           </label>
                           <label class="w-full">
                               <h3 class="font-semibold">Email</h3>
                               <input v-model="form.email" type="email" required
                                      class="bg-neutral-900/20 backdrop-blur-sm border-neutral-600  ring-0 focus:border-[#c10c10] focus:ring-[#c10c10] w-full">
                               <div class="text-sm text-[#c10c10]" v-if="form.errors.email">{{ form.errors.email }}</div>
                           </label>
                       </div>
                       <label class="w-full">
                           <h3 class="font-semibold">Message</h3>
                           <textarea v-model="form.message" type="text" required rows="6"
                                     class="bg-neutral-900/20 backdrop-blur-sm border-neutral-600  ring-0 focus:border-[#c10c10] focus:ring-[#c10c10] w-full"></textarea>
                           <div class="text-sm text-[#c10c10]" v-if="form.errors.message">{{ form.errors.message }}</div>
                       </label>
                       <div class="flex justify-center">
                           <button class="w-48" type="submit">
                               <MyButton>
                                   <p v-if="!form.processing">Book Now</p>
                                   <Spinner v-if="form.processing"/>
                               </MyButton>
                           </button>
                       </div>
                   </form>
                   <p v-if="showSuccessMessage" class="text-center text-xs text-green-600">Your message has been sent
                       successfully</p>
               </div>
           </div>
       </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Head, useForm} from "@inertiajs/vue3";
import Spinner from "@/Components/Spinner.vue";
import MyButton from "@/Components/MyButton.vue";
import {ref} from "vue";

let showSuccessMessage = ref(false)
let form = useForm({
    name: ref(''),
    email: ref(''),
    message: ref(''),

})

function toggleShowMessage(){
    showSuccessMessage.value = !showSuccessMessage.value;
}
function successMessage() {
    form.reset();
    toggleShowMessage();
    setTimeout(toggleShowMessage,3000);
}
</script>
