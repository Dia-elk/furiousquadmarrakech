<script setup>
import { computed } from 'vue'
import {Head} from "@inertiajs/vue3";
import ErrorLayouts from "@/Layouts/ErrorLayouts.vue";

const props = defineProps({ status: Number })

const title = computed(() => {
    return {
        503: '503: Service Unavailable',
        500: '500: Server Error',
        404: '404: Page Not Found',
        403: '403: Forbidden',
        409: '409: You\'re already subscribed!',
        405 :'405: Method Not Allowed',
    }[props.status]
})

const description = computed(() => {
    return {
        503: 'Sorry, we are doing some maintenance. Please check back soon.',
        500: 'Whoops, something went wrong on our servers.',
        404: 'Sorry, the page you are looking for could not be found.',
        403: 'Sorry, you are forbidden from accessing this page.',
        409: 'It looks like you\'re already subscribed to our service. No need to worry, you\'re all set to enjoy our updates and offers. If you have any questions or need assistance, feel free to reach out to our support team. Thank you for being a valued member of our community!',
        405: 'Please let us know what you were doing when this error occurred. We will fix it as soon as possible. Sorry for any inconvenience caused.',
    }[props.status]
})
</script>

<template>
    <Head>
        <title>{{ props.status }}</title>
    </Head>
    <ErrorLayouts :title="title" :message="description"/>
</template>
