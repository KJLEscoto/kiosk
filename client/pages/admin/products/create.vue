<template>
    <div class="flex items-center justify-center my-10 scrollbar-hide">
        <div class="flex items-center max-w-lg p-6 mx-auto space-x-4 bg-gray-800 shadow-md ring-1 shadow-gray-700 ring-gray-700 rounded-xl">
            <div class="flex flex-col">
                <label class="self-center pb-6 text-lg font-medium text-gray-100">Add Product</label>
                <input v-model="product.name" type="text" placeholder="Name" class="p-2 mb-4 border-2 border-gray-200 rounded-lg textb input hover:border-gray-700" />
                <textarea v-model="product.description" placeholder="Description" class="p-2 mb-4 border-2 border-gray-200 rounded-lg input hover:border-gray-700"></textarea>
            
                <div class="flex items-center justify-center h-48 p-5 mb-4 overflow-hidden text-gray-100 border-2 border-gray-700 border-dashed rounded-lg cursor-pointer hover:border-gray-100" @click="triggerFileInput" @dragover.prevent @dragenter.prevent @drop.prevent="handleDrop">
                    <template v-if="product.photo">
                        <img :src="product.photo" alt="Product Image" class="object-cover max-w-full max-h-full">
                    </template>
                    <template v-else>Drag and drop photo here or click to select</template>
                    <input type="file" @change="handleFileUpload" class="hidden" ref="fileInput">
                </div>
    
                <input v-model.number="product.quantity" type="number" placeholder="Quantity" class="p-2 mb-4 border-2 border-gray-200 rounded-lg input hover:border-gray-700" />
                <input v-model.number="product.price" type="number" placeholder="Price" class="p-2 mb-4 border-2 border-gray-200 rounded-lg input hover:border-gray-700" />
                <button @click="submitProduct" class="btn bg-[#0072BC] hover:bg-[#1B5D88] text-white p-2 rounded-lg">Submit Product</button>
                <nuxt-link to="/admin/products"  class="bg-[#0072BC] hover:bg-[#1B5D88] text-white p-2 mt-3 rounded-lg flex justify-center">Go back</nuxt-link>
            </div>
        </div>
    </div>
</template>
  

<script>

definePageMeta({
    layout: 'admin'
  });

export default {
    data() {
        return {
            product: {
            name: '',
            description: '',
            photo: '',
            quantity: '',
            price: '',
            },
        };
    },
methods: {
    triggerFileInput() {
      this.$refs.fileInput.click();
    },
    handleDrop(event) {
      const files = event.dataTransfer.files;
      if (files.length > 0) {
        this.readFile(files[0]);
      }
    },
    handleFileUpload() {
      const file = this.$refs.fileInput.files[0];
      if (file) {
        this.readFile(file);
      }
    },
    readFile(file) {
      if (!file.type.startsWith('image/')) {
        alert('Please upload an image file.');
        return;
      }
      const reader = new FileReader();
      reader.onload = (e) => {
        this.product.photo = e.target.result;
      };
      reader.readAsDataURL(file);
    },
    submitProduct() {
      let products = JSON.parse(localStorage.getItem('products') || '[]');
      let newProduct = {
        ...this.product,
        id: Date.now()
      };
      products.push(newProduct);
      localStorage.setItem('products', JSON.stringify(products));
      console.log("Product added:", this.product);
      alert('Product added successfully!');
      this.resetForm();
    },
    resetForm() {
      this.product = { name: '', description: '', photo: '', quantity: '', price: '' };
    }
  },
};
</script>

<style scoped>
.hidden {
  display: none;
}
</style>