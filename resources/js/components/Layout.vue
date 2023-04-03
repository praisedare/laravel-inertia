<template>
    <Nav/>
    <p>User {{ $page.props.auth.user.name }}</p>
    <main>
        <slot></slot>
    </main>
</template>

<script setup>
    import Nav from './Nav.vue';
</script>
