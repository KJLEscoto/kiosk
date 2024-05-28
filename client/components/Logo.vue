<template>
  <div class="bg-yellow-500 p-2 rounded" v-if="isBackground">
    <img src="~/assets/img/sti-logo.png" alt="logo" class="w-auto" :class="iconHeight"/>
  </div>
  <div v-if="!isBackground">
    <img src="~/assets/img/sti-logo.png" alt="logo" class="w-auto" :class="iconHeight"/>
  </div>
</template>

<script setup>

const props = defineProps({
  iconHeight: {
    type: Number,
    default: '0'
  },
  isBackground: {
    type: Boolean,
    default: true
  }
})

const iconHeight = `h-${props.iconHeight}`;
const isBackground = ref(props.isBackground)

</script>