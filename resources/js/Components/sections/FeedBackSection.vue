<template>
    <div v-if="page.props.feedbacks.length>0" class="my-20">
        <!-- Title -->
        <div class="mx-4 md:mx-24 flex items-center gap-4">
            <div class="h-20 bg-[#c10c10] w-2"></div>
            <div>
                <h3 class="text-sm text-gray-400">{{ $t('feedbackSubtitle') }}</h3>
                <h1 class="font-bold text-white text-4xl">{{ $t('feedbackTitle') }}</h1>
            </div>
        </div>
        <!-- /Title -->

        <div class="grid md:grid-cols-3 gap-4 px-8 md:px-24 mt-20">
            <FeedBackCard v-for="feedback in page.props.feedbacks"
                          :name="feedback.name"
                          :platform="feedback.platform"
                          :body="feedback.body"
            />
        </div>

        <div class="flex justify-center">
            <a class="mt-16 w-60" target="_blank"
               href="https://www.tripadvisor.com/UserReviewEdit-g293734-d26818101-Furious_Quad_Marrakech-Marrakech_Marrakech_Safi.html">
                <MyButton>
                    {{ $t('addFeedbackButton') }}
                </MyButton>
            </a>
        </div>
    </div>
</template>

<script setup>
import {usePage} from "@inertiajs/vue3";
const page = usePage();

import FeedBackCard from "@/Components/FeedBackCard.vue";
import MyButton from "@/Components/MyButton.vue";
import Tripadvisor from "@/Icons/Tripadvisor.vue";
</script>
