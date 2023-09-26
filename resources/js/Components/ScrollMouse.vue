<template>
    <div class="icon-scroll">

    </div>

</template>

<script setup>

</script>

<style>

.icon-scroll,
.icon-scroll:before {
    position: absolute;
    left: 50%;
}

.icon-scroll{
    width: 20px;
    height: 30px;
    top: 50%;
    margin-top: -35px;
    margin-left:-10px ;
    box-shadow: inset 0 0 0 1px #cbd5e1;
    border-radius: 25px;
}

.icon-scroll:before{
    content: '';
    width: 4px;
    height: 4px;
    background: #cbd5e1;
    margin-left: -2px;
    top: 8px;
    border-radius: 4px;
    animation-duration: 1.5s;
    animation-iteration-count: infinite;
    animation-name: scroll;
}
@keyframes scroll {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
        transform: translateY(10px);
    }
}

</style>
