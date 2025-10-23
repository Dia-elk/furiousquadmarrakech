<template>
    <footer class="border-t border-gray-800 bg-black text-white">
        <div class="mx-6 lg:mx-auto lg:max-w-7xl">
            <!-- Main Footer Content -->
            <div class="py-12 px-4 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">

                    <!-- Brand Section -->
                    <div class="lg:col-span-1 space-y-4">
                        <div class="flex items-center space-x-3">
                            <WhiteLogo/>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            {{ $t('footer.brandDescription') }}
                        </p>
                    </div>

                    <!-- Navigation Links -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-semibold text-white uppercase tracking-wider">{{
                                $t('footer.navigation')
                            }}</h4>
                        <div class="space-y-2">
                            <Link :href="route('welcome')"
                                  class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                {{ $t('nav.home') }}
                            </Link>
                            <Link :href="route('buggy')"
                                  class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                {{ $t('nav.buggy') }}
                            </Link>
                            <Link :href="route('quad')"
                                  class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                {{ $t('nav.quad') }}
                            </Link>
                            <Link :href="route('motocross')"
                                  class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                {{ $t('nav.motocross') }}
                            </Link>
                            <Link :href="route('can-am')"
                                  class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                {{ $t('nav.canAm') }}
                            </Link>
                            <Link :href="route('furious')"
                                  class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                {{ $t('nav.furious') }}
                            </Link>
                            <Link :href="route('contact')"
                                  class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                {{ $t('nav.contact') }}
                            </Link>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-semibold text-white uppercase tracking-wider">{{
                                $t('footer.quickLinks')
                            }}</h4>
                        <div class="space-y-2">
                            <Link :href="route('vehicle-choice')"
                                  class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                {{ $t('nav.bookNow') }}
                            </Link>
                            <Link :href="route('gallery')"
                                  class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                {{ $t('nav.gallery') }}
                            </Link>
                            <Link :href="route('reviews')"
                                  class="block text-xs text-gray-400 hover:text-red-500 transition-colors">
                                {{ $t('nav.reviews') }}
                            </Link>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-semibold text-white uppercase tracking-wider">{{
                                $t('footer.followUs')
                            }}</h4>
                        <div class="flex space-x-3">
                            <a target="_blank" href="https://www.instagram.com/furious.experience/"
                               class="w-8 h-8 flex items-center justify-center border border-gray-700 rounded-md hover:border-red-500 hover:bg-red-500/10 transition-all duration-200 group">
                                <Instagram class="w-4 h-4 text-gray-400 group-hover:text-red-500 transition-colors"/>
                            </a>
                            <a target="_blank" href="https://www.tiktok.com/@furious.experience"
                               class="w-8 h-8 flex items-center justify-center border border-gray-700 rounded-md hover:border-red-500 hover:bg-red-500/10 transition-all duration-200 group">
                                <Tiktok class="w-4 h-4 text-gray-400 group-hover:text-red-500 transition-colors"/>
                            </a>
                            <a target="_blank" href="https://www.airbnb.fr/users/show/543464602"
                               class="w-8 h-8 flex items-center justify-center border border-gray-700 rounded-md hover:border-red-500 hover:bg-red-500/10 transition-all duration-200 group">
                                <Airbnb class="w-4 h-4 text-gray-400 group-hover:text-red-500 transition-colors"/>
                            </a>
                            <a target="_blank"
                               href="https://www.tripadvisor.com/Attraction_Review-g293734-d26818101-Reviews-Furious_Quad_Marrakech-Marrakech_Marrakech_Safi.html"
                               class="w-8 h-8 flex items-center justify-center border border-gray-700 rounded-md hover:border-red-500 hover:bg-red-500/10 transition-all duration-200 group">
                                <Tripadvisor class="w-4 h-4 text-gray-400 group-hover:text-red-500 transition-colors"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-800">
                <div
                    class="px-4 lg:px-8 py-4 flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0">

                    <!-- Left side: Copyright & Links -->
                    <div
                        class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 text-xs text-gray-500">
                        <span>© {{ date.getFullYear() }} Furious Quad Marrakech</span>
                        <div class="flex items-center space-x-3">
                            <Link :href="route('privacy')" class="hover:text-red-500 transition-colors">
                                {{ $t('footer.privacy') }}
                            </Link>
                            <span class="text-gray-700">•</span>
                            <Link :href="route('terms')" class="hover:text-red-500 transition-colors">
                                {{ $t('footer.terms') }}
                            </Link>
                        </div>
                    </div>

                    <!-- Right side: Language & Made by -->
                    <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6">

                        <!-- Language Switcher -->
                        <div class="relative text-xs">
                            <button @click="toggleLanguageDropdown"
                                    class="flex items-center space-x-1 text-gray-400 hover:text-white transition-colors">
                                <span>{{ getLanguageFlag(currentLang) }}</span>
                                <span>{{ $t(getLanguageName(currentLang)) }}</span>
                                <svg class="w-3 h-3 transition-transform" :class="{'rotate-180': languageDropdown}"
                                     fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>

                            <div v-if="languageDropdown" @click.stop
                                 class="absolute bottom-full right-0 mb-2 bg-black border border-neutral-800 rounded-md shadow-xl z-50 min-w-[120px]">
                                <button
                                    v-for="(lang, index) in page.props.langs"
                                    :key="lang.value"
                                    @click="changeLocale(lang)"
                                    class="w-full flex items-center space-x-2 px-3 py-2 text-xs text-gray-300 hover:bg-neutral-900 hover:text-white transition-colors"
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

                        <!-- Made by -->
                        <div class="flex items-center space-x-1 text-xs text-gray-500">
                            <span>{{ $t('footer.madeWith') }}</span>
                            <span class="text-red-500">♥</span>
                            <span>{{ $t('footer.by') }}</span>
                            <a href="https://diagital.studio/" target="_blank"
                               class="text-white font-medium hover:text-red-500 transition-colors">Diagital Studio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
import {ref, onMounted, onUnmounted} from 'vue'
import {Link, router, usePage} from '@inertiajs/vue3'
import WhiteLogo from '@/Components/Logos/WhiteLogo.vue'
import Instagram from '@/Icons/Instagram.vue'
import Tiktok from '@/Icons/Tiktok.vue'
import Airbnb from '@/Icons/Airbnb.vue'
import Tripadvisor from '@/Icons/Tripadvisor.vue'
import {loadLanguageAsync} from "laravel-vue-i18n";

// Page data
const page = usePage();

// Reactive state
let currentLang = ref(sessionStorage.getItem('current_lang') ?? 'en');
const languageDropdown = ref(false)

// Language helper functions (same as navbar)
const getLanguageFlag = (lang) => {
    const flags = { en: '🇺🇸', fr: '🇫🇷', es: '🇪🇸', ar: '🇲🇦' };
    return flags[lang] || '🇺🇸';
};

const getLanguageName = (lang) => {
    if (!lang) return 'English';
    const langObj = page.props.langs?.find(l => l.value === lang);
    return langObj ? langObj.title : lang.toString();
};

// Navigation methods (same as navbar)
const toggleLanguageDropdown = () => {
    languageDropdown.value = !languageDropdown.value;
};

const closeAllDropdowns = () => {
    languageDropdown.value = false;
};

// Change language (same as navbar)
const changeLocale = (lang) => {
    closeAllDropdowns();
    router.get(route('language', lang.value),{},{
        preserveScroll: true
    });
    loadLanguageAsync(lang.value);
    sessionStorage.setItem('current_lang', lang.value);
    currentLang.value = lang.value;
};

// Close dropdowns when clicking outside
const closeDropdowns = (e) => {
    if (!e.target.closest('.relative')) {
        languageDropdown.value = false
    }
}

onMounted(() => document.addEventListener('click', closeDropdowns))
onUnmounted(() => document.removeEventListener('click', closeDropdowns))

// Current year
const date = new Date()
</script>
