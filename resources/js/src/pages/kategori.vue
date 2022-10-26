<template>
    <div class="container mb-4 product">
        <h2 class="m-4">Semua Kategori</h2>
        <router-link class="mt-3" :to="{ name: 'Dashboard' }">
            Kembali
        </router-link>
        <div class="bag1 row d-flex justify-content-around">
            <div v-for="kat in kategori" :key="kat.id" class="card col-lg-3 m-2 mt-4" style="width: 18rem;">
                <div class="card-body">
                    <h4>
                        <li>{{ kat.nama }}</li>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {

    metaInfo: { title: 'Converse | Kategori' },

    data() {
        return {
            kategori: []
        }
    },
    methods: {
        showKategori() {
            axios.get('api/kategori')
                .then(response => {
                    this.kategori = response.data;
                });
        },
    },
    mounted() {
        this.showKategori();
    }
}
</script>
