<template>
    <nav class="flex w-full px-6 md:px-16 py-6 justify-between items-center">
        <Link :href="route('welcome')" class="z-50">
            <WhiteLogo v-if="!isOpen"/>
            <BlackLogo v-if="isOpen"/>
        </Link>

        <div class="hidden lg:flex gap-10 items-center z-50">
            <MyNavLink :is-active="$page.url === '/'" :href="route('welcome')">
                Home
            </MyNavLink>
            <MyNavLink :is-active="$page.url.startsWith('/buggy-marrakech')" :href="route('buggy')">
                Buggy
            </MyNavLink>
            <MyNavLink :is-active="$page.url.startsWith('/quad-marrakech')" :href="route('quad')">
                Quad
            </MyNavLink>
            <MyNavLink :is-active="$page.url.startsWith('/motocross-marrakech')" :href="route('motocross')">
                Motocross
            </MyNavLink>
            <MyNavLink :is-active="$page.url.startsWith('/can-am-marrakech')" :href="route('can-am')">
                Can-Am
            </MyNavLink>
            <MyNavLink v-if="true" :is-active="$page.url.startsWith('/furious')" :href="route('furious')">
                Furious
            </MyNavLink>
            <MyNavLink :is-active="$page.url.startsWith('/contact')" :href="route('contact')">
                Contact
            </MyNavLink>

            <!-- Language & Currency Switchers -->
            <div class="flex items-center gap-3">
                <!-- Language Switcher -->
                <div class="relative">
                    <button @click="languageDropdown = !languageDropdown"
                            class="flex items-center space-x-1 text-white hover:text-red-500 transition-colors text-sm">
                        <span>{{ getLanguageFlag(currentLanguage) }}</span>
                        <span>{{ getLanguageName(currentLanguage) }}</span>
                        <svg class="w-3 h-3 transition-transform" :class="{'rotate-180': languageDropdown}" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div v-if="languageDropdown" class="absolute top-full left-0 mt-2 bg-black border border-neutral-800 rounded-md shadow-xl z-50 min-w-[120px]">
                        <button @click="setLanguage('en')" class="w-full flex items-center space-x-2 px-3 py-2 text-sm text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors rounded-t-md" :class="{'bg-neutral-900 text-white': currentLanguage === 'en'}">
                            <span>🇺🇸</span>
                            <span>English</span>
                        </button>
                        <button @click="setLanguage('fr')" class="w-full flex items-center space-x-2 px-3 py-2 text-sm text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors" :class="{'bg-neutral-900 text-white': currentLanguage === 'fr'}">
                            <span>🇫🇷</span>
                            <span>Français</span>
                        </button>
                        <button @click="setLanguage('es')" class="w-full flex items-center space-x-2 px-3 py-2 text-sm text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors" :class="{'bg-neutral-900 text-white': currentLanguage === 'es'}">
                            <span>🇪🇸</span>
                            <span>Español</span>
                        </button>
                        <button @click="setLanguage('ar')" class="w-full flex items-center space-x-2 px-3 py-2 text-sm text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors rounded-b-md" :class="{'bg-neutral-900 text-white': currentLanguage === 'ar'}">
                            <span>🇲🇦</span>
                            <span>العربية</span>
                        </button>
                    </div>
                </div>

                <span class="text-gray-400">|</span>

                <!-- Currency Switcher -->
                <div class="relative">
                    <button @click="currencyDropdown = !currencyDropdown"
                            class="flex items-center space-x-1 text-white hover:text-red-500 transition-colors text-sm">
                        <span>{{ getCurrencySymbol(currentCurrency) }}</span>
                        <span>{{ currentCurrency }}</span>
                        <svg class="w-3 h-3 transition-transform" :class="{'rotate-180': currencyDropdown}" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div v-if="currencyDropdown" class="absolute top-full right-0 mt-2 bg-black border border-neutral-800 rounded-md shadow-xl z-50 min-w-[110px]">
                        <button @click="setCurrency('MAD')" class="w-full flex items-center space-x-2 px-3 py-2 text-sm text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors rounded-t-md" :class="{'bg-neutral-900 text-white': currentCurrency === 'MAD'}">
                            <span>{{ getCurrencySymbol('MAD') }}</span>
                            <span>MAD</span>
                        </button>
                        <button @click="setCurrency('EUR')" class="w-full flex items-center space-x-2 px-3 py-2 text-sm text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors" :class="{'bg-neutral-900 text-white': currentCurrency === 'EUR'}">
                            <span>{{ getCurrencySymbol('EUR') }}</span>
                            <span>EUR</span>
                        </button>
                        <button @click="setCurrency('USD')" class="w-full flex items-center space-x-2 px-3 py-2 text-sm text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors rounded-b-md" :class="{'bg-neutral-900 text-white': currentCurrency === 'USD'}">
                            <span>{{ getCurrencySymbol('USD') }}</span>
                            <span>USD</span>
                        </button>
                    </div>
                </div>
            </div>

            <BtnNavLink :href="route('vehicle-choice')">
                Book
            </BtnNavLink>
        </div>

        <div class="block lg:hidden z-50">
            <DrawerMenu v-if="!isOpen" @click="isOpen = !isOpen"/>
        </div>
    </nav>

    <!-- Drawer -->
    <div @click="isOpen = !isOpen"
         class="lg:hidden w-full h-screen bg-black bg-opacity-50 z-10 fixed top-0 duration-700 transition-all"
         :class="{'right-0':isOpen} , {'right-[-1640px]':!isOpen}">
        <div class="h-screen w-[300px] top-0 fixed duration-1000 transition-all bg-white z-40"
             :class="{'left-0':isOpen} , {'left-[-300px]':!isOpen}">

            <div class="flex flex-col h-screen justify-between py-6 items-center w-full">
                <div class="invisible mb-4">
                    <BlackLogo/>
                </div>

                <div class="flex flex-col space-y-6 items-center flex-1 justify-center">
                    <MyNavLink :href="route('welcome')" :is-active="$page.url === '/'">Home</MyNavLink>
                    <MyNavLink :href="route('buggy')" :is-active="$page.url.startsWith('/buggy-marrakech')">Buggy</MyNavLink>
                    <MyNavLink :href="route('quad')" :is-active="$page.url.startsWith('/quad-marrakech')">Quad</MyNavLink>
                    <MyNavLink :href="route('motocross')" :is-active="$page.url.startsWith('/motocross-marrakech')">Motocross</MyNavLink>
                    <MyNavLink :href="route('can-am')" :is-active="$page.url.startsWith('/can-am-marrakech')">Can-Am</MyNavLink>
                    <MyNavLink v-if="true" :href="route('furious')" :is-active="$page.url.startsWith('/furious')">
                        Furious
                    </MyNavLink>
                    <MyNavLink :href="route('contact')" :is-active="$page.url.startsWith('/contact')">Contact</MyNavLink>

                    <!-- Mobile Language & Currency Switchers -->
                    <div class="flex flex-col space-y-3 items-center pt-4 border-t border-gray-200 w-full max-w-[260px]">
                        <!-- Mobile Language Switcher -->
                        <div class="flex flex-col items-center space-y-2">
                            <span class="text-[10px] font-semibold text-gray-600 uppercase tracking-wider">Language</span>
                            <div class="flex space-x-1">
                                <button @click="setLanguage('en')" class="px-2 py-1 rounded text-[10px] border transition-colors" :class="currentLanguage === 'en' ? 'bg-red-500 text-white border-red-500' : 'border-gray-300 text-gray-700 hover:border-red-500'">
                                    🇺🇸 EN
                                </button>
                                <button @click="setLanguage('fr')" class="px-2 py-1 rounded text-[10px] border transition-colors" :class="currentLanguage === 'fr' ? 'bg-red-500 text-white border-red-500' : 'border-gray-300 text-gray-700 hover:border-red-500'">
                                    🇫🇷 FR
                                </button>
                                <button @click="setLanguage('es')" class="px-2 py-1 rounded text-[10px] border transition-colors" :class="currentLanguage === 'es' ? 'bg-red-500 text-white border-red-500' : 'border-gray-300 text-gray-700 hover:border-red-500'">
                                    🇪🇸 ES
                                </button>
                                <button @click="setLanguage('ar')" class="px-2 py-1 rounded text-[10px] border transition-colors" :class="currentLanguage === 'ar' ? 'bg-red-500 text-white border-red-500' : 'border-gray-300 text-gray-700 hover:border-red-500'">
                                    🇲🇦 AR
                                </button>
                            </div>
                        </div>

                        <!-- Mobile Currency Switcher -->
                        <div class="flex flex-col items-center space-y-2">
                            <span class="text-[10px] font-semibold text-gray-600 uppercase tracking-wider">Currency</span>
                            <div class="flex space-x-1">
                                <button @click="setCurrency('MAD')" class="px-2 py-1 rounded text-[10px] border transition-colors" :class="currentCurrency === 'MAD' ? 'bg-red-500 text-white border-red-500' : 'border-gray-300 text-gray-700 hover:border-red-500'">
                                    {{ getCurrencySymbol('MAD') }} MAD
                                </button>
                                <button @click="setCurrency('EUR')" class="px-2 py-1 rounded text-[10px] border transition-colors" :class="currentCurrency === 'EUR' ? 'bg-red-500 text-white border-red-500' : 'border-gray-300 text-gray-700 hover:border-red-500'">
                                    {{ getCurrencySymbol('EUR') }} EUR
                                </button>
                                <button @click="setCurrency('USD')" class="px-2 py-1 rounded text-[10px] border transition-colors" :class="currentCurrency === 'USD' ? 'bg-red-500 text-white border-red-500' : 'border-gray-300 text-gray-700 hover:border-red-500'">
                                    {{ getCurrencySymbol('USD') }} USD
                                </button>
                            </div>
                        </div>
                    </div>

                    <BtnNavLink>Book</BtnNavLink>
                </div>

                <div class="flex space-x-3 mt-4">
                    <a target="_blank" href="https://www.instagram.com/furious.quad/">
                        <Instagram/>
                    </a>
                    <a v-if="false" target="_blank" href="#">
                        <Facebook/>
                    </a>
                    <a target="_blank" href="https://www.tiktok.com/@furious.quad">
                        <Tiktok/>
                    </a>
                    <a target="_blank" href="https://www.airbnb.fr/users/show/543464602">
                        <Airbnb/>
                    </a>
                    <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293734-d26818101-Reviews-Furious_Quad_Marrakech-Marrakech_Marrakech_Safi.html">
                        <Tripadvisor/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Drawer -->
</template>

<script setup>
import {Link} from "@inertiajs/vue3";
import MyNavLink from "@/Components/MyNavLink.vue";
import BtnNavLink from "@/Components/BtnNavLink.vue";
import DrawerMenu from "@/Components/DrawerMenu.vue";
import WhiteLogo from "@/Components/Logos/WhiteLogo.vue";
import {ref, onMounted, onUnmounted} from "vue";
import BlackLogo from "@/Components/Logos/BlackLogo.vue";
import Instagram from "@/Icons/Instagram.vue";
import Tiktok from "@/Icons/Tiktok.vue";
import Facebook from "@/Icons/Facebook.vue";
import MyButton from "@/Components/MyButton.vue";
import Airbnb from "@/Icons/Airbnb.vue";
import Tripadvisor from "@/Icons/Tripadvisor.vue";

// Reactive state
const isOpen = ref(false)
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

// Close dropdowns when drawer is opened
const watchDrawer = () => {
    if (isOpen.value) {
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
    // Close drawer if open
    if (isOpen.value) {
        isOpen.value = false
    }
    // Add your i18n logic here
    console.log(`Language switched to: ${lang}`)
}

const setCurrency = (currency) => {
    currentCurrency.value = currency
    currencyDropdown.value = false
    // Close drawer if open
    if (isOpen.value) {
        isOpen.value = false
    }
    localStorage.setItem('preferred_currency', currency)
    console.log(`Currency switched to: ${currency}`)
}
</script>
