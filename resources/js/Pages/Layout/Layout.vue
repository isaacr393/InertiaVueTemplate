<template>
    <div id="main-wrapper">
        <Header />
        <Topsidebar />

        <div class="page-wrapper" style="min-height: 690px;">
            <slot />
        </div>
    </div>       
</template>

<script>
import Header from './Header.vue';
import Sidebar from './Sidebar.vue'
import Topsidebar from './Topsidebar.vue';

export default {
    components : { Sidebar,Header,Topsidebar  }
}
</script>

<style>

</style>