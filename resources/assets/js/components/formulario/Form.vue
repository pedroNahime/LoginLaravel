<template>
    <form method="POST" v-bind:action="rota">
        <slot></slot>
    </form>
</template>

<script>
    export default {
       props:['rota']
    }
</script>

<style scoped>

</style>