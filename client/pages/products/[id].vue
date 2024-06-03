<template>
  <div class="w-3/4 m-auto justify-center items-center grid gap-5">

    <nuxt-link to="/products" class="flex justify-start items-center gap-1 hover:opacity-50 w-fit">
      <UIcon name="i-bi-arrow-bar-left"/>
      <p>Back to products</p>
    </nuxt-link>

    <div class="flex items-center justify-center h-auto w-full bg-blue-200 dark:bg-blue-800 rounded-lg">
      <img :src="product.image" class="w-[500px] h-[500px] rounded-l-lg border p-5 bg-white"/>

      <div class="flex flex-col gap-3 p-10">
        <h1 class="text-xl font-semibold">{{ product.id }} - {{ product.title }}</h1>
        <p class="tracking-wider text-sm">{{ product.description }}</p>
        <h1 class="font-black text-2xl">${{ product.price }}</h1>

        <div class="flex gap-3 flex-row mt-5">
          <UButton label="Add to Cart" icon="i-bi-cart-plus"/>
          <UButton label="Buy now" icon="i-bi-cart-check" trailing/>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
definePageMeta({
  layout: 'client'
});

const { id } = useRoute().params

const uri = 'https://fakestoreapi.com/products/' + id

const { data: product } = await useFetch(uri, { key: id})
</script>