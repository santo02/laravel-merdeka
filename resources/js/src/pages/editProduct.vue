<template>
    <div class="container product">
        <div class="row">
            <div class="form">
                <h1>Edit Product </h1>
                <div class="form">
                    <form @submit.prevent="updateProduct" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Product</label>
                            <input type="text" v-model="product.nama_product" class="form-control" name="nama"
                                id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Product</label>
                            <input type="number" v-model="product.harga_product" class="form-control" name="harga"
                                id="harga">
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok Product</label>
                            <input type="number" v-model="product.stok_product" class="form-control" name="stok"
                                id="stok">
                        </div>
                        <div class="mb-3">
                            <label for="terjual" class="form-label">Terjual Product</label>
                            <input type="number" v-model="product.terjual" class="form-control" name="terjual"
                                id="terjual">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi
                                Product</label>
                            <textarea name="deskripsi" class="form-control"
                                v-model="product.deskripsi_product">{{ product.deskripsi_product }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Product</label>
                            <select class="form-select" name="kategori">

                                <option v-for="kat in kategori" :value="kat.id"
                                    :selected="kat.nama == product.kategori.nama">
                                    {{kat.nama}}
                                </option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Product</label><br>
                            <div v-if="preview== null">
                                <img :src="'/images/'+ product.gambar" class="img-thumbnail" height="300px"
                                    width="300px">
                            </div>
                            <div v-else>
                                <img :src="preview" class="img-thumbnail" height="300px" width="300px">
                            </div>
                            <input type="file" class="form-control" @change="filegambar" name="gambar" id="gambar">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {

    metaInfo: { title: 'Converse | Edit product' },
    data() {
        return {
            product: {
                nama_product: "",
            },
            kategori: {},
            preview: null,
            image: null,
        }
    },
    created() {
        axios.get(`/api/product/edit/${this.$route.params.id}`)
            .then(response => {
                this.product = response.data;
            });
    },
    methods: {
        updateProduct() {
            axios.post(`api/product/update/${this.$route.params.id}`, this.product)
                .then((res) => {
                    this.$router.push({ name: 'product' });
                    console.log(res.message)
                })
                .catch(function (error) {
                    console.log(error)
                });
        },
        showKategori() {
            axios.get('/api/kategori')
                .then(response => {
                    this.kategori = response.data;
                });
        },

        filegambar(event) {
            this.image = event.target.files[0];
            //mengubah file menjadi URL
            this.preview = URL.createObjectURL(this.image);
        }
    },
    mounted() {
        this.showKategori();
    }

}
</script>
