<script setup>
import { Link } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
})

</script>

<template>
    <main id="page-trans">
        <div class="info">
        <img src="https://cdn.dribbble.com/users/1948198/screenshots/4377223/media/a828fe17f0ad917ef2b3d8c2903826fc.gif" alt="Movie Icon">
        <h1 class="text-4xl text-center font-bold mt-5">Gadgets</h1>
    <p class="text-center font-bold">(SG)</p>
    <p class="mt-5 text-center">A gadget collection is a compilation of electronic devices available for purchase.</p>
    <p class="text-center">It typically includes details such as brand names,</p>
    <p class="text-center">models, prices, and sometimes additional data like release dates and specifications.</p>
    <p class="text-center">Gadget collections are essential for tech enthusiasts,</p>
    <p class="text-center">providing a way to compare different devices, discover new technology, </p>
    <p class="text-center mb-5">and make informed purchase decisions. </p>
        <Link href="/movies" class="route font-bold bg-red-600 py-2 px-5 text-center rounded">Explore now</Link>
        </div>
    </main>
</template>

<style scoped>

.route{
    margin-left: 430px;
}
.route:hover{
    background-color: rgb(248, 121, 121);
}
.info {
    background-color: rgb(255, 255, 255);
    color: rgb(0, 0, 0);
    max-height: 100%;
}
img {
    height: 200px;
    width: 250px;
    border-radius: 50%;
    margin-left: 440px;
}

</style>
