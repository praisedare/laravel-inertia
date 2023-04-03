<template>
    <h1>Users</h1>
    <ul>
        <li v-for="user of users" v-text="user"/>
    </ul>
</template>

<script setup>
const users = ['John', 'Obi', 'Michael'];
</script>

<style scoped>
/* code... */
</style>
