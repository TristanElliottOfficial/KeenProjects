<template>
    <div class="flex h-screen justify-center items-center bg-gray-200">
        <div class="w-1/4">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h1 class="text-4xl text-gray-700 font-light pb-3">{{ title }}</h1>
                <!-- Slot Form Content -->
                <slot />
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'VAuthCard',
    props: ['title']
  }
</script>
