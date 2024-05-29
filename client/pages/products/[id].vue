<template>
  <div class="w-3/4 m-auto justify-center items-center grid gap-5">

    <nuxt-link to="/products" class="flex justify-start items-center gap-1 hover:opacity-70 w-fit">
      <UIcon name="i-heroicons-arrow-long-left-16-solid"/>
      <p>Back to products</p>
    </nuxt-link>

    <div class="flex items-center justify-center h-auto w-full bg-blue-200 dark:bg-blue-800 rounded-lg">
      <img :src="product.image" class="w-[500px] h-[500px] rounded-lg"/>

      <div class="flex flex-col gap-3 p-10">
        <h1 class="text-xl font-semibold">{{ product.id }} - {{ product.title }}</h1>
        <p class="tracking-wider text-sm">{{ product.description }}</p>
        <h1 class="font-black text-2xl">${{ product.price }}</h1>

        <div class="flex gap-3 flex-row mt-5">
          <UButton label="Add to Cart"/>
          <UButton label="Buy now"/>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
definePageMeta({
  layout: 'navigations'
});

const { id } = useRoute().params

const uri = 'https://fakestoreapi.com/products/' + id

const { data: product } = await useFetch(uri, { key: id})
</script>