<template>
    <v-container>
        <v-form @submit.prevent="login">
            <v-text-field
                    v-model="form.email"
                    v-validate="'required|email'"
                    label="E-Mail"
                    data-vv-name="name"
                    type="email"
                    required
            ></v-text-field>
            <v-text-field
                    v-model="form.password"
                    v-validate="'required'"
                    label="Password"
                    data-vv-name="password"
                    type="password"
                    required
            ></v-text-field>
            <v-btn
            type="submit"
            color="green"
            >Login</v-btn>
        </v-form>
    </v-container>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    email: null,
                    password: null
                }
            }
        },
        methods:{
            login(){
                axios.post('/api/auth/login',this.form).then(res=>console.log(res.data)).catch(error=>console.log(error.response.data))
                
            }
        }
    }


</script>

<style scoped>

</style>