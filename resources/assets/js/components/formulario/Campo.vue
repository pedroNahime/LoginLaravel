<template>
    <div class="form-group row">
        <label  v-bind:for="campo" class="col-md-4 col-form-label text-md-right">{{ nome}}</label>

        <div class="col-md-6">
            <input  v-bind:id="campo" v-bind:type="tipo" v-bind:class="classes" class="form-control" v-bind:name="name" v-bind:value="valor" required>
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props:['nome','classes','valor','campo','tipo', 'name']
    }
</script>

<style scoped>

</style>