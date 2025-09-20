<template>
    <nav class="flex w-full px-6 md:px-16 py-6 justify-between items-center">
        <Link :href="route('welcome')" class="z-50">
            <WhiteLogo v-if="!isOpen"/>
            <BlackLogo v-if="isOpen"/>
        </Link>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex gap-10 items-center z-50">
            <MyNavLink :is-active="page.url === '/'" :href="route('welcome')">{{ $t('nav.home') }}</MyNavLink>
            <MyNavLink :is-active="page.url.startsWith('/buggy-marrakech')" :href="route('buggy')">{{ $t('nav.buggy') }}</MyNavLink>
            <MyNavLink :is-active="page.url.startsWith('/quad-marrakech')" :href="route('quad')">{{ $t('nav.quad') }}</MyNavLink>
            <MyNavLink :is-active="page.url.startsWith('/motocross-marrakech')" :href="route('motocross')">{{ $t('nav.motocross') }}</MyNavLink>
            <MyNavLink :is-active="page.url.startsWith('/can-am-marrakech')" :href="route('can-am')">{{ $t('nav.canAm') }}</MyNavLink>
            <MyNavLink v-if="true" :is-active="page.url.startsWith('/furious')" :href="route('furious')">{{ $t('nav.furious') }}</MyNavLink>
            <MyNavLink :is-active="page.url.startsWith('/contact')" :href="route('contact')">{{ $t('nav.contact') }}</MyNavLink>

            <!-- Language Switcher -->
            <div class="flex items-center gap-3">
                <div class="relative">
                    <button @click="toggleLanguageDropdown" class="flex items-center space-x-1 text-white hover:text-red-500 transition-colors text-sm">
                        <span>{{ getLanguageFlag(currentLang || 'en') }}</span>
                        <span>{{ $t(getLanguageName(currentLang || 'en')) }}</span>
                        <svg class="w-3 h-3 transition-transform" :class="{'rotate-180': languageDropdown}" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div v-if="languageDropdown" @click.stop class="absolute top-full left-0 mt-2 bg-black border border-neutral-800 rounded-md shadow-xl z-50 min-w-[120px]">
                        <button
                            v-for="(lang, index) in page.props.langs"
                            :key="lang.value"
                            @click="changeLocale(lang)"
                            class="w-full flex items-center space-x-2 px-3 py-2 text-sm text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors"
                            :class="[
                                page.props.locale === lang.value ? 'bg-neutral-900 text-white' : '',
                                index === 0 ? 'rounded-t-md' : '',
                                index === page.props.langs.length - 1 ? 'rounded-b-md' : ''
                            ]">
                            <span>{{ getLanguageFlag(lang.value) }}</span>
                            <span>{{ $t(lang.title) }}</span>
                        </button>
                    </div>
                </div>
            </div>

            <BtnNavLink :href="route('vehicle-choice')">{{ $t('nav.book') }}</BtnNavLink>
        </div>

        <!-- Mobile Drawer -->
        <div class="block lg:hidden z-50">
            <DrawerMenu v-if="!isOpen" @click="toggleDrawer"/>
        </div>
    </nav>

    <div v-if="isOpen" @click="closeDrawer" class="lg:hidden w-full h-screen bg-black bg-opacity-50 z-10 fixed top-0 duration-700 transition-all right-0">
        <div @click.stop class="h-screen w-[300px] top-0 left-0 fixed duration-1000 transition-all bg-white z-40">
            <div class="flex flex-col h-screen justify-between py-6 items-center w-full">
                <div class="invisible mb-4">
                    <BlackLogo/>
                </div>

                <div class="flex flex-col space-y-6 items-center flex-1 justify-center">
                    <MyNavLink :href="route('welcome')" :is-active="page.url === '/'">{{ $t('nav.home') }}</MyNavLink>
                    <MyNavLink :href="route('buggy')" :is-active="page.url.startsWith('/buggy-marrakech')">{{ $t('nav.buggy') }}</MyNavLink>
                    <MyNavLink :href="route('quad')" :is-active="page.url.startsWith('/quad-marrakech')">{{ $t('nav.quad') }}</MyNavLink>
                    <MyNavLink :href="route('motocross')" :is-active="page.url.startsWith('/motocross-marrakech')">{{ $t('nav.motocross') }}</MyNavLink>
                    <MyNavLink :href="route('can-am')" :is-active="page.url.startsWith('/can-am-marrakech')">{{ $t('nav.canAm') }}</MyNavLink>
                    <MyNavLink v-if="true" :href="route('furious')" :is-active="page.url.startsWith('/furious')">{{ $t('nav.furious') }}</MyNavLink>
                    <MyNavLink :href="route('contact')" :is-active="page.url.startsWith('/contact')">{{ $t('nav.contact') }}</MyNavLink>

                    <!-- Mobile Language Switcher -->
                    <div class="flex flex-col items-center space-y-2 pt-4 border-t border-gray-200 w-full max-w-[260px]">
                        <span class="text-[10px] font-semibold text-gray-600 uppercase tracking-wider">{{ $t('nav.language') }}</span>
                        <div class="flex flex-wrap justify-center gap-1">
                            <button
                                v-for="lang in page.props.langs"
                                :key="lang.value"
                                @click="changeLocale(lang)"
                                class="px-2 py-1 rounded text-[10px] border transition-colors"
                                :class="currentLang === lang.value
                                    ? 'bg-red-500 text-white border-red-500'
                                    : 'border-gray-300 text-gray-700 hover:border-red-500'">
                                {{ getLanguageFlag(lang.value) }} {{ lang.value.toUpperCase() }}
                            </button>
                        </div>
                    </div>

                    <BtnNavLink @click="closeDrawer">{{ $t('nav.book') }}</BtnNavLink>
                </div>

                <div class="flex space-x-3 mt-4">
                    <a target="_blank" href="https://www.instagram.com/furious.quad/"><Instagram/></a>
                    <a v-if="false" target="_blank" href="#"><Facebook/></a>
                    <a target="_blank" href="https://www.tiktok.com/@furious.quad"><Tiktok/></a>
                    <a target="_blank" href="https://www.airbnb.fr/users/show/543464602"><Airbnb/></a>
                    <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293734-d26818101-Reviews-Furious_Quad_Marrakech-Marrakech_Marrakech_Safi.html"><Tripadvisor/></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link, router, usePage } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import MyNavLink from "@/Components/MyNavLink.vue";
import BtnNavLink from "@/Components/BtnNavLink.vue";
import DrawerMenu from "@/Components/DrawerMenu.vue";
import WhiteLogo from "@/Components/Logos/WhiteLogo.vue";
import BlackLogo from "@/Components/Logos/BlackLogo.vue";
import Instagram from "@/Icons/Instagram.vue";
import Tiktok from "@/Icons/Tiktok.vue";
import Facebook from "@/Icons/Facebook.vue";
import Airbnb from "@/Icons/Airbnb.vue";
import Tripadvisor from "@/Icons/Tripadvisor.vue";
import { loadLanguageAsync } from "laravel-vue-i18n";

// Page data
const page = usePage();

// Reactive state
const isOpen = ref(false);
const languageDropdown = ref(false);
let currentLang = ref(sessionStorage.getItem('current_lang') ?? 'en');

// Language helper functions
const getLanguageFlag = (lang) => {
    const flags = { en: '🇺🇸', fr: '🇫🇷', es: '🇪🇸', ar: '🇲🇦' };
    return flags[lang] || '🇺🇸';
};
const getLanguageName = (lang) => {
    if (!lang) return 'English';
    const langObj = page.props.langs?.find(l => l.value === lang);
    return langObj ? langObj.title : lang.toString();
};

// Navigation methods
const toggleDrawer = () => { isOpen.value = !isOpen.value; closeAllDropdowns(); };
const closeDrawer = () => { isOpen.value = false; };
const toggleLanguageDropdown = () => { languageDropdown.value = !languageDropdown.value; };
const closeAllDropdowns = () => { languageDropdown.value = false; };

// Change language
const changeLocale = (lang) => {
    closeAllDropdowns();
    closeDrawer();
    router.get(route('language', lang.value),{},{
        preserveScroll: true
    });
    loadLanguageAsync(lang.value);
    sessionStorage.setItem('current_lang', lang.value);
};
</script>
