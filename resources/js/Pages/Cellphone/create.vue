<template>
    <div class="container">
      <div class="form-container">
        <div class="form-content">
          <h1>Create Cellphone</h1>
          <form @submit.prevent="submit">
            <div class="form-group">
              <label for="brand_name">Brand Name</label>
              <input type="text" id="brand_name" v-model="form.brand_name">
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" id="price" v-model="form.price">
            </div>
            <div class="form-group">
              <label for="released">Released</label>
              <input type="date" id="released" v-model="form.released">
            </div>
            <button type="submit">Save</button>
          </form>
          <button @click="goBack" class="btn-back">Back</button>
        </div>
      </div>
    </div>
  </template>

  <script>
  import { useForm } from '@inertiajs/vue3';
  import Homelayout from '@/Layouts/Homelayout.vue';

  export default {
    layout: Homelayout,
    setup() {
      const form = useForm({
        brand_name: '',
        price: '',
        released: '',
      });

      const submit = async () => {
        form.post('/cellphones');
      };

      const goBack = () => {
        window.history.back();
      };

      return { form, submit, goBack };
    }
  };
  </script>

  <style scoped>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(45deg, #ff8971, #404040);
  }

  .form-container {
    display: flex;
    max-width: 42rem;
    margin: 0 auto;
    padding: 2rem;
    background: linear-gradient(to bottom right, #666666, #b2b2b2);
    border-radius: 0.75rem;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), inset 0 1px 3px rgba(255, 255, 255, 0.2);
    transform: scale(1);
    transition: transform 0.3s;
  }

  .form-content {
    width: 100%;
  }

  .form-content h1 {
    font-size: 1.875rem;
    color: white;
    font-weight: bold;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
  }

  .form-group {
    margin-bottom: 1rem;
  }

  .form-group label {
    display: block;
    color: white;
    font-weight: bold;
    margin-bottom: 0.5rem;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
  }

  .form-group input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid transparent;
    border-radius: 0.375rem;
    outline: none;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2), 0 1px 2px rgba(0, 0, 0, 0.1);
  }

  .form-group input:focus {
    border-color: #ff4500;
  }

  button[type="submit"] {
    width: 100%;
    background-color: #3e81fd;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
  }

  button[type="submit"]:hover {
    background-color: #393939;
  }

  .btn-back {
    position: absolute;
    bottom: -2rem;
    left: 50%;
    transform: translateX(-50%);
    background-color: #adffa0;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
  }

  .btn-back:hover {
    background-color: #ff4500;
    transform: translateX(-50%) scale(1.05);
  }
  </style>
