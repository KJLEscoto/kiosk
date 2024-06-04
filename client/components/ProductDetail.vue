<template>
  <div v-if="loading" class="flex justify-center items-center">
    <UIcon name="i-bi-arrow-clockwise" class="animate-spin text-4xl" />
  </div>
  <div v-else class="w-3/4 m-auto justify-center items-center grid gap-5">
    <nuxt-link :to="backLink" class="flex justify-start items-center gap-1 hover:opacity-50 w-fit">
      <UIcon name="i-bi-arrow-bar-left"/>
      <p>Back to {{ backText }}</p>
    </nuxt-link>

    <div class="flex items-center justify-center h-auto w-full bg-blue-200 dark:bg-blue-800 rounded-lg">
      <img :src="product.image" class="w-[500px] h-[500px] rounded-l-lg border p-5 bg-white"/>

      <div class="flex flex-col gap-3 p-10">
        <h1 class="text-xl font-semibold">{{ product.id }} - {{ product.title }}</h1>
        <p class="tracking-wider text-sm">{{ product.description }}</p>
        <h1 class="font-black text-2xl">${{ product.price }}</h1>

        <div class="flex gap-3 flex-row mt-5">
          <UButton class="rounded bg-yellow-600 hover:bg-yellow-600 hover:bg-opacity-50 dark:bg-yellow-200 dark:hover:bg-yellow-300" label="Add to Cart" icon="i-bi-cart-plus"/>
          <UButton class="rounded " label="Buy now" icon="i-bi-cart-check" trailing/>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps } from 'vue'

const props = defineProps({
  backLink: {
    type: String,
    required: true
  },
  backText: {
    type: String,
    required: true
  },
  product: {
    type: Object,
    required: true,
    default: () => ({
      id: '',
      title: '',
      description: '',
      price: 0,
      image: ''
    })
  },
  loading: {
    type: Boolean,
    required: true
  }
})
</script>
