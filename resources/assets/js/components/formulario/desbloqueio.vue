<template>
    <form action="/unlock" method="get">
        <div class="text-center">
            <p>Caso tenha bloqueado seu e-mail</p>
        </div>
        <div class="form-group row">
            <label for="emailDesbloqueio" class="col-md-4 col-form-label text-md-right">Email para desbloqueio</label>

            <div class="col-md-6">
                <input id="emailDesbloqueio" type="email" class="form-control" required>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Desbloquear
                </button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        name: "desbloqueio"
    }
</script>

<style scoped>

</style>