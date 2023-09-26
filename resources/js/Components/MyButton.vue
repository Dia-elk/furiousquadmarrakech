<template>
    <div class="btn
    relative
    overflow-hidden
    items-center
    justify-center

transition-all duration-500
    h-[46px]
    w-[200px]

    border
    border-[#c10c10]


" @mouseenter="hoverText" @mouseleave="hoverText" @mousemove="updatePosition"
         :class="{'bg-[#c10c10]' : !isHoverType} , {'bg-transparent' : isHoverType}"
    >
    <span class="cursor-pointer h-full flex justify-center items-center text-sm font-medium  text-center transition-all duration-500"
          :class="{'text-gray-100' : !isHoverType} , {'text-[#c10c10]' : isHoverType}">
      <slot/>
    </span >
        <div class="btn-circle transition-all duration-500" :style="circleStyle"></div>
    </div>
</template>

<script setup>
import { ref, reactive } from 'vue';

const xPos = ref(0);
const yPos = ref(0);

const circleStyle = reactive({
    left: 0,
    top: 0,
});

let isHoverType = ref(false);


function hoverText(){
    isHoverType.value = !isHoverType.value
}
function updatePosition(event) {

    xPos.value = event.pageX;
    yPos.value = event.pageY;

    circleStyle.left = `${xPos.value - event.currentTarget.offsetLeft}px`;
    circleStyle.top = `${yPos.value - event.currentTarget.offsetTop}px`;
}
</script>

<style>
.btn {

}

.btn span {
    position: relative;
    z-index: 1;
}


.btn-circle {
    content: '';
    position: absolute;
    background-color: black;
    opacity: 0.1;
    width: 0;
    height: 0;
    left: v-bind(--xPos);
    top: v-bind(--yPos);
    transform: translate(-50%, -50%);
    border-radius: 50%;
    transition: width 0.5s, height 0.5s;
}

.btn:hover .btn-circle {
    width: 350px;
    height: 350px;

}
</style>
