<template>
    <div>
        <h2 class="m-4">{{kategori}} Styles</h2>
        <div class="bag1 row d-flex justify-content-around">
            <div v-for="wanita in wanitas" :key="wanita.id" class="card col-md-3 m-2" style="width: 18rem;">
                <img :src="'/images/'+ wanita.gambar" class="card-img-top" alt="...">
                <div class="card-body">
                    <b>
                        <p class="card-text">{{ wanita.nama_product }} ({{wanita.nama}})</p>
                    </b>
                    <p class="card-text">{{ wanita.deskripsi_product }}</p>
                    <p class="terjual">Terjual : {{ wanita.terjual }}</p>
                    <p class="stok">Stok : {{ wanita.stok_product }}</p>
                    <b>
                        <h5 class="harga">Rp.{{wanita.harga_product }}</h5>
                    </b>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';


export default {
    name: '',
    data() {
        return {
            kategori: 'Wanita',
            wanitas: []
        }
    },
    methods: {
        viewWanita() {
            axios.get('http://localhost:8000/api/Product-wanita')
                .then(response => {
                    this.wanitas = response.data;
                });
        }
    },
    mounted() {
        this.viewWanita();
    }
}
</script>
