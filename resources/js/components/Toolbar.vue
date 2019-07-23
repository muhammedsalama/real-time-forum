<template>
    <v-toolbar>
        <v-toolbar-side-icon></v-toolbar-side-icon>
        <v-toolbar-title>Cluster</v-toolbar-title>
        <v-spacer></v-spacer>
        <div class="hidden-sm-and-down">
            <v-btn flat>Forum</v-btn>
            <v-btn flat>Ask a question</v-btn>
            <v-btn flat>Categories</v-btn>
            <router-link to="/login"><v-btn flat>Login</v-btn></router-link>
        </div>
    </v-toolbar>

</template>

<script>
    export default {
        name: "Toolbar"
    }
</script>

<style scoped>

</style>