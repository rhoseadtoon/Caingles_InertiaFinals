<template>
    <div class="laptops-container">
      <h1>Popular Laptops</h1>
      <div class="laptops-cards">
        <div v-for="laptop in laptops" :key="laptop.id" class="laptop-card">
          <p><strong>Brand:</strong> {{ laptop.brand_name }}</p>
          <p><strong>Model:</strong> {{ laptop.model }}</p>
          <p><strong>Price:</strong> ${{ laptop.price }}</p>
        </div>
      </div>
    </div>
  </template>

  <script setup>
  import { defineProps } from 'vue';
  import Homelayout from '@/Layouts/Homelayout.vue';

  defineOptions({
    layout: Homelayout
    })
  const props = defineProps({
    laptops: Array
  });
  </script>

  <style scoped>
  .laptops-container {
    padding: 20px;
    margin: auto;
    width: 900px;
    background-color: #c1e1c5;
  }

  .laptops-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .laptop-card {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 20px;
    width: 200px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .laptop-card p {
    margin: 5px 0;
  }

  h1 {
    text-align: center;
    font-size: 40px;
    font-family: monospace;
  }
  </style>
