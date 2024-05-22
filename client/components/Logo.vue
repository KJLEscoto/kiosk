<template>
  <div>
    <img src="~/assets/img/sti-logo.png" alt="logo" class="w-auto" :class="iconHeight"/>
  </div>
</template>

<script setup>

const props = defineProps({
  iconHeight: {
    type: Number,
    default: '0'
  },
})

const iconHeight = `h-${props.iconHeight}`;

</script>