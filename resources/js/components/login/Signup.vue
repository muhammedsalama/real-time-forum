<template>
    <v-container>
        <v-form @submit.prevent="signup">
            <v-text-field
                    v-model="form.name"
                    label="Name"
                    type="text"
                    required
            ></v-text-field>


            <v-text-field
                    v-model="form.email"
                    label="E-Mail"
                    type="email"
                    required
            ></v-text-field>


            <v-text-field
                    v-model="form.password"
                    label="Password"
                    type="password"
                    required
            ></v-text-field>

            <v-btn
                    type="submit"
                    color="green"
            >Sign Up
            </v-btn>
            <router-link to="/login">
                <v-btn
                >Login
                </v-btn>
            </router-link>
        </v-form>
    </v-container>

</template>

<script>

    export default {

        data() {
            return {
                form: {
                    name: null,
                    email: null,
                    password: null,
                },
                errors: {}
            }
        },


        created() {
            if (User.loggedIn()) {
                this.$router.push({name: 'forum'})
            }
        },

        methods: {
            signup() {
                axios.post('/api/auth/signup', this.form).then(res => {
                    User.responseAfterLogin(res);
                    this.$router.push({name: 'forum'})
                }).catch(error => this.errors = error.response.data.errors)
            }
        }

    }
</script>

<style scoped>

</style>