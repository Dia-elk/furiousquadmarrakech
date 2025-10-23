<template>
    <MainLayout>
        <!-- Hero Section -->
        <div class="relative h-screen bg-neutral-900 flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/30 to-black/60 z-10"></div>
            <div class="absolute inset-0">
                <img
                    src="images/heroBg.jpg"
                    alt="Customer reviews background"
                    class="w-full h-full object-cover opacity-40"
                />
            </div>
            <div class="relative z-20 text-center px-4">
                <h1 class="text-6xl md:text-8xl font-bold text-white mb-6">
                    Customer <span class="text-white">Reviews</span>
                </h1>
                <p class="text-lg text-neutral-300 max-w-2xl mx-auto">What our adventurers say about their experience with us</p>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-black py-12">
            <div class="max-w-6xl mx-auto px-4">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">4.9</div>
                        <div class="text-sm text-neutral-400">Average Rating</div>
                        <div class="flex justify-center mt-2">
                            <div class="flex text-white">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">1200+</div>
                        <div class="text-sm text-neutral-400">Happy Customers</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">98%</div>
                        <div class="text-sm text-neutral-400">Would Recommend</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">500+</div>
                        <div class="text-sm text-neutral-400">5-Star Reviews</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews Grid -->
        <div class="bg-neutral-900 py-12">
            <div class="max-w-6xl mx-auto px-4">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        v-for="review in displayedReviews"
                        :key="review.id"
                        class="bg-black p-5 rounded-lg border border-neutral-800 hover:border-neutral-700 transition-all duration-300"
                    >
                        <!-- Rating Stars -->
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex text-white">
                                <svg v-for="star in 5" :key="star" class="w-4 h-4" :class="star <= review.rating ? 'fill-current' : 'text-gray-600 fill-current'" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <span class="text-neutral-400 bg-neutral-800 px-2 py-1 rounded text-xs">{{ review.category }}</span>
                        </div>

                        <!-- Review Text -->
                        <p class="text-neutral-300 mb-4 text-sm leading-relaxed">{{ review.text }}</p>

                        <!-- Customer Info -->
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-neutral-700 rounded-full flex items-center justify-center font-semibold text-white text-sm">
                                {{ review.name.charAt(0) }}
                            </div>
                            <div>
                                <h4 class="text-white font-medium text-sm">{{ review.name }}</h4>
                                <p class="text-neutral-400 text-xs">{{ review.location }} • {{ review.date }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Reviews -->
                <div class="text-center mt-8" v-if="!showAllReviews && displayedReviews.length < allReviews.length">
                    <MyButton @click="loadMoreReviews">Load More Reviews</MyButton>
                </div>
            </div>
        </div>

        <!-- Write Review Section -->
        <div class="bg-black py-12">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold text-white mb-4">Share Your Experience</h2>
                <p class="text-sm text-neutral-300 mb-6">Had an amazing adventure with us? We'd love to hear about it!</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <MyButton>Write a Review</MyButton>
                    <Link class="w-full" :href="route('vehicle-choice')">
                        <MyButton >Plan your Ride</MyButton>
                    </Link>
                </div>
            </div>
        </div>

        <!-- Testimonial Highlight -->
        <div class="bg-neutral-900 py-16">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <div class="mb-6">
                    <svg class="w-12 h-12 text-neutral-600 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                    </svg>
                </div>
                <blockquote class="text-lg text-white font-light italic mb-6 leading-relaxed">
                    "An absolutely incredible experience! The guides were professional, the equipment was top-notch, and the desert landscapes were breathtaking. This was the highlight of our trip to Marrakech!"
                </blockquote>
                <div class="flex items-center justify-center gap-3">
                    <div class="w-12 h-12 bg-neutral-700 rounded-full flex items-center justify-center font-semibold text-white">
                        S
                    </div>
                    <div class="text-left">
                        <h4 class="text-white font-medium">Sarah Mitchell</h4>
                        <p class="text-neutral-400 text-sm">London, UK • Quad Biking Adventure</p>
                        <div class="flex text-white mt-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import MyButton from "@/Components/MyButton.vue"; // Assuming this is the path
import { ref, computed } from 'vue';
import {Link} from "@inertiajs/vue3";

// Reactive data
const showAllReviews = ref(false);
const visibleReviewCount = ref(6);

// Sample reviews data
const allReviews = ref([
    {
        id: 1,
        name: "Alex Thompson",
        location: "New York, USA",
        date: "March 2024",
        rating: 5,
        category: "Quad Biking",
        text: "Absolutely amazing experience! The quad biking tour through the desert was thrilling and the guides were incredibly knowledgeable. The scenery was breathtaking and the equipment was top quality."
    },
    {
        id: 2,
        name: "Maria Garcia",
        location: "Barcelona, Spain",
        date: "February 2024",
        rating: 5,
        category: "Buggy Tours",
        text: "What an adventure! The buggy tour was perfectly organized and so much fun. Our guide was fantastic and made sure everyone felt safe while having the time of our lives."
    },
    {
        id: 3,
        name: "James Wilson",
        location: "Manchester, UK",
        date: "March 2024",
        rating: 5,
        category: "Motocross",
        text: "The motocross experience exceeded all expectations. Professional instructors, excellent bikes, and challenging terrain made for an unforgettable day."
    },
    {
        id: 4,
        name: "Emma Johnson",
        location: "Sydney, Australia",
        date: "January 2024",
        rating: 4,
        category: "Quad Biking",
        text: "Great fun and very well organized. The quad bikes were in excellent condition and the desert tour was spectacular. Only minor issue was the weather, but that's not their fault!"
    },
    {
        id: 5,
        name: "Pierre Dubois",
        location: "Paris, France",
        date: "February 2024",
        rating: 5,
        category: "Buggy Tours",
        text: "Incroyable! An incredible adventure through the Moroccan desert. The team was professional and the experience was beyond our expectations."
    },
    {
        id: 6,
        name: "Lisa Chen",
        location: "Toronto, Canada",
        date: "March 2024",
        rating: 5,
        category: "Quad Biking",
        text: "Best adventure activity in Marrakech! The guides were amazing, very safety-conscious but still made it super exciting. The desert sunset was magical."
    },
    {
        id: 7,
        name: "Mohammed Al-Rashid",
        location: "Dubai, UAE",
        date: "January 2024",
        rating: 5,
        category: "Motocross",
        text: "As someone who loves motorsports, this was perfect! Great bikes, challenging course, and excellent instruction. The team really knows what they're doing."
    },
    {
        id: 8,
        name: "Sophie Anderson",
        location: "Stockholm, Sweden",
        date: "February 2024",
        rating: 4,
        category: "Buggy Tours",
        text: "Really enjoyable experience! The buggies were fun to drive and the desert scenery was amazing. Guide was friendly and informative throughout the tour."
    },
    {
        id: 9,
        name: "Carlos Rodriguez",
        location: "Madrid, Spain",
        date: "March 2024",
        rating: 5,
        category: "Quad Biking",
        text: "Fantastic adventure! Perfect organization, great equipment, and stunning desert landscapes. The whole family loved it. Already planning our next visit!"
    }
]);

// Computed properties
const displayedReviews = computed(() => {
    return showAllReviews.value ? allReviews.value : allReviews.value.slice(0, visibleReviewCount.value);
});

// Methods
const loadMoreReviews = () => {
    visibleReviewCount.value += 6;
    if (visibleReviewCount.value >= allReviews.value.length) {
        showAllReviews.value = true;
    }
};
</script>

<style lang="scss" scoped>
</style>
