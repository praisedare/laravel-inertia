<template>
    <template v-if="visible">
        <h1>Hello {{ name }}</h1>
    </template>
    <button @click="visible = !visible" v-text="text"/>
</template>

<script>
import Layout from '../components/Layout.vue';

export default {
    "name": "Hello",
    data() {
        return {
            visible: true,
        };
    },
    computed: {
        text() {
            return this.visible ? "Hide" : "Show";
        },
    },
    props: {
        name: {
            type: String,
            required: true,
        }
    },
}
</script>

