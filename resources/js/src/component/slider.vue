<template>
    <div class="slider-wrapp">
        <div id="carouselExampleCaptions" class="carousel slide" style="height: 50%" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height: 50%">
                <div class="carousel-item active">
                    <img :src="`Image/${gambar1}`" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img :src="`Image/${gambar2}`" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img :src="`Image/${gambar3}`" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            gambar1: "pict1.jpg",
            gambar2: "pict2.jpg",
            gambar3: "pict3.jpg"
        };
    },
    name: 'slider'
}
</script>
