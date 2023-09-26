<template>
    <Link>
        <div class="bg-[#c10c10] hover:bg-[#c10c10]/80 w-fit px-6 py-2 transition-all duration-500 ">
            <p
                class="text-xs text-gray-100 font-medium"
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
