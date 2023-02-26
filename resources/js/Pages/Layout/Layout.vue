<template>
    <div id="main-wrapper">
        <Header />
        <Sidebar />

        <main class="content">
            <slot />
        </main>
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