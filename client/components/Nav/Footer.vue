<template>
  <div class="text-blue-800 dark:text-blue-900">
    <div class="bg-yellow-600 dark:bg-yellow-500 w-full h-20 items-center flex justify-center">
      <nuxt-link 
        :to="item.path" 
        v-for="(item, index) in items" 
        :key="index" 
        class="font-semibold"
      >
        <div 
          :class="[
            'grid items-center justify-center py-3 px-2 hover:bg-yellow-500 dark:hover:bg-yellow-600 rounded mx-1',
            { 'bg-yellow-700 dark:bg-yellow-200': activePath === item.path }
          ]"
        >
          <UChip color="red" :text="item.count" size="2xl" :show="item.count > 0">
            <UIcon :name="item.icon" class="text-2xl m-auto"/>
          </UChip>
          <p>{{ item.title }}</p>
        </div>
      </nuxt-link> 
    </div>
  </div>
</template>

<script setup>
import { ref, computed, watch } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();

const items = [
  {
    icon: 'i-heroicons-shopping-cart-16-solid',
    title: 'Cart',
    count: 5,
    path: '/products/cart'
  },
  {
    icon: 'i-heroicons-clipboard-document-20-solid',
    title: 'Check out',
    count: 0,
    path: '/products/checkout'
  },
  {
    icon: 'i-heroicons-information-circle-20-solid',
    title: 'FAQs',
    count: 0,
    path: '/products/faq',
  },
];

const activePath = ref(route.path);

watch(
  () => route.path,
  (newPath) => {
    activePath.value = newPath;
  },
  { immediate: true }
);
</script>
