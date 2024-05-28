<template>

  <!-- destop -->
  <div class="flex flex-col justify-between">
    <header class="flex justify-between items-center">
      <Logo :iconHeight="10" :is-background="false"/>
      <ToggleDarkMode />
    </header>
    <Divider :isOpen="false"/>
    <NavSidebarMenu />
  </div>
</template>