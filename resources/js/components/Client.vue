<template>
    <div>
        <div class="container"><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Crear Cliente
                        </div>
                        <div class="card-body">
                            <form @submit.prevent="updateClient(client)" v-if="modoEditar">

                                <h3>Editar Cliente</h3>

                                <label>Nit</label>
                                <input type="number" class="form-control mb-2" 
                                    placeholder="Nit Cliente" v-model="client.nombre">

                                <label>Razón Social</label>
                                <input type="text" class="form-control mb-2" 
                                    placeholder="Razón social Cliente" v-model="client.razon_social">

                                <label>Observaciones</label>
                                <textarea class="form-control" rows="3" placeholder="Observaciones Cliente" v-model="client.observaciones">
                                </textarea>
                                    
                                <button class="btn btn-warning" type="submit">Editar</button>
                                <!-- <button class="btn btn-danger" type="submit" 
                                    @click="cancelarEdicion">Cancelar</button> -->
                            </form>
                            <form @submit.prevent="createClient" v-else>
                            <!-- @csrf -->
                            <div class="form-group">
                                <label>Nit</label>
                                <input type="number" class="form-control" v-model="client.nit">
                            </div>
                            <div class="form-group">
                                <label>Razón Social</label>
                                <input type="text" class="form-control" v-model="client.razon_social">
                            </div>   
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" rows="3" v-model="client.observaciones"></textarea>
                            </div>  
                             <span class="input-group-btn">   
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <!-- <a href=" " class="btn btn-danger">Cancelar</a> -->
                             </span>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <transition name="slide-fade" mode="out-in">
        <router-view></router-view>           
    </transition>
</div>         
</template>

<script>

import axios from 'axios'
import toastr from 'toastr'
import Vue from 'vue'


    export default {

        data() {
            
            return{

                clients: [],
                modoEditar: false,
                client:{

                    nit: '',
                    razon_social: '',
                    observaciones:'',
                }
                
            }

        },

        created(){
            axios.get('/clientes')
            .this.clients = res.data;
        },

        methods:{

            createClient(){

            if(this.client.nit.trim() === '' || this.client.razon_social.trim() === '' || this.client.observaciones.trim() === ''){
                alert('Debes completar todos los campos antes de guardar');
                    return;
                }

                const clienteNew = this.client;
                this.client = {nit: '', razon_social: '', observaciones: ''};    
                axios.post('/clientes', clienteNew)
                    .then((res) =>{
                    const clientServidor = res.data;
                    this.clients.push(clientServidor);
                })
            },
            updateClient(client){
                const params = {nit: client.nit, razon_social: client.razon_social, observaciones: client.observaciones};
                axios.put(`/clientes/${client.nit}`, params)
                .then(res=>{
                this.modoEditar = false;
                const index = this.clients.findIndex(item => item.id === client.nit);
                this.notas[index] = res.data;
                })
            }   
        }
    }

    
</script>

<style>

</style>