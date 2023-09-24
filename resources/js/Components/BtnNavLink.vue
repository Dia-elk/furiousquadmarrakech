<template>
    <Link>
        <div class="bg-[#c10c10] hover:bg-[#c10c10]/80 px-6 py-2">
            <p
                class="text-xs transition-all duration-500 text-gray-300 font-bold"
            >
                <slot/>
            </p>
        </div>
    </Link>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";
defineProps({
    href :String,
})

</script>
