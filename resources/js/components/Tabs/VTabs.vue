<template>
    <div>
        <nav v-for="(tab, index) in tabs" :key="tab.title" @click="selectTab(index)" class="flex items-center">
            <span class="inline-block px-4 py-2 font-light bg-gray-100 rounded-t-lg hover:bg-indigo-500 hover:text-indigo-100 text-gray-700">{{ tab.title }}</span>
        </nav>
        <div>
            <slot />
        </div>
    </div>
</template>

<script>
export default {
    name: "VTabs",
    data() {
        return {
            selectedIndex: 0,
            tabs: []
        }
    },
    created() {
        this.tabs = this.$children
    },
    mounted() {
        this.selectTab(0)
    },
    methods: {
        selectTab: function(i) {
            this.selectedIndex = i
            this.tabs.forEach((tab, index) => {
                tab.isActive = (index === i)
            })
        }
    }
}
</script>

<style scoped>

</style>
