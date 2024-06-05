<template>
  <div class="lg:grid lg:grid-cols-2 lg:space-x-10">
    <div id="preview box" class="p-6 bg-gray-800 rounded-lg ring-1 ring-gray-700">
      <div v-if="state.products" class="">
        <div class="flex justify-center">
          <img :src="previewProductData.photo || state.products.photo" alt="Product Photo" class="w-6/7 h-5/6" />
        </div>
        <div class="my-3 text-4xl text-gray-100 ">{{ previewProductData.name || state.products.name }}</div>
        <div class="my-3 text-lg text-gray-400">{{ previewProductData.description || state.products.description }}</div>
        <div class="my-3 text-xl text-gray-100">Quantity: {{ previewProductData.quantity || state.products.quantity }}</div>
        <div class="my-3 text-xl text-gray-100">Price: {{ previewProductData.price || state.products.price }}</div>
      </div>
      <div v-else>
        <p>Loading product details...</p>
      </div>
    </div>
    <div class="grid justify-center grid-cols-1 px-6 bg-gray-800 rounded-lg ring-1 ring-gray-700">
      <div v-if="state.products" class="flex flex-col space-y-4">
        <label class="self-center my-4 text-lg font-medium text-gray-100">Add Product</label>
        <input v-model="product.name" type="text" name="product name" class="h-10 px-3 py-2 rounded-lg" :placeholder="state.products.name">
        <textarea v-model="product.description" name="description" id="" cols="30" rows="10" class="px-3 py-2 rounded-lg h-28" :placeholder="state.products.description"></textarea>
        <div class="flex items-center justify-center h-56 p-5 mb-4 overflow-hidden text-gray-100 border-2 border-gray-700 border-dashed rounded-lg cursor-pointer hover:border-gray-100" @click="triggerFileInput" @dragover.prevent @dragenter.prevent @drop.prevent="handleDrop">
          <template v-if="product.photo">
            <img :src="product.photo" alt="Product Image" class="object-cover max-w-full max-h-full">
          </template>
          <template v-else>Drag and drop photo here or click to select</template>
          <input type="file" @change="handleFileUpload" class="hidden" ref="fileInput">
        </div>
        <div class="flex justify-center space-x-4">
          <input v-model.number="product.quantity" type="number" placeholder="Quantity" class="p-2 border-2 rounded-lg input hover:border-gray-700" />
          <input v-model.number="product.price" type="number" placeholder="Price" class="p-2 border-2 rounded-lg mb- input hover:border-gray-700" />
        </div>
        <div class="mb-3">
          <button @click="previewProduct" class="btn w-full mb-4 ring-1 hover:bg-[#1B5D88] text-white p-2 rounded-lg">Preview Product</button>
          <button class="w-full px-2 py-2 text-gray-100 transition-colors duration-300 ease-in-out bg-[#0072BC] rounded hover:bg-[#1B5D88] hover:text-gray-100">Update</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>

definePageMeta({
    layout: 'admin'
  });
  
import { reactive, onMounted, ref } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()

// State management
const state = reactive({
  id: null,
  products: null,
  errors: null
})

// Fetch product details
async function fetchProductDetails(id) {
  const params = {
    Authorization: "Bearer " + localStorage.getItem('_token'),
    Accept: "application/json"
  }

  try {
    const response = await $fetch(`http://127.0.0.1:8000/api/products/${id}`, {
      headers: params
    })

    state.products = response.data
  } catch (error) {
    state.errors = error.response
    console.error('Error:', error)

    // Navigate to login page if not logged in
    router.push('/')
  }
}

// Handle component mount
onMounted(() => {
  state.id = router.currentRoute.value.params.id
  fetchProductDetails(state.id);
})

// Product form management
const product = ref({
  name: '',
  description: '',
  photo: '',
  quantity: 0,
  price: 0,
})

const previewProductData = ref({ ...product.value })

const triggerFileInput = () => {
  fileInput.value.click();
}

const handleDrop = (event) => {
  const files = event.dataTransfer.files;
  if (files.length > 0) {
    readFile(files[0]);
  }
}

const handleFileUpload = () => {
  const file = fileInput.value.files[0];
  if (file) {
    readFile(file);
  }
}

const readFile = (file) => {
  if (!file.type.startsWith('image/')) {
    alert('Please upload an image file.');
    return;
  }
  const reader = new FileReader();
  reader.onload = (e) => {
    product.value.photo = e.target.result;
  }
  reader.readAsDataURL(file);
}

const previewProduct = () => {
  previewProductData.value = { ...product.value };
}

const fileInput = ref(null);
</script>
