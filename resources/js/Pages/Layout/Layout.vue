<template>
    <div id="main-wrapper">
        <Header />
        <Sidebar />

        <div class="page-wrapper" style="min-height: 690px;">
            <slot />
        </div>
    </div>       
</template>

<script>
import Header from './Header.vue';
import Sidebar from './Sidebar.vue';

export default {
    components : { Sidebar,Header  }
}
</script>

<style>

</style>