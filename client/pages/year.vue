<template>
  <div class="h-screen w-full items-center flex justify-center tracking-wider lg:px-0 px-10">
    <div class="absolute top-5 left-5 z-10">
      <ToggleDarkMode />
    </div>
    <div class="h-auto w-[1000px] flex flex-col gap-10">
      <Logo :iconHeight="20" class="m-auto"/>
      <h1 class="text-4xl font-black text-center">Select Year Level</h1>
      <div class="flex h-52 gap-5 justify-between">
        <nuxt-link to="/senior-high" class="w-1/2 rounded bg-yellow-500 hover:bg-yellow-400 p-4 flex flex-col justify-between shadow-lg dark:hover:bg-yellow-600">
            <p class="text-center dark:text-blue-950 font-bold text-xl">Senior High</p>
            <Logo :iconHeight="20" class="m-auto"/>
        </nuxt-link>
        <nuxt-link to="/tertiary" class="w-1/2 rounded bg-yellow-500 hover:bg-yellow-400 p-4 flex flex-col justify-between shadow-lg dark:hover:bg-yellow-600">
            <p class="text-center dark:text-blue-950 font-bold text-xl">Tertiary</p>
            <Logo :iconHeight="20" class="m-auto"/>
        </nuxt-link>
      </div>
    </div>
  </div>
</template>