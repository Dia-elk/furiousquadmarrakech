<template>
    <div class="my-20 h-full w-full">
        <!-- About Us -->
        <div>
            <!-- Title -->
            <div class="mx-4 md:mx-24 flex items-center gap-4">
                <div class="h-20 bg-[#c10c10] w-2"></div>
                <div>
                    <h3 class="text-sm text-gray-400">{{ $t('aboutUsSubtitle') }}</h3>
                    <h1 class="font-bold text-white text-4xl">{{ $t('aboutUsTitle') }}</h1>
                </div>
            </div>
            <!-- /Title -->

            <!-- Paragraphs -->
            <div class="mt-16 mx-4 md:mx-24 text-gray-300">
                <p>{{ $t('aboutUsParagraph1') }}</p>
                <p class="mt-8">{{ $t('aboutUsParagraph2') }}</p>
            </div>
            <!-- /Paragraphs -->
        </div>
        <!-- /About Us -->
    </div>
</template>

<script setup>
</script>
