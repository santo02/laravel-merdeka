<template>
    <div class="div">
        <div id="slider">
            <slider />
        </div>
        <div class="trending mb-4 mt-4" id="trending">
            <card-trending />
        </div>
        <div class="sp1 m-3 shadow-lg">
            <div class="row">
                <div class="col-lg-6">
                    <img :src="`Image/product3.jpg`" class="img_sp" alt="" srcset="">
                </div>
                <div class="col-lg-6">
                    <div class="text-sp1">
                        <p>Best Ever <br> Made Better</p>
                        <h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet temporibus dolore magnam
                            dolor
                            modi nisi quae reprehenderit, ab debitis quaerat.</h6>
                        <button class="button_black">SHOP NOW</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="Pria mb-4" id="pria">
            <card-pria />
        </div>
        <div class="sp1 m-3 shadow-lg">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-sp1">
                        <p>DIGITAL<br>GRAPHICS</p>
                        <h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet temporibus dolore magnam
                            dolor
                            modi nisi quae reprehenderit, ab debitis quaerat.</h6>
                        <button class="button_black">SHOP NOW</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img :src="`Image/product4.jpg`" class="img_sp" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="wanita mb-4 " id="wanita">
            <card-wanita />
        </div>
    </div>
</template>

<script>
import slider from '../component/slider.vue'
import pria from '../component/card-pria.vue'
import wanita from '../component/card-wanita.vue'
import trending from '../component/card-trending.vue'
// import home from '../pages/home.vue'

export default {
    name: 'home',
    components: {
        'slider': slider,
        'card-pria': pria,
        'card-wanita': wanita,
        'card-trending': trending
     }
}
</script>
