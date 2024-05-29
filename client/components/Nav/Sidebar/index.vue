<template>
<div class="relative">

  <!--desktop-->
  <div class="lg:flex hidden fixed bg-blue-700 border-blue-900 dark:bg-blue-800 h-screen border-r w-40 z-10 flex-col justify-between">
    <NavSidebarMenu />
    <div class="border-t border-blue-500">
      <div class="m-[16px] w-auto h-auto flex justify-center">
        <nuxt-link to="/" class="m-auto">
          <UIcon name="i-heroicons-arrow-left-start-on-rectangle-20-solid" class="text-5xl p-1 text-white hover:text-blue-300 rounded"/> 
        </nuxt-link>
      </div>
    </div>
  </div>
</div>
</template>