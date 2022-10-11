<template>
    <div>
        <h2 class="m-4">{{kategori}} Styles</h2>
        <div class="bag1 row d-flex justify-content-around">
            <div v-for="trending in trendings" :key="trending.id" class="card col-md-3 m-2" style="width: 18rem;">
                <img :src="`${trending.gambar}`" class="card-img-top" alt="...">
                <div class="card-body">
                    <b>
                        <p class="card-text">{{ trending.nama_product }} ({{trending.nama}})</p>
                    </b>
                    <p class="card-text">{{ trending.deskripsi_product }}</p>
                    <p class="terjual">Terjual : {{ trending.terjual }}</p>
                    <p class="stok">Stok : {{ trending.stok_product }}</p>
                    <b>
                        <h5 class="harga">Rp.{{trending.harga_product }}</h5>
                    </b>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: 'card-trending',
    data() {
        return {
            trendings: [],
            kategori: 'Trending'
        }
    },

    methods: {
        viewTrending() {
            axios.get('http://localhost:8000/api/Product-trending')
                .then(response => {
                    this.trendings = response.data;
                });
        }
    },

    mounted() {
        this.viewTrending();
    }

}
</script>
