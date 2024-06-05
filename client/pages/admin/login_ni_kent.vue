<template>
  <div class="h-screen w-full flex items-center justify-center">
    <div class="fixed top-5 left-5 z-10">
      <ToggleDarkMode />
    </div>
    <UForm
      method="POST" 
      @submit="handleLogin()" 
      class="w-[500px] h-auto dark:bg-gray-800 border border-gray-300 dark:border-gray-700 bg-white p-8 rounded flex flex-col gap-4 shadow-xl">
      
      <div class="flex justify-center">
        <img src="~/assets/img/sti-logo.png" alt="logo" class="w-auto h-14">
      </div>
      <p class="font-bold text-center text-xl">Sign in to your account</p>
      <hr class="dark:border-blue-700 border-blue-200 mt-2 mb-2">
      
      <p v-if="state.errors && state.errors.message" class="text-sm font-medium text-center text-red-500">{{ state.errors.message }}</p>
      
      <UFormGroup class="grid gap-1">
        <template #label>
          <div class="flex items-center justify-start gap-1">
            <UIcon 
              name="i-bi-envelope" 
              class="text-lg" />
            <p class="text-base">Email Address</p>
          </div>
        </template>
        <UInput
          color="gray" 
          required=""
          v-model="state.user.email"
          size="md" 
          type="email"
          name="email"
          :trailing-icon="error ? 'i-heroicons-exclamation-triangle-20-solid' : undefined" 
          :ui="{rounded: 'rounded',color: {gray: {outline: 'dark:bg-blue-100 dark:text-blue-900'}}}" 
          placeholder="Enter username" />
      </UFormGroup>
      
      <UFormGroup class="grid gap-1">
        <template #label>
          <div class="flex items-center gap-1">
            <UIcon 
              name="i-bi-key" 
              class="text-lg" />
            <p class="text-base">Password</p>
          </div>
        </template>
        <template #hint>
          <nuxt-link to="#" class="flex items-center gap-x-1 text-xs font-medium cursor-pointer hover:opacity-50">
            <UIcon name="i-bi-person-lock"/>
            <p>Forgot password?</p>
          </nuxt-link>
        </template>
        <UInput 
          type="password" 
          color="gray" 
          required=""
          v-model="state.user.password"
          name="password"
          size="md" 
          :ui="{rounded: 'rounded',color: {gray: {outline: 'dark:bg-blue-100 dark:text-blue-900'}}}" 
          placeholder="••••••••" />
      </UFormGroup>

      <UButton type="submit" label="Sign in" class="rounded dark:text-white flex justify-center"/>
      <Divider />
      <UButton to="#" icon="i-hugeicons-office-365" label="Student and Staff Office 365 Login" class="rounded dark:text-white flex justify-center bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600"/>
    </UForm>
  </div>
</template>

<script setup>
import { reactive, onMounted } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()

const state = reactive({
  errors: {},
  user: {
    email: '',
    password: '',
  },
  token: ''
})

async function handleLogin() {
  const params = { 
    email: state.user.email,
    password: state.user.password
  }

  try {
    const response = await $fetch(`http://127.0.0.1:8000/api/login`, {
      method: 'POST',
      body: params
    })

    if (response.data) {
      localStorage.setItem('_token', response.data.token)
      state.token = localStorage.getItem('_token')
      router.push('/admin/dashboard')
    }
  } catch (error) {
    state.errors = error.response ? error.response.data : { message: 'An unknown error occurred' }
    console.error('Login error:', error)
  }
}

function isLogged() {
  if (!localStorage.getItem('_token')) {
    alert("Not logged in! log in first.")
    router.push('/admin')
  }
}

onMounted(() => {
  isLogged()
});
</script>
