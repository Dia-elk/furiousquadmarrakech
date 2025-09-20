<template>
    <div class="my-20 h-full w-full">
        <!-- Title -->
        <div class="mx-4 md:mx-24 flex items-center gap-4">
            <div class="h-20 bg-[#c10c10] w-2"></div>
            <div>
                <h3 class="text-sm text-gray-400">{{ $t('faqSubtitle') }}</h3>
                <h4 class="font-bold text-white text-4xl">{{ $t('faqTitle') }}</h4>
            </div>
        </div>
        <!-- /Title -->

        <div class="mt-20 mx-4 md:max-w-4xl md:mx-auto grid grid-cols-1 gap-4">
            <div class="cursor-pointer">
                <FaqCard
                    @click="question1 = !question1"
                    :is-open="question1"
                    :question="$t('faqQ1Question')"
                    :answer="$t('faqQ1Answer')"
                />
            </div>

            <div class="cursor-pointer">
                <FaqCard
                    @click="question2 = !question2"
                    :is-open="question2"
                    :question="$t('faqQ2Question')"
                    :answer="$t('faqQ2Answer')"
                />
            </div>

            <div class="cursor-pointer">
                <FaqCard
                    @click="question3 = !question3"
                    :is-open="question3"
                    :question="$t('faqQ3Question')"
                    :answer="$t('faqQ3Answer')"
                />
            </div>

            <div class="cursor-pointer">
                <FaqCard
                    @click="question4 = !question4"
                    :is-open="question4"
                    :question="$t('faqQ4Question')"
                    :answer="$t('faqQ4Answer')"
                />
            </div>

            <div class="cursor-pointer">
                <FaqCard
                    @click="question5 = !question5"
                    :is-open="question5"
                    :question="$t('faqQ5Question')"
                    :answer="$t('faqQ5Answer')"
                />
            </div>

            <div class="cursor-pointer">
                <FaqCard
                    @click="question6 = !question6"
                    :is-open="question6"
                    :question="$t('faqQ6Question')"
                    :answer="$t('faqQ6Answer')"
                />
            </div>

            <div class="cursor-pointer">
                <FaqCard
                    @click="question7 = !question7"
                    :is-open="question7"
                    :question="$t('faqQ7Question')"
                    :answer="$t('faqQ7Answer')"
                />
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
