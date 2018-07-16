<template>
    <form enctype="multipart/form-data" method="POST" v-bind:action="rota">
        <slot></slot>
    </form>
</template>

<script>
    export default {
        props: ['rota'],
        apiUrl: Vue.prototype.apiUrl,

    }
</script>

<style scoped>

</style>