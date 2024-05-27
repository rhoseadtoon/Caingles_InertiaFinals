<script setup>
import Homelayout from '@/Layouts/Homelayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />

    <Homelayout>
        <main id="page-trans">
            <header class="welcome">Welcome  {{ $page.props.auth.user.name }}!</header>
            <img src="https://media0.giphy.com/media/L40qwPexZfBJLqSBaA/giphy.gif" alt="">
            <h1>Order now!!</h1>
        </main>
    </Homelayout>
</template>

<style scoped>
.welcome {
    text-align: center;
    margin-top: 15px;
    font-weight: bold;
    font-size: 25px;
    color: #4a90e2;
}
img {
    margin-top: 15px;
    margin-left:450px;
    height: 300px;
    height: 300px;
}
#page-trans{
    background-color: black;
    height: 600px;
}
h1 {
    color: white;
    text-align: center;
    font-size: 50px;
    border: 1px solid white;
    border-radius: 500px;
    max-width: 50%;
    margin-left: 300px;
    transition: color 0.3s ease-in-out, font-size 0.3s ease-in-out;
}


</style>
