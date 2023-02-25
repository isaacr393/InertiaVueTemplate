<template>
    <body class="fix-header fix-sidebar card-no-border">
        <div id="main-wrapper">
            <Header />
            <Sidebar />
        </div>       
    </body>
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