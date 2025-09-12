<template>
    <footer class="border-t border-gray-800 bg-black text-white">
        <div class="mx-6 lg:mx-auto lg:max-w-7xl">
            <!-- Main Footer Content -->
            <div class="py-12 px-4 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">

                    <!-- Brand Section -->
                    <div class="lg:col-span-1 space-y-4">
                        <div class="flex items-center space-x-3">
                            <WhiteLogo />
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Premium off-road adventures in Marrakech with luxury service and unforgettable experiences.
                        </p>
                    </div>

                    <!-- Navigation Links -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-semibold text-white uppercase tracking-wider">Navigation</h4>
                        <div class="space-y-2">
                            <Link :href="route('welcome')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                Home
                            </Link>
                            <Link :href="route('buggy')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                Buggy
                            </Link>
                            <Link :href="route('quad')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                Quad
                            </Link>
                            <Link :href="route('motocross')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                Motocross
                            </Link>
                            <Link :href="route('can-am')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                Can-Am
                            </Link>
                            <Link :href="route('furious')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                Furious
                            </Link>
                            <Link :href="route('contact')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                Contact
                            </Link>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-semibold text-white uppercase tracking-wider">Quick Links</h4>
                        <div class="space-y-2">
                            <Link :href="route('vehicle-choice')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                Book Now
                            </Link>
                            <Link :href="route('about-us')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                About Us
                            </Link>
                            <Link :href="route('gallery')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                Gallery
                            </Link>
                            <Link :href="route('reviews')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                Reviews
                            </Link>
                            <Link :href="route('faq')" class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                FAQ
                            </Link>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-semibold text-white uppercase tracking-wider">Follow Us</h4>
                        <div class="flex space-x-3">
                            <a target="_blank" href="https://www.instagram.com/furious.experience/"
                               class="w-8 h-8 flex items-center justify-center border border-gray-700 rounded-md hover:border-red-500 hover:bg-red-500/10 transition-all duration-200 group">
                                <Instagram class="w-4 h-4 text-gray-400 group-hover:text-red-500 transition-colors" />
                            </a>

                            <a target="_blank" href="https://www.tiktok.com/@furious.experience"
                               class="w-8 h-8 flex items-center justify-center border border-gray-700 rounded-md hover:border-red-500 hover:bg-red-500/10 transition-all duration-200 group">
                                <Tiktok class="w-4 h-4 text-gray-400 group-hover:text-red-500 transition-colors" />
                            </a>

                            <a target="_blank" href="https://www.airbnb.fr/users/show/543464602"
                               class="w-8 h-8 flex items-center justify-center border border-gray-700 rounded-md hover:border-red-500 hover:bg-red-500/10 transition-all duration-200 group">
                                <Airbnb class="w-4 h-4 text-gray-400 group-hover:text-red-500 transition-colors" />
                            </a>

                            <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293734-d26818101-Reviews-Furious_Quad_Marrakech-Marrakech_Marrakech_Safi.html"
                               class="w-8 h-8 flex items-center justify-center border border-gray-700 rounded-md hover:border-red-500 hover:bg-red-500/10 transition-all duration-200 group">
                                <Tripadvisor class="w-4 h-4 text-gray-400 group-hover:text-red-500 transition-colors" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-800">
                <div class="px-4 lg:px-8 py-4">
                    <div class="flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0">

                        <!-- Left side: Copyright & Links -->
                        <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 text-xs text-gray-500">
                            <span>© {{ date.getFullYear() }} Furious Quad Marrakech</span>
                            <div class="flex items-center space-x-3">
                                <Link :href="route('privacy')" class="hover:text-red-500 transition-colors">Privacy Policy</Link>
                                <span class="text-gray-700">•</span>
                                <Link :href="route('terms')" class="hover:text-red-500 transition-colors">Terms of Service</Link>
                            </div>
                        </div>

                        <!-- Right side: Settings & Made by -->
                        <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6">

                            <!-- Language & Currency Switchers -->
                            <div class="flex items-center space-x-4 text-xs">

                                <!-- Language Switcher -->
                                <div class="relative">
                                    <button @click="languageDropdown = !languageDropdown"
                                            class="flex items-center space-x-1 text-gray-400 hover:text-white transition-colors">
                                        <span>{{ getLanguageFlag(currentLanguage) }}</span>
                                        <span>{{ getLanguageName(currentLanguage) }}</span>
                                        <svg class="w-3 h-3 transition-transform" :class="{'rotate-180': languageDropdown}" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <div v-if="languageDropdown" class="absolute bottom-full right-0 mb-2 bg-black border border-neutral-800 rounded-md shadow-xl z-50 min-w-[120px]">
                                        <button @click="setLanguage('en')" class="w-full flex items-center space-x-2 px-3 py-2 text-xs text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors rounded-t-md" :class="{'bg-neutral-900 text-white': currentLanguage === 'en'}">
                                            <span>🇺🇸</span>
                                            <span>English</span>
                                        </button>
                                        <button @click="setLanguage('fr')" class="w-full flex items-center space-x-2 px-3 py-2 text-xs text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors" :class="{'bg-neutral-900 text-white': currentLanguage === 'fr'}">
                                            <span>🇫🇷</span>
                                            <span>Français</span>
                                        </button>
                                        <button @click="setLanguage('es')" class="w-full flex items-center space-x-2 px-3 py-2 text-xs text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors" :class="{'bg-neutral-900 text-white': currentLanguage === 'es'}">
                                            <span>🇪🇸</span>
                                            <span>Español</span>
                                        </button>
                                        <button @click="setLanguage('ar')" class="w-full flex items-center space-x-2 px-3 py-2 text-xs text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors rounded-b-md" :class="{'bg-neutral-900 text-white': currentLanguage === 'ar'}">
                                            <span>🇲🇦</span>
                                            <span>العربية</span>
                                        </button>
                                    </div>
                                </div>

                                <span class="text-gray-700">•</span>

                                <!-- Currency Switcher -->
                                <div class="relative">
                                    <button @click="currencyDropdown = !currencyDropdown"
                                            class="flex items-center space-x-1 text-gray-400 hover:text-white transition-colors">
                                        <span>{{ getCurrencySymbol(currentCurrency) }}</span>
                                        <span>{{ currentCurrency }}</span>
                                        <svg class="w-3 h-3 transition-transform" :class="{'rotate-180': currencyDropdown}" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <div v-if="currencyDropdown" class="absolute bottom-full right-0 mb-2 bg-black border border-neutral-800 rounded-md shadow-xl z-50 min-w-[110px]">
                                        <button @click="setCurrency('MAD')" class="w-full flex items-center space-x-2 px-3 py-2 text-xs text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors rounded-t-md" :class="{'bg-neutral-900 text-white': currentCurrency === 'MAD'}">
                                            <span>{{ getCurrencySymbol('MAD') }}</span>
                                            <span>MAD</span>
                                        </button>
                                        <button @click="setCurrency('EUR')" class="w-full flex items-center space-x-2 px-3 py-2 text-xs text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors" :class="{'bg-neutral-900 text-white': currentCurrency === 'EUR'}">
                                            <span>{{ getCurrencySymbol('EUR') }}</span>
                                            <span>EUR</span>
                                        </button>
                                        <button @click="setCurrency('USD')" class="w-full flex items-center space-x-2 px-3 py-2 text-xs text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors rounded-b-md" :class="{'bg-neutral-900 text-white': currentCurrency === 'USD'}">
                                            <span>{{ getCurrencySymbol('USD') }}</span>
                                            <span>USD</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Made by -->
                            <div class="flex items-center space-x-1 text-xs text-gray-500">
                                <span>Made with</span>
                                <span class="text-red-500">♥</span>
                                <span>by</span>
                                <a href="https://diagital.studio/" target="_blank"
                                   class="text-white font-medium hover:text-red-500 transition-colors">
                                    Diagital Studio
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { Link } from '@inertiajs/vue3'
import WhiteLogo from '@/Components/Logos/WhiteLogo.vue'
import Instagram from '@/Icons/Instagram.vue'
import Tiktok from '@/Icons/Tiktok.vue'
import Airbnb from '@/Icons/Airbnb.vue'
import Tripadvisor from '@/Icons/Tripadvisor.vue'

// Reactive state
const currentLanguage = ref('en')
const currentCurrency = ref('MAD')
const languageDropdown = ref(false)
const currencyDropdown = ref(false)

// Close dropdowns when clicking outside
const closeDropdowns = (e) => {
    if (!e.target.closest('.relative')) {
        languageDropdown.value = false
        currencyDropdown.value = false
    }
}

onMounted(() => {
    document.addEventListener('click', closeDropdowns)
})

onUnmounted(() => {
    document.removeEventListener('click', closeDropdowns)
})

// Helper functions
const getLanguageFlag = (lang) => {
    const flags = { en: '🇺🇸', fr: '🇫🇷', es: '🇪🇸', ar: '🇲🇦' }
    return flags[lang] || '🇺🇸'
}

const getLanguageName = (lang) => {
    const names = { en: 'EN', fr: 'FR', es: 'ES', ar: 'AR' }
    return names[lang] || 'EN'
}

const getCurrencySymbol = (currency) => {
    const symbols = { MAD: 'د.م.', EUR: '€', USD: '$' }
    return symbols[currency] || 'د.م.'
}

// Action functions
const setLanguage = (lang) => {
    currentLanguage.value = lang
    languageDropdown.value = false
    // Add your i18n logic here
    console.log(`Language switched to: ${lang}`)
}

const setCurrency = (currency) => {
    currentCurrency.value = currency
    currencyDropdown.value = false
    localStorage.setItem('preferred_currency', currency)
    console.log(`Currency switched to: ${currency}`)
}

// Current year
const date = new Date()
</script>
