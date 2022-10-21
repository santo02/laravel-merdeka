<template>
    <div>
        <h2 class="m-4">{{kategori}} Styles</h2>
        <div class="bag1 row d-flex justify-content-around">
            <div v-for="pria in prias" :key="pria.id" class="card col-md-3 m-2" style="width: 18rem;">
                <img :src="'/images/'+ pria.gambar" class="card-img-top" alt="...">
                <div class="card-body">
                    <b>
                        <p class="card-text">{{ pria.nama_product }} ({{pria.nama}})</p>
                    </b>
                    <p class="card-text">{{ pria.deskripsi_product }}</p>
                    <p class="terjual">Terjual : {{ pria.terjual }}</p>
                    <p class="stok">Stok : {{ pria.stok_product }}</p>
                    <b>
                        <h5 class="harga">Rp.{{pria.harga_product }}</h5>
                    </b>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: 'card-pria',
    data() {
        return {
            prias: [],
            kategori: 'Pria'
        }
    },

    methods: {
        viewprias() {
            axios.get('http://localhost:8000/api/Product-pria')
                .then(response => {
                    this.prias = response.data;
                });
        }
    },

    mounted() {
        this.viewprias();
    }

}
</script>
