<head>

    <link href="/css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div id="app">
    <users></users>
</div>
<template id="users-template">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Creation Date</th>
            </tr>
        </thead>


        <tbody>


                 <th>@{{ users.upcnt }}</th>
                 <td>@{{ users.downcnt }}</td>
                 <td>a</td>
                 <td>b</td>

        </tbody>
    </table>
</template>



        <script src="https://unpkg.com/vue/dist/vue.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.2/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

        <script>

            Vue.component('users', {

                    template: '#users-template',

                data: function () {
                    return {
                        users: []
                    }
                },

                    created: function () {
                        this.getUsers();
                    },

                    methods: {

                        getUsers: function () {


                            $.getJSON("{{ route ('reals') }}", function(users) {

                                this.users = users;

                            }.bind(this));

                            setTimeout(this.getUsers, 1000);


                        }
                    }

                });

            new Vue({
                el: '#app',
            });
        </script>

</body>