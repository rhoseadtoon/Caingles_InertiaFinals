<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />
    <div class="home">
        <div class="content">
            <img src="https://media1.giphy.com/media/chJBv4r3KXALADHbCH/giphy.gif" alt="">
            <p class="text-center text-4xl font-bold text-white mb-5">Hello Customers!</p>
            <p class="text-center text-xl font-bold text-white mt-2">Here is where you can browse any gadgets you like!</p>
            <p class="text-center text-xl font-bold text-white mt-2">So don't miss out!</p>
            <p class="text-center text-xl font-bold text-blue-600 mt-5 mb-5">Log in now!</p>
            <div class="routes">
            <Link v-if="canRegister" :href="route('register')" class="route-link">Sign up</Link>
            <Link :href="route('login')" class="route-link2">Log in</Link>
            </div>
        </div>
    </div>

</template>

<style>
.home {
    height: 100vh;
    background-image: url(https://tse3.mm.bing.net/th?id=OIP.pmHdhOii9RTL5sVCFdSYmQHaEH&pid=Api&P=0&h=180);
    background-repeat: no-repeat;
    background-size: cover;
}
img {
    margin-left: 35%;
    max-width: 500px;
    height: 300px;
    margin-bottom: 50px;
    border-radius: 8px;
    box-shadow: 0 5px 6px rgba(0, 0, 0, 0.1);
}
.routes {
    margin-bottom: 20px;
    padding: 15px;
    margin-left: 600px;
}

.route-link {
    font-weight: 600;
    margin: 0 10px;
    padding: 8px 16px;
    border: 2px solid transparent;
    border-radius: 4px;
    transition: all 0.3s ease;
    background-color: #4a90e2;
    color: #fff;
    text-decoration: none;
}

.route-link:hover {
    background-color: #fff;
    border-color: #4a90e2;
    color: #4a90e2;
}

.route-link2 {
    font-weight: 600;
    margin: 0 10px;
    padding: 8px 16px;
    border: 2px solid transparent;
    border-radius: 4px;
    transition: all 0.3s ease;
    background-color: #4a90e2;
    color: #fff;
    text-decoration: none;
    margin-left: 10%;
}

.route-link2:hover {
    background-color: #fff;
    border-color: #4a90e2;
    color: #4a90e2;
}

</style>
