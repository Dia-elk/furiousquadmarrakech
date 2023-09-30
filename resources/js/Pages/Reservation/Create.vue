<template>
    <Head>
        <title>Reservation</title>
    </Head>
    <MainLayout>
        <div class="flex w-full flex-col justify-center items-center text-white space-y-6 mb-24">
            <div class="h-[400px] w-full flex justify-center items-center pb-6 relative">
                <div class="w-full h-full absolute top-0">
                    <div class="w-full h-full absolute top-0 bg-gradient-to-b from-[#050403]/0 via-[#050403]/10 to-[#050403]">
                    </div>
                    <img v-if="pack.vehicle_id === 1" src="/images/heroBuggyBg.jpg" class="object-cover w-full h-full">
                    <img v-if="pack.vehicle_id === 2" src="/images/heroQuadBg.jpg" class="object-cover w-full h-full">
                    <img v-if="pack.vehicle_id === 3" src="/images/heroMotocrossBg.jpg" class="object-cover w-full h-full">
                </div>
                <h1 class="text-white text-4xl font-bold z-10">
                    {{pack.name}}
                </h1>
            </div>
            <h3>
                Order Details:
            </h3>
            <!-- form -->
            <div class="w-full px-6  md:px-24 lg:px-48">
                <form class="flex gap-4 flex-col" @submit.prevent="form.price=totalPrice; form.post(route('reservation.store',pack))">
                    <!-- form for driver and passenger and child -->
                    <div v-if="!showDetailsForm" class="flex gap-4 flex-col">

                        <!-- Driver  -->
                        <Divider/>
                        <label class="flex justify-between items-center">
                            <div>
                                <h3 class="font-semibold">Driver ( 17 - 75 )</h3>
                                <p class="text-xs">€ {{ pack.price }}</p>
                            </div>
                            <div class="w-36 bg-neutral-800 flex justify-between items-center">
                                <div @click="minusDriver"
                                     class="w-full cursor-pointer flex justify-center items-center border-r border-gray-600">
                                    -
                                </div>
                                <input
                                    v-model="form.driver"
                                    type="number" min="1" max="100" disabled
                                    class="bg-transparent  border-none ring-0 focus:border-none focus:ring-0  w-full  text-center"
                                >

                                <div @click="addDriver"
                                     class="w-full cursor-pointer flex justify-center items-center border-l border-gray-600">
                                    +
                                </div>
                            </div>
                        </label>
                        <Divider/>
                        <!-- /Driver  -->

                        <!-- Passenger  -->
                        <label class="flex justify-between items-center">
                            <div>
                                <h3 class="font-semibold">Passenger ( 10 - 75 )</h3>
                                <p v-if="pack.vehicle_id !== 3" class="text-xs">€ {{ pack.passenger_price }}</p>
                                <p v-if="pack.vehicle_id === 3" class="text-xs">Not available for Motocross</p>
                            </div>
                            <div v-if="pack.vehicle_id !== 3" class="w-36 bg-neutral-800 flex justify-between items-center">
                                <div @click="minusPassenger"
                                     class="w-full cursor-pointer flex justify-center items-center border-r border-gray-600">
                                    -
                                </div>
                                <input
                                    v-model="form.passenger"
                                    type="number" max="100" disabled
                                    class="bg-transparent  border-none ring-0 focus:border-none focus:ring-0  w-full  text-center"
                                >

                                <div @click="addPassenger"
                                     class="w-full cursor-pointer flex justify-center items-center border-l border-gray-600">
                                    +
                                </div>
                            </div>
                        </label>
                        <Divider/>
                        <!-- /Passenger  -->

                        <!-- Child  -->
                        <label class="flex justify-between items-center">
                            <div>
                                <h3 class="font-semibold">Child ( 5 - 9 )</h3>
                                <p v-if="pack.vehicle_id !== 3" class="text-xs">€ {{ pack.child_price }}</p>
                                <p v-if="pack.vehicle_id === 3" class="text-xs">Not available for Motocross</p>
                            </div>
                            <div  v-if="pack.vehicle_id !== 3" class="w-36 bg-neutral-800 flex justify-between items-center">
                                <div @click="minusChild"
                                     class="w-full cursor-pointer flex justify-center items-center border-r border-gray-600">
                                    -
                                </div>
                                <input
                                    v-model="form.child"
                                    type="number" max="100" disabled
                                    class="bg-transparent  border-none ring-0 focus:border-none focus:ring-0  w-full  text-center"
                                >

                                <div @click="addChild"
                                     class="w-full cursor-pointer flex justify-center items-center border-l border-gray-600">
                                    +
                                </div>
                            </div>
                        </label>
                        <Divider/>
                        <!-- /Child  -->

                        <!-- Total Price  -->
                        <label class="flex justify-between items-center">
                            <div>
                                <h3 class="font-semibold">Total Price</h3>
                            </div>
                            <div class="w-36 bg-neutral-800 flex justify-between items-center">
                                <input
                                    type="number" min="{{pack.price}}" disabled v-model="totalPrice"
                                    class="bg-transparent  border-none ring-0 focus:border-none focus:ring-0  w-full  text-center"
                                >
                            </div>
                        </label>
                        <Divider/>
                        <!-- /Total Price  -->
                    </div>
                    <!-- /form for driver and passenger and child -->

                    <!-- form for customer details -->
                    <div v-if="showDetailsForm" class="flex flex-col gap-6 mb-6 w-full h-full">
                        <div class="flex gap-10 w-full">
                            <label class="w-full">
                                <h3 class="font-semibold">Full Name</h3>
                                <input v-model="form.name" type="text"
                                       class="bg-neutral-900 border-none ring-0 focus:border-[#c10c10] focus:ring-[#c10c10] w-full">
                            </label>
                            <label class="w-full">
                                <h3 class="font-semibold">Country</h3>
                                <input v-model="form.country" type="text"
                                       class="bg-neutral-900 border-none ring-0 focus:border-[#c10c10] focus:ring-[#c10c10] w-full">
                            </label>
                        </div>
                        <div class="flex gap-10 w-full">
                            <label class="w-full">
                                <h3 class="font-semibold">Email</h3>
                                <input v-model="form.email" type="email"
                                       class="bg-neutral-900 border-none ring-0 focus:border-[#c10c10] focus:ring-[#c10c10] w-full">
                            </label>
                            <label class="w-full">
                                <h3 class="font-semibold">Phone Number</h3>
                                <input v-model="form.phone" type="tel"
                                       class="bg-neutral-900 border-none ring-0 focus:border-[#c10c10] focus:ring-[#c10c10] w-full">
                            </label>
                        </div>
                        <div class="flex gap-10 w-full">
                            <label class="w-full">
                                <h3 class="font-semibold">Date</h3>
                                <input v-model="form.date" type="date" :min="today"
                                       class="bg-neutral-900 border-none ring-0 focus:border-[#c10c10] focus:ring-[#c10c10] w-full">
                            </label>
                            <label class="w-full">
                                <h3 class="font-semibold">Time</h3>
                                <select v-model="form.time"
                                        class="input-date-icon bg-neutral-900 border-none ring-0 focus:border-[#c10c10] focus:ring-[#c10c10] w-full">
                                    <option>09:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>
                                    <option>12:00</option>
                                    <option>13:00</option>
                                    <option>14:00</option>
                                    <option>15:00</option>
                                    <option>16:00</option>
                                    <option>17:00</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <!-- /form for customer details -->
                    <div v-if="!showDetailsForm" class="flex justify-end w-full">
                        <div class="w-48">
                            <MyButton @click="showDetailsForm=true">
                                Next
                            </MyButton>
                        </div>
                    </div>

                    <div v-if="showDetailsForm" class="flex justify-between w-full">
                        <div class="w-48  cursor-pointer  flex justify-center items-center gap-4" @click="showDetailsForm=false" @mouseenter="isPreviousHover=true" @mouseleave="isPreviousHover=false">
                               <div class="transition-all duration-500 " :class="isPreviousHover?'mr-4':''">
                                   <svg width="55" height="8" viewBox="0 0 55 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M0.646443 3.64644C0.451181 3.8417 0.451181 4.15829 0.646443 4.35355L3.82842 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.73079 7.34027 4.73079 7.02368 4.53553 6.82842L1.7071 4L4.53553 1.17157C4.73079 0.976306 4.73079 0.659724 4.53553 0.464462C4.34027 0.2692 4.02369 0.269199 3.82842 0.464462L0.646443 3.64644ZM55 3.5L0.999996 3.5L0.999996 4.5L55 4.5L55 3.5Z" fill="white"/>
                                   </svg>

                               </div>
                            <div>
                                Previous
                            </div>
                        </div>
                        <button class="w-48" type="submit">
                            <MyButton>
                                <p v-if="!form.processing">Book Now</p>
                                <Spinner v-if="form.processing"/>
                            </MyButton>
                        </button>
                    </div>


                </form>
            </div>
            <!-- /form -->

        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import MyButton from "@/Components/MyButton.vue";
import {Head, useForm} from "@inertiajs/vue3";
import {ref} from "vue";
import Spinner from "@/Components/Spinner.vue";
import Divider from "@/Components/Divider.vue";
import PackCard from "@/Components/PackCard.vue";
import {Link} from "@inertiajs/vue3";


const showDetailsForm = ref(false);
const isPreviousHover = ref(false);
const today = ref(new Date().toISOString().split('T')[0]);

const props = defineProps({
    pack: Object,
})

const form = useForm({
    email: ref(''),
    phone: ref(''),
    name: ref(''),
    country: ref(''),
    driver: ref(1),
    passenger: ref(0),
    child: ref(0),
    date: ref(''),
    time: ref('09:00'),
    price:ref(),
})


let totalPrice = ref((form.passenger * props.pack.passenger_price + form.driver * props.pack.price + form.child * props.pack.child_price).toFixed(2))

function addDriver() {
    if (form.driver < 100) {
        form.driver++;
        totalPrice = ref((form.passenger * props.pack.passenger_price + form.driver * props.pack.price + form.child * props.pack.child_price).toFixed(2))


    }
}

function minusDriver() {
    if (form.driver > 1) {
        form.driver--;

        totalPrice = ref((form.passenger * props.pack.passenger_price + form.driver * props.pack.price + form.child * props.pack.child_price).toFixed(2))

    }
}

function addPassenger() {
    if (form.passenger < 100) {
        form.passenger++;

        totalPrice = ref((form.passenger * props.pack.passenger_price + form.driver * props.pack.price + form.child * props.pack.child_price).toFixed(2))

    }
}

function minusPassenger() {
    if (form.passenger > 0) {
        form.passenger--;
        totalPrice = ref((form.passenger * props.pack.passenger_price + form.driver * props.pack.price + form.child * props.pack.child_price).toFixed(2))

    }
}

function addChild() {
    if (form.child < 100) {
        form.child++;

        totalPrice = ref((form.passenger * props.pack.passenger_price + form.driver * props.pack.price + form.child * props.pack.child_price).toFixed(2))

    }
}

function minusChild() {
    if (form.child > 0) {
        form.child--;
        totalPrice = ref((form.passenger * props.pack.passenger_price + form.driver * props.pack.price + form.child * props.pack.child_price).toFixed(2))

    }
}


function book(){
    form.price = totalPrice;
    form.post(route('reservation.store',pack));
}

</script>

<style>
/* Remove increment and decrement arrows on hover */
input[type="number"] {
    /* Firefox */
    -moz-appearance: textfield;
    /* Webkit browsers */
    -webkit-appearance: none;
    /* Edge */
    appearance: none;
}

/* Reset styles for number input in Firefox */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Remove arrows on hover in Firefox */
input[type="number"]:hover::-webkit-inner-spin-button,
input[type="number"]:hover::-webkit-outer-spin-button {
    display: none;
}

input[type="date"]::-webkit-calendar-picker-indicator {
    cursor: pointer;
    border-radius: 4px;
    margin-right: 2px;
    opacity: 0.6;
    filter: invert(0.8);
}

input[type="date"]::-webkit-calendar-picker-indicator:hover {
    opacity: 1
}

</style>

