<template>
  <div>
    <button
        @click="show = true"
        v-on:focusout="show = false"
        class="block focus:outline-none"
    >
      <img src="http://tristanelliott.co.za/development/users/User1.jpg" class="w-10 h-10 rounded-full" alt="Profile Picture">
    </button>
      <transition
          enter-active-class="transition ease-out duration-100"
          enter-class="transform opacity-0 scale-95"
          enter-to-class="transform opacity-100 scale-100"
          leave-active-class="transition ease-in duration-75"
          leave-class="transform opacity-100 scale-100"
          leave-to-class="transform opacity-0 scale-95">
          <div v-show="show" class="absolute right-0 w-48 bg-white rounded-lg shadow px-2 py-4">
              <slot />
          </div>
      </transition>
  </div>
</template>

<script>
export default {
  name: 'VDropdown',
  props: ['heading'],
  data() {
    return {
      show: false
    }
  }
}
</script>

<style lang="css" scoped>
</style>
