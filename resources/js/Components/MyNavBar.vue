<template>
    <div class="w-full px-16 py-6 flex justify-between items-center">
          <Link :href="route('welcome')">
              <UnderConstructionLogo/>
          </Link>
       <div class="flex gap-10 items-center ">
           <MyNavLink :is-active="true" :href="route('welcome')">
               Home
           </MyNavLink  >
           <MyNavLink>
               Buggy
           </MyNavLink >
           <MyNavLink :is-active="false" :href="route('welcome')">
               Quad
           </MyNavLink >
           <MyNavLink  :is-active="false" :href="route('welcome')">
               Motocross
           </MyNavLink>
           <MyNavLink  :is-active="false" :href="route('welcome')">
               Contact
           </MyNavLink>
           <BtnNavLink  :href="route('welcome')">
               Book
           </BtnNavLink>
       </div>
    </div>
</template>

<script setup>

import UnderConstructionLogo from "@/Components/Logos/UnderConstructionLogo.vue";
import {Link} from "@inertiajs/vue3";
import MyNavLink from "@/Components/MyNavLink.vue";
import BtnNavLink from "@/Components/BtnNavLink.vue";
</script>
