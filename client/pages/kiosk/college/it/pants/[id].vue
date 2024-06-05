<template>
  <ClientProductDetail
    :back-link="'/kiosk/college/it/pants'"
    :back-text="'IT Pants'"
    :product="product"
    :loading="loading"
  />
</template>

<script setup>

definePageMeta({
  layout: 'client-college'
})

const route = useRoute()
const product = ref({})
const loading = ref(true)

const { id } = route.params

const fetchProduct = async () => {
  const uri = `https://fakestoreapi.com/products/${id}`
  const { data, error } = await useFetch(uri)

  if (!error.value) {
    product.value = data.value
  } else {
    console.error('Failed to fetch product data:', error.value)
  }
  
  loading.value = false
}

onMounted(fetchProduct)
</script>
