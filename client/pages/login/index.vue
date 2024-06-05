<template>
  <div class="h-screen w-full flex items-center justify-center">
    <div class="fixed top-5 left-5 z-10">
      <ClientToggleDarkMode />
    </div>
    <UForm :state="state" class="w-[500px] h-auto dark:bg-blue-900 bg-white p-8 rounded flex flex-col gap-4 shadow-xl">
      <div class="flex justify-center">
        <img src="~/assets/img/sti-logo.png" alt="logo" class="w-auto h-14">
      </div>
      <p class="font-bold text-center text-xl">Sign in to your account</p>
      <hr class="dark:border-blue-700 border-blue-200 mt-2 mb-2">
      <div class="grid gap-y-1">
        <label for="email" class="flex gap-1 items-center font-semibold">
          <UIcon name="i-heroicons-envelope" class="text-lg"/>
          <p>Email</p>
        </label>
        <input type="text" id="email" placeholder="example@gmail.com"
            class="w-full bg-blue-50 p-2 rounded border-2 border-blue-100 transition-all duration-300 outline-none focus:border-blue-700 dark:focus:border-blue-500 mt-1 text-blue-900"/>
      </div>
      <div class="grid gap-y-1">
        <div class="flex justify-between items-center">
          <label for="password" class="flex gap-1 items-center font-semibold">
            <UIcon name="i-heroicons-envelope" class="text-lg"/>
            <p>Password</p>
          </label>
          <div class="text-xs font-medium cursor-pointer flex gap-x-1 items-center">
            <UIcon name="i-tabler-lock-question"/>
            <p>Forgot password?</p>
          </div>
        </div>
        <input type="password" id="password" placeholder="••••••••"
          class="w-full bg-blue-50 p-2 rounded border-2 border-blue-100 transition-all duration-300 outline-none focus:border-blue-700 dark:focus:border-blue-500 mt-1 text-blue-900"/>
      </div>
      <UButton label="Sign in" class="rounded dark:text-white flex justify-center p-3"/>
      <ClientDivider />
      <UButton icon="i-hugeicons-office-365" label="Student and Staff Office 365 Login" class="rounded dark:text-white flex justify-center bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 p-3"/>
    </UForm>
  </div>
</template>

<script setup>

const state = reactive({
  email: undefined,
  password: undefined
})

</script>