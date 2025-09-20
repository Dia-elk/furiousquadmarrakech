<template>
    <MainLayout>
        <!-- Hero Section -->
        <div class="relative h-screen overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-black z-20"></div>
            <div class="absolute inset-0 z-10">
                <img
                    src="images/heroBg.jpg"
                    class="w-full h-full object-cover transform scale-110 transition-transform duration-[20s] hover:scale-105"
                    alt="Adventure gallery Marrakech"
                >
            </div>

            <div class="relative z-30 flex h-full items-center justify-center">
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

                    <!-- Stats -->
                    <div class="flex justify-center gap-8 mt-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-400">500+</div>
                            <div class="text-sm text-neutral-400">Adventures Captured</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-400">50+</div>
                            <div class="text-sm text-neutral-400">Locations</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-400">1000+</div>
                            <div class="text-sm text-neutral-400">Happy Riders</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Navigation -->
        <div class="bg-neutral-900 py-16">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex items-center gap-4 mb-12">
                    <div class="h-16 bg-amber-400 w-2"></div>
                    <div>
                        <h3 class="text-sm text-gray-400 uppercase tracking-wider">Explore</h3>
                        <h2 class="font-bold text-white text-4xl">Our Adventures</h2>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4 justify-center mb-12">
                    <button
                        @click="activeCategory = 'all'"
                        :class="activeCategory === 'all' ? 'bg-amber-400 text-black shadow-lg shadow-amber-400/25' : 'bg-gray-800 text-gray-300 hover:bg-gray-700 hover:text-white'"
                        class="px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 border border-transparent hover:border-amber-400/30"
                    >
                        All Adventures
                    </button>
                    <button
                        @click="activeCategory = 'quad'"
                        :class="activeCategory === 'quad' ? 'bg-amber-400 text-black shadow-lg shadow-amber-400/25' : 'bg-gray-800 text-gray-300 hover:bg-gray-700 hover:text-white'"
                        class="px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 border border-transparent hover:border-amber-400/30"
                    >
                        Quad Rides
                    </button>
                    <button
                        @click="activeCategory = 'buggy'"
                        :class="activeCategory === 'buggy' ? 'bg-amber-400 text-black shadow-lg shadow-amber-400/25' : 'bg-gray-800 text-gray-300 hover:bg-gray-700 hover:text-white'"
                        class="px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 border border-transparent hover:border-amber-400/30"
                    >
                        Buggy Tours
                    </button>
                    <button
                        @click="activeCategory = 'motocross'"
                        :class="activeCategory === 'motocross' ? 'bg-amber-400 text-black shadow-lg shadow-amber-400/25' : 'bg-gray-800 text-gray-300 hover:bg-gray-700 hover:text-white'"
                        class="px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 border border-transparent hover:border-amber-400/30"
                    >
                        Motocross
                    </button>
                    <button
                        @click="activeCategory = 'landscape'"
                        :class="activeCategory === 'landscape' ? 'bg-amber-400 text-black shadow-lg shadow-amber-400/25' : 'bg-gray-800 text-gray-300 hover:bg-gray-700 hover:text-white'"
                        class="px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 border border-transparent hover:border-amber-400/30"
                    >
                        Landscapes
                    </button>
                </div>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="bg-black pb-20">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <div
                        v-for="(image, index) in filteredImages"
                        :key="index"
                        class="group relative overflow-hidden bg-neutral-900 cursor-pointer transform transition-all duration-500 hover:scale-105 hover:z-10 rounded-xl"
                        :class="getImageHeight(index)"
                        @click="openLightbox(image, index)"
                    >
                        <!-- Image -->
                        <img
                            :src="image.src"
                            :alt="image.alt"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 rounded-xl"
                        >

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 rounded-xl">
                            <div class="absolute bottom-4 left-4 right-4">
                                <h3 class="text-white font-bold text-lg mb-2">{{ image.title }}</h3>
                                <p class="text-amber-400 text-sm font-medium uppercase tracking-wider">{{ image.category }}</p>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-2 h-2 bg-amber-400 rounded-full"></div>
                                    <span class="text-sm text-neutral-300">{{ image.location }}</span>
                                </div>
                            </div>

                            <!-- View Icon -->
                            <div class="absolute top-4 right-4">
                                <div class="w-10 h-10 bg-amber-400 rounded-full flex items-center justify-center shadow-lg shadow-amber-400/25 transition-all duration-300 group-hover:scale-110">
                                    <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="text-center mt-12" v-if="!showAll">
                    <button
                        @click="loadMore"
                        class="bg-amber-400 hover:bg-amber-500 text-black px-8 py-4 font-bold text-lg rounded-xl transform transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-amber-400/25"
                    >
                        Load More Adventures
                    </button>
                </div>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div
            v-if="showLightbox"
            class="fixed inset-0 z-50 bg-black/95 flex items-center justify-center p-4"
            @click="closeLightbox"
        >
            <div class="relative max-w-6xl max-h-full">
                <!-- Close Button -->
                <button
                    @click="closeLightbox"
                    class="absolute -top-12 right-0 text-white text-xl hover:text-amber-400 transition-colors duration-300"
                >
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <!-- Image -->
                <img
                    :src="currentImage.src"
                    :alt="currentImage.alt"
                    class="max-w-full max-h-[85vh] object-contain shadow-2xl rounded-xl"
                    @click.stop
                >

                <!-- Image Info -->
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 to-transparent p-6 rounded-b-xl">
                    <h3 class="text-white text-2xl font-bold mb-3">{{ currentImage.title }}</h3>
                    <div class="flex items-center gap-4 text-neutral-300">
                        <span class="bg-amber-400 text-black px-3 py-1 text-sm font-medium rounded-full uppercase tracking-wider">{{ currentImage.category }}</span>
                        <span class="text-lg">{{ currentImage.location }}</span>
                    </div>
                </div>

                <!-- Navigation -->
                <button
                    @click="prevImage"
                    class="absolute left-6 top-1/2 transform -translate-y-1/2 bg-amber-400 hover:bg-amber-500 text-black w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 shadow-lg shadow-amber-400/25"
                    v-if="filteredImages.length > 1"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>

                <button
                    @click="nextImage"
                    class="absolute right-6 top-1/2 transform -translate-y-1/2 bg-amber-400 hover:bg-amber-500 text-black w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 shadow-lg shadow-amber-400/25"
                    v-if="filteredImages.length > 1"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-neutral-900 py-20">
            <div class="max-w-4xl mx-auto text-center px-4">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Ready for Your Own Adventure?
                </h2>
                <p class="text-lg text-neutral-300 mb-10 max-w-2xl mx-auto">
                    Join thousands of adventure seekers and create memories that will last a lifetime
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <MyButton>Plan your Ride</MyButton>
                    <button class="border-2 border-amber-400 text-amber-400 hover:bg-amber-400 hover:text-black px-8 py-4 font-bold text-lg rounded-xl transform transition-all duration-300 hover:scale-105">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import MyButton from "@/Components/MyButton.vue"; // Assuming this is the path
import { ref, computed, onMounted, onUnmounted } from 'vue';

// Reactive data
const activeCategory = ref('all');
const showLightbox = ref(false);
const currentImageIndex = ref(0);
const showAll = ref(false);
const visibleCount = ref(12);

// Sample gallery data - replace with your actual images
const galleryImages = ref([
    {
        src: 'images/heroQuadBgMobile.jpg',
        alt: 'Quad adventure in Marrakech desert',
        title: 'Desert Quad Expedition',
        category: 'quad',
        location: 'Agafay Desert'
    },
    {
        src: 'images/heroBuggyBgMobile.jpg',
        alt: 'Buggy tour through palm groves',
        title: 'Palm Grove Buggy Safari',
        category: 'buggy',
        location: 'Marrakech Palmeraie'
    },
    {
        src: 'images/heroMotocrossBgMobile.jpg',
        alt: 'Motocross adventure in rocky terrain',
        title: 'Mountain Motocross Challenge',
        category: 'motocross',
        location: 'Atlas Mountains'
    },
    {
        src: 'images/heroBg.jpg',
        alt: 'Stunning desert landscape at sunset',
        title: 'Golden Desert Sunset',
        category: 'landscape',
        location: 'Agafay Desert'
    },
    {
        src: 'images/heroQuadBgMobile.jpg',
        alt: 'Group quad adventure',
        title: 'Team Adventure Experience',
        category: 'quad',
        location: 'Jbilets Desert'
    },
    {
        src: 'images/heroBuggyBgMobile.jpg',
        alt: 'Buggy racing experience',
        title: 'High-Speed Buggy Race',
        category: 'buggy',
        location: 'Desert Circuit'
    },
    {
        src: 'images/heroMotocrossBgMobile.jpg',
        alt: 'Professional motocross training',
        title: 'Pro Motocross Training',
        category: 'motocross',
        location: 'Mountain Track'
    },
    {
        src: 'images/heroBg.jpg',
        alt: 'Berber village landscape',
        title: 'Traditional Berber Village',
        category: 'landscape',
        location: 'High Atlas'
    },
    {
        src: 'images/heroQuadBgMobile.jpg',
        alt: 'Solo quad adventure',
        title: 'Solo Desert Explorer',
        category: 'quad',
        location: 'Agafay Desert'
    },
    {
        src: 'images/heroBuggyBgMobile.jpg',
        alt: 'Family buggy tour',
        title: 'Family Adventure Day',
        category: 'buggy',
        location: 'Family Circuit'
    },
    {
        src: 'images/heroMotocrossBgMobile.jpg',
        alt: 'Extreme motocross jump',
        title: 'Extreme Jump Challenge',
        category: 'motocross',
        location: 'Extreme Park'
    },
    {
        src: 'images/heroBg.jpg',
        alt: 'Desert oasis view',
        title: 'Hidden Desert Oasis',
        category: 'landscape',
        location: 'Secret Oasis'
    }
]);

// Computed properties
const filteredImages = computed(() => {
    const filtered = activeCategory.value === 'all'
        ? galleryImages.value
        : galleryImages.value.filter(img => img.category === activeCategory.value);

    return showAll.value ? filtered : filtered.slice(0, visibleCount.value);
});

const currentImage = computed(() => {
    return filteredImages.value[currentImageIndex.value] || {};
});

// Methods
const openLightbox = (image, index) => {
    currentImageIndex.value = index;
    showLightbox.value = true;
    document.body.style.overflow = 'hidden';
};

const closeLightbox = () => {
    showLightbox.value = false;
    document.body.style.overflow = 'auto';
};

const nextImage = () => {
    currentImageIndex.value = (currentImageIndex.value + 1) % filteredImages.value.length;
};

const prevImage = () => {
    currentImageIndex.value = currentImageIndex.value === 0
        ? filteredImages.value.length - 1
        : currentImageIndex.value - 1;
};

const loadMore = () => {
    visibleCount.value += 8;
    if (visibleCount.value >= galleryImages.value.length) {
        showAll.value = true;
    }
};

const getImageHeight = (index) => {
    const heights = ['h-64', 'h-80', 'h-72', 'h-96', 'h-60'];
    return heights[index % heights.length];
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
