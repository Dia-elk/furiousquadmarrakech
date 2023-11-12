<template>
    <div class="my-20 h-full w-full">
        <!-- Title -->
        <div class="mx-4 md:mx-24 flex items-center gap-4">
            <div class="h-20 bg-[#c10c10] w-2">
            </div>
            <div>
                <h3 class="text-sm text-gray-400">FAQs</h3>
                <h1 class="font-bold text-white text-4xl">Frequently asked questions</h1>
            </div>
        </div>
        <!-- /Title -->
        <div class="mt-20 mx-4  md:max-w-4xl md:mx-auto grid grid-cols-1 gap-4">
            <div class="cursor-pointer">
                <FaqCard @click="question1 = !question1" :is-open="question1"
                         question="1. Is it possible to pay on site ?"
                         answer="No, we currently do not offer online payment options. However, we are in the process of developing our website to integrate a secure payment system in the near future. Thank you for your understanding."/>
            </div>

            <div class="cursor-pointer">
                <FaqCard @click="question2 = !question2" :is-open="question2"
                         question="2. I haven’t received any confirmation after my online booking. What should I do?"
                         answer="If you haven't received your confirmation, please reach out to us via E-mail at furiousmarrakech@gmail.com or WhatsApp at +212 6 74 89 85 21, and we'll promptly assist you with more details."/>
            </div>

            <div class="cursor-pointer">
                <FaqCard @click="question3 = !question3" :is-open="question3"
                         question="3. My hotel is out of Marrakech and I am asked to pay supplement for the transfer. Why?"
                         answer="Our transfers services cover the Medina and Center of Marrakech without extra charges, within the limit of 5 kilometers out of the city. Some hotels are out of the city and this add a lot of kilometers for the drivers. The supplements are only to cover the time, the gas and the use of the vehicle. Supplement is usually 5€ / person, or more if hotel is far out. If you don’t feel like paying a supplement, ask your hotel if there is a shuttle going to the Center. After, we can make an appointment there. To confirm if your hotel is in the free-of- charge zone, please send un an E-mail at furiousmarrakech@gmail.com or contact us via WhatsApp at +212 6 74 89 85 21"/>
            </div>

            <div class="cursor-pointer">
                <FaqCard @click="question4 = !question4" :is-open="question4"
                         question="4. Can I arrange my pick up (Drop off) from (to) somewhere else in Marrakech instead my hotel?"
                         answer="Yes, this is possible if you inform us by E-mail, WhatsApp or Instagram at least 24 hours in advance. Supplement fees may apply if requested place is out of the center of Marrakech."/>
            </div>

            <div class="cursor-pointer">
                <FaqCard @click="question5 = !question5" :is-open="question5"
                         question="5. Does Furious Quad Marrakech provide group discount?"
                         answer="We can propose discounts for large groups, but it is important to know that sometimes more people means also more logistics.... In any way, we always aim to provide the best rates possible. Juste contact us by E-mail at furiousmarrakech@gmail.com."/>
            </div>

            <div class="cursor-pointer">
                <FaqCard @click="question6 = !question6" :is-open="question6"
                         question="6. Are there sand dunes around Marrakech?"
                         answer="No. It's rocky desert with a beautiful palm trees, and a climb to the top the small mountains in the nearest of Marrakesh called “Jbilat”, for stunning panoramic views."/>
            </div>

            <div class="cursor-pointer">
                <FaqCard @click="question7 = !question7" :is-open="question7"
                         question="7. Do I need a special insurance to participate in activities?"
                         answer="Each participant is responsible of its own insurance coverage. Furious Quad Marrakech advises everybody travelling in Morrocco to have a complete travel insurance that covers medical fees, ambulance, repatriation, etc. Make sure you are covered! Following the activity, you’ve chosen; you may need a complement travel insurance. Here a website where you can subscribe to extra coverage for outdoor activities, please check here."/>
            </div>
        </div>
    </div>
</template>

<script setup>

import FaqCard from "@/Components/FaqCard.vue";
import {ref} from "vue";

let question1 = ref(true)
let question2 = ref(false)
let question3 = ref(false)
let question4 = ref(false)
let question5 = ref(false)
let question6 = ref(false)
let question7 = ref(false)
</script>
