<template>
    <div class="flex flex-col gap-4">
        <div class="h-full border border-gray-600">
           <div class="mt-10">
               <h3 class="text-gray-100  font-bold text-center md:text-lg">{{pack.name}}</h3>
               <div class="flex flex-col text-xl text-gray-300 font-bold justify-center items-center mt-4">
                 <div class="flex justify-center">
                     <p>{{price}}</p>
                     <p class=" text-xs">.{{decimalValue}}</p>
                     <p class="ml-2">Dh</p>
                 </div>

                   <div v-if="pack.old_price" class="flex justify-center items-start  relative text-gray-500 w-fit">
                       <div class="w-full h-[2px] bg-[#c10c10] absolute top-[10px] -rotate-12"></div>
                       <p class="text-sm">{{pack.old_price}}</p>
                       <p class="ml-2 text-sm">Dh</p>
                   </div>

               </div>
           </div>

            <div class="mx-6 my-10 space-y-2">
                <PackFeature :title="'Duration : '+ pack.duration" :is-include="true"/>
                <PackFeature :title="'Pictures with palm trees'" :is-include="pack.pictures"/>
                <PackFeature :title="'Tea and Snacks'" :is-include="pack.tea"/>
                <PackFeature :title="'Pick Up and return to your Hotel or nearest'" :is-include="pack.pick_up"/>
                <PackFeature :title="'Private Pick Up'" :is-include="pack.private_pick_up"/>
                <PackFeature :title="'Lunch'" :is-include="pack.lunch"/>
                <PackFeature :title="'Dinner complete'" :is-include="pack.dinner"/>
                <PackFeature :title="'Equipments'" :is-include="pack.equipments"/>
                <PackFeature :title="'Furious Scarf'" :is-include="pack.desert_scarf"/>
                <PackFeature v-if="pack.vehicle.id === 3" :title="'Drift'" :is-include="pack.drift"/>
            </div>
        </div>
        <div class="h-[50px] flex justify-center items-center ">
            <Link :href="route('reservation',pack)" class="w-full">
                <MyButton>
                    Reserve
                </MyButton>
            </Link>
        </div>
    </div>
</template>

<script setup>
import MyButton from "@/Components/MyButton.vue";
import PackFeature from "@/Components/PackFeature.vue";
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    pack:Object,
})


const number = props.pack.price;
const decimalValue = number.toString().substring(number.toString().indexOf(".")+1);
const price = Math.floor(props.pack.price);
</script>

