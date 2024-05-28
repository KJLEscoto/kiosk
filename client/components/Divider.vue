<template>
  <div class="flex gap-x-2 mt-2 mb-2 items-center" v-if="isOpen">
    <hr class="w-full dark:border-blue-600 border-blue-400">
    <p class="text-xs font-semibold">OR</p>
    <hr class="w-full dark:border-blue-600 border-blue-400">
  </div>
  <div class="mb-3 mt-3" v-if="!isOpen">
    <hr class="w-full dark:border-blue-600 border-blue-400">
  </div>
</template>

<script setup>
const props = defineProps({
  isOpen: {
    type: Boolean,
    default: true
  }
});

const isOpen = ref(props.isOpen);

</script>