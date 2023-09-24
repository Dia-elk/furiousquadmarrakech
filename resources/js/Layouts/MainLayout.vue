<template>
    <header class="w-full fixed top-0 z-30 bg-transparent">
        <MyNavBar/>
    </header>
    <main>
        <slot/>
    </main>
    <footer>

    </footer>
</template>

<script setup>

import MyNavBar from "@/Components/MyNavBar.vue";
</script>
