<template>
  <div class="h-auto w-full">

    <!--v-if length < 0-->
    <div v-if="loading" class="flex justify-center items-center">
      <UIcon name="i-bi-arrow-clockwise" class="animate-spin text-4xl" />
    </div>
    <section v-else class="flex flex-col">
      <div class="flex flex-col gap-5">
        <section class="flex gap-2 items-center">
          <hr class="w-1/12 border-blue-200 dark:border-blue-800">
          <h1 class="font-bold text-base">Highlights</h1>
          <hr class="w-full border-blue-200 dark:border-blue-800">
        </section>
        <section class="grid grid-cols-4 gap-4 text-blue-800 dark:text-blue-900 w-full px-20">
          <nuxt-link v-for="(product, index) in products" :to="`/kiosk/products/${product.id}`" :key="index" class="border p-3 rounded bg-white flex flex-col justify-between gap-2">
              <img :src="product.image" alt="img" class="w-auto h-24 mx-auto">
              <p class="text-sm text-gray-500">{{ product.title }}</p>
              <h1 class="mx-auto font-semibold">${{ product.price }}</h1>
            </nuxt-link>
        </section>
      </div>
      
      <div class="h-auto w-full mt-20 text-blue-900 bg-white dark:bg-blue-900 py-10">
        <h1 class="font-bold px-20 text-xl text-blue-900 dark:text-white">SHOP BY</h1>
        <section class="flex gap-2 items-center">
          <hr class="w-1/12 border-blue-200 dark:border-blue-700">
          <h1 class="font-bold text-base dark:text-white">Programs</h1>
          <hr class="w-full border-blue-200 dark:border-blue-700">
        </section>
        <div class="lg:flex grid gap-5 h-full px-20 mt-5">
          <section class="p-10 h-full w-full rounded bg-yellow-200 flex flex-col justify-between gap-2">
            <img class="w-auto h-auto rounded-t" src="~/assets/img/shs-2.jpg" alt="shs">
            <div class="flex justify-between items-center">
              <h1 class="font-semibold">Senior High Merch</h1>
              <UButton to="/kiosk/shs" class="flex items-center rounded hover:opacity-50 gap-x-1 bg-yellow-600 hover:bg-yellow-600 dark:bg-yellow-600 dark:text-white dark:hover:bg-yellow-600 dark:hover:bg-opacity-50">
                <p class="text-sm">View Products</p>
                <UIcon name="i-bi-arrow-bar-right" class="text-lg"/>
              </UButton>
            </div>
          </section>
          <section class="p-10 h-full w-full rounded bg-blue-300 flex flex-col justify-between gap-2">
            <img class="w-auto h-auto rounded-t" src="~/assets/img/college-1.jpg" alt="college">
            <div class="flex justify-between items-center">
              <h1 class="font-semibold">College Merch</h1>
              <UButton to="/kiosk/college" class="flex items-center rounded hover:opacity-50 gap-x-1 bg-blue-500 hover:bg-blue-500 dark:text-white dark:bg-blue-500 dark:hover:bg-blue-500 dark:hover:bg-opacity-50">
                <p class="text-sm">View Products</p>
                <UIcon name="i-bi-arrow-bar-right" class="text-lg"/>
              </UButton>
            </div>
          </section>
        </div>
      </div>

    </section>

    <!--v-else-->
    <!-- <section class="flex mt-52 text-gray-700 dark:text-white font-semibold text-xl">
      <p class="m-auto">No items found.</p>
    </section> -->
    
  </div>
</template>


<script setup>

definePageMeta({
  layout: 'client'
});

const { data: products } = await useFetch('https://fakestoreapi.com/products');

</script>

