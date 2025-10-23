<template>
    <MainLayout>
        <!-- Hero Section -->
        <div class="relative h-screen overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-black z-10"></div>
            <div class="absolute inset-0">
                <img
                    src="images/heroBg.jpg"
                    class="w-full h-full object-cover transform scale-110 transition-transform duration-[20s] hover:scale-105"
                    alt="Adventure gallery Marrakech"
                >
            </div>

            <div class="relative z-20 flex h-full items-center justify-center">
                <div class="text-center space-y-6 px-4">
                    <div class="space-y-2">
                        <h1 class="text-5xl md:text-7xl font-bold text-white tracking-wider">
                            <span class="bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-400 bg-clip-text text-transparent">
                                FURIOUS
                            </span>
                        </h1>
                        <h2 class="text-2xl md:text-4xl font-bold text-neutral-200">Adventure Gallery</h2>
                    </div>
                    <p class="text-base text-neutral-300 max-w-2xl mx-auto leading-relaxed">
                        Witness the thrill, feel the adrenaline, and experience the beauty of Marrakech's desert through our lens
                    </p>

                    <!-- Call to Action -->
                    <div class="mt-8">
                        <MyButton>Plan your Ride</MyButton>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="bg-black py-20">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 auto-rows-[200px]">
                    <div
                        v-for="(image, index) in galleryImages"
                        :key="index"
                        class="group relative overflow-hidden cursor-pointer"
                        :class="getGridClass(index)"
                        @click="openLightbox(index)"
                    >
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-all duration-500 z-10"></div>

                        <!-- Image -->
                        <img
                            :src="image"
                            :alt="`Gallery ${index + 1}`"
                            class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110"
                        >

                        <!-- Zoom Icon -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-amber-400/90 flex items-center justify-center transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div
            v-if="showLightbox"
            class="fixed inset-0 z-50 bg-black/40 flex items-center justify-center p-4"
            @click="closeLightbox"
        >
            <!-- Close Button - Top Right -->
            <button
                @click="closeLightbox"
                class="fixed top-6 right-6 text-white hover:text-amber-400 transition-colors z-50 group"
            >
                <svg class="w-10 h-10 transform group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="relative flex items-center justify-center" @click.stop>
                <!-- Image - Centered -->
                <img
                    :src="galleryImages[currentImageIndex]"
                    :alt="`Image ${currentImageIndex + 1}`"
                    class="max-w-[90vw] max-h-[90vh] object-contain shadow-2xl rounded-lg"
                    loading="lazy"
                >

                <!-- Navigation Buttons -->
                <button
                    @click="prevImage"
                    class="fixed left-8 top-1/2 transform -translate-y-1/2 w-14 h-14 rounded-full bg-amber-400/90 hover:bg-amber-400 text-black flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg"
                    v-if="galleryImages.length > 1"
                >
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>

                <button
                    @click="nextImage"
                    class="fixed right-8 top-1/2 transform -translate-y-1/2 w-14 h-14 rounded-full bg-amber-400/90 hover:bg-amber-400 text-black flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg"
                    v-if="galleryImages.length > 1"
                >
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- Dots Navigation -->
                <div class="fixed bottom-8 left-1/2 transform -translate-x-1/2 flex items-center gap-2">
                    <button
                        v-for="(image, idx) in galleryImages"
                        :key="idx"
                        @click="currentImageIndex = idx"
                        :class="idx === currentImageIndex ? 'w-8 bg-amber-400' : 'w-2 bg-white/40 hover:bg-white/60'"
                        class="h-2 rounded-full transition-all duration-300"
                    ></button>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import { ref, onMounted, onUnmounted } from 'vue';

// Reactive data
const showLightbox = ref(false);
const currentImageIndex = ref(0);


const galleryImages = ref([
    'images/image00001.jpeg',
    'images/image00004.jpeg',
    'images/image00002.jpeg',
    'images/image00003.jpeg',
    'images/image00005.jpeg',
    'images/image00006.jpeg',
    'images/image00007.jpeg',
    'images/image00008.jpeg',
    'images/image00009.jpeg',
    'images/image00010.jpeg',
    'images/image00011.jpeg',
    'images/image00012.jpeg',
    'images/image00013.jpeg',
    'images/image00014.jpeg',
    'images/image00015.jpeg',
    'images/image00016.jpeg',
    'images/image00017.jpeg',
    'images/image00023.jpeg',
    'images/image00024.jpeg',
    'images/image00025.jpeg',
    'images/image00026.jpeg',
    'images/image00027.jpeg',
    'images/image00028.jpeg',
    'images/image00029.jpeg',
    'images/image00030.jpeg',
    'images/image00031.jpeg',
    'images/image00032.jpeg',
    'images/image00033.jpeg',
    'images/image00034.jpeg',
    'images/image00035.jpeg',
    'images/image00036.jpeg',
    'images/image00037.jpeg',
    'images/image00038.jpeg',
    'images/image00039.jpeg',
    'images/image00040.jpeg',
    'images/image00041.jpeg',
    'images/image00042.jpeg',
]);


// Methods
const openLightbox = (index) => {
    currentImageIndex.value = index;
    showLightbox.value = true;
    document.body.style.overflow = 'hidden';
};

const closeLightbox = () => {
    showLightbox.value = false;
    document.body.style.overflow = 'auto';
};

const nextImage = () => {
    currentImageIndex.value = (currentImageIndex.value + 1) % galleryImages.value.length;
};

const prevImage = () => {
    currentImageIndex.value = currentImageIndex.value === 0
        ? galleryImages.value.length - 1
        : currentImageIndex.value - 1;
};

const getGridClass = (index) => {
    const patterns = [
        'md:col-span-2 md:row-span-2',
        'md:col-span-1 md:row-span-2',
        'md:col-span-1 md:row-span-2',
        'md:col-span-2 md:row-span-1',
        'md:col-span-1 md:row-span-1',
        'md:col-span-1 md:row-span-1'
    ];
    return patterns[index % patterns.length];
};

// Keyboard navigation
const handleKeydown = (event) => {
    if (!showLightbox.value) return;

    switch (event.key) {
        case 'Escape':
            closeLightbox();
            break;
        case 'ArrowLeft':
            prevImage();
            break;
        case 'ArrowRight':
            nextImage();
            break;
    }
};

onMounted(() => {
    document.addEventListener('keydown', handleKeydown);
});

onUnmounted(() => {
    document.removeEventListener('keydown', handleKeydown);
    document.body.style.overflow = 'auto';
});
</script>

<style lang="scss" scoped>
</style>
