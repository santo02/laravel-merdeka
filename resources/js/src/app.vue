<template>
    <div class="navbar-wrapper">
        <navbar />
        <router-view></router-view>
    </div>
</template>
<script>
import Navbar from './component/navbar.vue'

export default {
    name: 'app',
    components: { Navbar },
    metaInfo: { title: 'Converse | Homepage' }

}
</script>
