<template>
  <div class="block py-3 px-4 bg-red-500 rounded-lg mt-2 text-red-100 font-light">
    <slot />
  </div>
</template>

<script>
  export default {
    name: 'VInputError'
  }
</script>
