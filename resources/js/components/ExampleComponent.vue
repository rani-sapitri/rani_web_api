<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test Api </div>

                    <div 
                    v-if="loading === false"
                    class="card-body">
                        Contoh hasil pemanggilan endpoint api

                        <p>Response:</p>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nama</th>
                                    <th>JK</th>
                                    <th>Dibuat Pada</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in data":key="item.id">
                                    <td>{{ item.nama }}</td>
                                    <td>{{ item.jk }}</td>
                                    <td>{{ item.created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                        {{ data }}
                        {{ error }}
                    </div>
                    <div
                    v-else
                    class="card-body">
                        loading...
                    </div>
                </div>
            </div>
        </div>
        <div>
            <vue-progress-bar></vue-progress-bar>
        </div>
    </div>
</template>

<script> // 
    export default {
        data(){
            return{
                data: [],
                error: null,
                loading: false
            }
        },

        mounted() { //untuk memastikan semua halaman dan semua file java script nya sudah terdownload
            this.getData()
        },

        methods: { //berisi semua function yang akan kita buat
            getData(){
                this.loading = true
                this.$Progress.start()
                axios.get('/testapi')//1
                .then((res) => { //2
                    //
                    this.data = res.data.data
                    this.loading = false
                    this.$Progress.finish()
                })
                .catch(() => {//3
                    //
                    this.error = error.message
                    this.loading = false
                })
            }
        }
    }
</script>
