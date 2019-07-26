import Token from './Token'
import AppStorage from './AppStorage'

class User {
    login(data){
        axios.post('/api/auth/login',data).then(res => {this.responseAfterLogin(res);
        this.$router.push({name:'forum'})
        }).catch(error=>console.log(error.response.data))
    }
        responseAfterLogin(res){
        const access_token = res.data.access_token
        const username = res.data.user
        if(Token.isValid(access_token)){
            AppStorage.store(username,access_token)
            window.location = '/forum'
        }
    }

    hasToken(){
        const stored_token = AppStorage.getToken()
        if (stored_token){
            return  Token.isValid(stored_token) ? true : false
        }
        return false
    }

    loggedIn(){
        return this.hasToken()

    }

    logout(){
        AppStorage.clear()
        window.location = '/login'
    }
    name(){
        if (this.loggedIn()){
            return AppStorage.getUser()
        }
    }

    id(){
        if (this.loggedIn()){
            const payload = Token.payload(AppStorage.getToken())
            return payload.sub

        }
    }
}

export default User = new User()