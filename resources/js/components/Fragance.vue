<template>
    <div>
        <div class="container"><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Crear Fragancia
                        </div>
                        <div class="card-body">
                            <form v-on:submit.prevent="">
                            <!-- @csrf -->
                            <div class="form-group">
                                <label>ID Fragancia</label>
                                <input type="number" class="form-control" v-model="nit" >
                            </div>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" v-model="razon_social" >
                            </div>   
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a href=" " class="btn btn-danger">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    
    data(){
        return{
            
        }
    }
}
</script>
<style scoped>

</style>
