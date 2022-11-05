<template>
    <div class="container product">
        <div class="row">
            <div class="col-md-7">
                <div class="form">
                        <router-link :to="{   name: 'product'   }">
                            Lihat semua product
                        </router-link>
                    <h1>Tambah Product </h1>
                    <form @submit.prevent="store" method="post" enctype="multipart/form-data" id="form">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Product</label>
                            <input type="text" class="form-control" v-model="products.nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Product</label>
                            <input type="number" class="form-control" v-model="products.harga" name="harga">
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok Product</label>
                            <input type="number" class="form-control" v-model="products.stok" nama="stok">
                        </div>
                        <div class="mb-3">
                            <label for="terjual" class="form-label">Terjual Product</label>
                            <input type="number" class="form-control" v-model="products.terjual" nama="terjual">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Product</label>
                            <textarea v-model="products.deskripsi" class="form-control" name="deskripsi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Product</label>
                            <select class="form-select" v-model="products.kategori" name="kategori"
                                aria-label="Default select example">
                                <option selected>Pilih Kategori</option>
                                <option v-for="k in kategori" :key="k.id" :value="`${k.id}`">{{   k.nama   }}</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Product</label>
                            <div v-if="preview == null">
                                <img :src="preview" v-bind:style="{   'display': 'none'   }">
                            </div>
                            <div v-else>
                                <img :src="preview" class="img-thumbnail" height="300px" width="300px">
                            </div>
                            <input type="file" class="form-control" @change="filegambar" name="gambar" id="gambar">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form">
                    <router-link class="mt-3" :to="{ name: 'kategori-show' }">
                        Lihat semua kategori
                    </router-link>
                    <h1>Tambah kategori </h1>
                    <form @submit.prevent="storeKategori">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama kategory</label>
                            <input type="text" v-model="kategori.nama" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="mb-3"><button type="submit" class="btn btn-primary ">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    metaInfo: { title: 'Converse | Dashboard' },
    data() {
        return {

            kategori: [],
            products: {},
            preview: null,
            image: null,
        }
    },

    methods: {
        showKategori() {
            axios.get('api/kategori')
                .then(response => {
                    this.kategori = response.data;
                });
        },

        filegambar(event) {
            // console.log('gambar')
            this.image = event.target.files[0];
            //mengubah file menjadi URL
            this.preview = URL.createObjectURL(this.image);
        },

        store() {
            const form = document.getElementById('form');

            let formData = new FormData()
            formData.append('gambar', this.image)

            _.each(this.products, (value, key) => {
                formData.append(key, value)

            })
            axios.post('/api/add-product', formData)
                .then(response => {
                    event.preventDefault();
                    form.reset();
                })
                .catch(error => {
                    console.log(error)
                })
        },
        storeKategori() {
            const form = document.getElementById('form');
            let formData = new FormData()
            formData.append('nama', this.kategori.nama)

            axios.post('/api/add-kategori', formData)
                .then(response => {
                    form.reset();
                    window.location.reload(true);
                })
                .catch(error => console.log(error))
        },


    },

    mounted() {
        this.showKategori();
    }
}
</script>
