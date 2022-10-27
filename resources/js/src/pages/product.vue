<template>
    <div class="container">
        <div class="bag1 row d-flex justify-content-around" :style="{ 'margin-top': '60px' }">
            <h2 class="m-4">Semua Product</h2>
            <router-link class="mt-3" :to="{ name: 'Dashboard' }">
                Kembali
            </router-link>
            <div v-if="product.length == 0">
                <h3 class="text-center">Product Kosong!!</h3>
            </div>
            <div v-else>
                <div v-for="pro in product" :key="pro.id" class="card col-lg-3 m-2 mt-4" style="width: 18rem;">
                    <img :src="'/images/' + pro.gambar" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <p class="card-text">{{ pro.nama_product }}({{ pro.nama }})</p>
                        </b>
                        <p class="card-text">{{ pro.deskripsi_product }}</p>
                        <p class="terjual">Terjual : {{ pro.terjual }}</p>
                        <p class="stok">Stok : {{ pro.stok_product }}</p>
                        <b>
                            <h5 class="harga">Rp.{{ pro.harga_product }}</h5>
                        </b>
                        <div class="row">
                            <div class="col">
                                <router-link :to="{ name: 'editProduct', params: { id: pro.id } }"
                                    class="btn btn-primary">
                                    <i class="fa fa-pen" aria-hidden="true"></i> Edit
                                </router-link>
                            </div>
                            <div class="col">
                                <button class="btn btn-danger" data-bs-toggle="modal"
                                    :data-bs-target="`#deleteProduct` + pro.id">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>
                            </div>
                            <div class="modal fade" :id="`deleteProduct` + pro.id" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus product</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda ingin menghapus <b>{{ pro.nama_product }}</b>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"
                                                data-bs-dismiss="modal">Tidak</button>
                                            <a>
                                                <button type="button" class="btn btn-danger"
                                                    @click="deleteProduct(pro.id)">Ya</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</template>
<script>
export default {
    metaInfo: { title: 'Converse | Products' },
    data() {
        return {
            product: {
                nama_product: '',
                harga_product: '',
                terjual: '',
                stok_product: '',
                deskripsi_product: '',
                gambar: '',
                nama: ''
            },
            kategori: [],
        }
    },
    created() {
        axios.get('/api/product/show')
            .then(response => {
                this.product = response.data;
            });
    },

    methods: {
        showKategori() {
            axios.get('/api/kategori')
                .then(response => {
                    this.kategori = response.data;
                });
        },
        deleteProduct(id) {
            axios.delete(`api/product/delete/${id}`)
                .then(response => {
                    window.location.reload(true);
                });
        }
    },
    mounted() {
        // this.showProduct();
        this.showKategori();
    }
}
</script>
