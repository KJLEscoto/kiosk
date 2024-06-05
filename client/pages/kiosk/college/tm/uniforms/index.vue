<template>
  <div class="h-auto w-full">
    <ClientCollegeTmCategories/>

    <div class="px-20">
      <p class="text-center mb-10 uppercase">dapat diri naka filter ang uniforms sa tm</p>
      <section class="grid grid-cols-4 gap-4 text-blue-800 dark:text-blue-900 w-full">
        <nuxt-link v-for="(product, index) in products" :to="`/kiosk/college/tm/uniforms/${product.id}`" :key="index" class="border p-3 rounded bg-white flex flex-col justify-between gap-2">
            <img :src="product.image" alt="img" class="w-auto h-24 mx-auto">
            <p class="text-sm text-gray-500">{{ product.title }}</p>
            <h1 class="mx-auto font-semibold">${{ product.price }}</h1>
          </nuxt-link>
      </section>
    </div>
  </div>
</template>

<script setup>
definePageMeta({
  layout: 'client-college'
});

const { data: products } = await useFetch('https://fakestoreapi.com/products');
</script>