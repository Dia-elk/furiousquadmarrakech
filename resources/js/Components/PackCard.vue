<template>
    <div class="flex flex-col gap-4">
        <div class="h-full border border-gray-600">
           <div class="mt-10">
               <h1 class="text-gray-100  font-bold text-center md:text-lg">{{pack.name}}</h1>
               <div class="flex text-xl text-gray-300 font-bold justify-center mt-1">
                   <p class=" text-xs mr-1">€</p>
                   <p >{{price}}</p>
                   <p class=" text-xs">.{{decimalValue}}</p>
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
                <PackFeature :title="'Personal risk insurance'" :is-include="pack.risk_insurance"/>
                <PackFeature :title="'Equipments'" :is-include="pack.equipments"/>
                <PackFeature :title="'Desert Scarf'" :is-include="pack.desert_scarf"/>
                <PackFeature v-if="vehicle.id === 3" :title="'Drift'" :is-include="pack.drift"/>
            </div>
        </div>
        <div class="h-[50px] flex justify-center items-center ">
            <MyButton>
                Reserve
            </MyButton>
        </div>
    </div>
</template>

<script setup>
import MyButton from "@/Components/MyButton.vue";
import PackFeature from "@/Components/PackFeature.vue";

const props = defineProps({
    pack:Object,
    vehicle:Object,
})


const number = props.pack.price;
const decimalValue = number.toString().substring(number.toString().indexOf(".")+1);
const price = Math.floor(props.pack.price);
</script>

