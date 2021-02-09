<template>
  <div :id="id" class="block py-3">
      <label :for="id" class="block pb-2 text-gray-700 font-light">{{ label }}</label>
      <input
      :type="type"
      :id="id"
      :name="name"
      :placeholder="placeholder"
      :class="errors"
      class="block py-2 px-4 w-full border rounded-lg font-light hover:shadow focus:outline-none focus:ring-2 ring-blue-400 ring-opacity-50 transition duration-300 ease-in-out"
      />
      <slot />
  </div>
</template>

<script>
  export default {
    name: 'VInput',
    props: [ 'id', 'type', 'name', 'placeholder', 'label', 'errors' ]
  }
</script>
