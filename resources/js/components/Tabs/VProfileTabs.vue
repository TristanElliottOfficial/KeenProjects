<template>
    <div>
        <div class="block">
            <a href="#projects" @click.prevent="setActive('projects')" :class="{ active: isActive('projects') }" class="inline-block px-4 py-2 font-light bg-gray-100 rounded-t-lg hover:bg-indigo-500 hover:text-indigo-100 text-gray-700">Projects</a>
            <a href="#tasks" @click.prevent="setActive('tasks')" :class="{ active: isActive('tasks') }" class="inline-block px-4 py-2 font-light bg-gray-100 rounded-t-lg hover:bg-indigo-500 hover:text-indigo-100 text-gray-700">Tasks</a>
            <a href="#teams" @click.prevent="setActive('teams')" :class="{ active: isActive('teams') }" class="inline-block px-4 py-2 font-light bg-gray-100 rounded-t-lg hover:bg-indigo-500 hover:text-indigo-100 text-gray-700">Teams</a>
        </div>
        <div id="myTabContent">
            <main id="projects" class="bg-white p-6 shadow-lg rounded-lg hidden" :class="{ 'block active': isActive('projects') }"><slot /></main>
            <main id="tasks" class="bg-white p-6 shadow-lg rounded-lg hidden" :class="{ 'block active': isActive('tasks') }"><slot /></main>
            <main id="teams" class="bg-white p-6 shadow-lg rounded-lg hidden" :class="{ 'block active': isActive('teams') }"><slot /></main>
        </div>
    </div>
</template>

<script>
    export default {
        name: "VProfileTabs",
        data() {
            return {
                activeItem: 'projects'
            }
        },
        methods: {
            isActive (menuItem) {
                return this.activeItem === menuItem
            },
            setActive (menuItem) {
                this.activeItem = menuItem
            }
        }
    }
</script>

<style lang="css">

.active {
    @apply bg-indigo-500 text-indigo-100;
}

</style>
