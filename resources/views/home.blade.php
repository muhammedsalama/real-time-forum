<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cluster</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div id="app">
    <v-app>
         <v-toolbar>
            {{--<v-toolbar-side-icon></v-toolbar-side-icon>--}}
            <v-toolbar-title>Cluster</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-sm-and-down">
                <v-btn flat>Forum</v-btn>
                <v-btn flat>Ask a question</v-btn>
                <v-btn flat>Categories</v-btn>
                <v-btn flat>Login</v-btn>
            </v-toolbar-items>
        </v-toolbar>


        <v-content>
            <v-container>
                <div>
                    <v-alert
                            :value="true"
                            type="success"
                    >
                        Congratulations!
                    </v-alert>

                    <v-alert
                            :value="true"
                            type="info"
                    >
                        Getting Started
                    </v-alert>

                    <v-alert
                            :value="true"
                            type="warning"
                    >
                        Watch out!!
                    </v-alert>

                    <v-alert
                            :value="true"
                            type="error"
                    >
                        ERROR!!
                    </v-alert>
                </div>

                <v-footer class="pa-3">
                    <v-spacer></v-spacer>
                    <div>&copy; Cluster.com</div>

                </v-footer>

            </v-container>
        </v-content>
    </v-app>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>