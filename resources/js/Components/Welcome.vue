<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <button v-if="$page.props.user.permissions.includes('create roles')">Administrar Roles</button>
        <button v-if="$page.props.user.permissions.includes('read products')">Administrar Productos</button>
    </div>
</template>

<style scoped>
button {
    background-color: green;
    color: white;
    padding: 20px;
    margin: 10px;
    border-radius: 10px;
}
</style>>