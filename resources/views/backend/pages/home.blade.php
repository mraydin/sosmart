@extends('backend.layouts.app')




@section('content')
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">SoSmart Admin Page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                    <a href="{{ route('itemPost.index') }}" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Smart Tag Setup</a>
                    <ol class="breadcrumb">
                        <li><a href="#">SmartTag</a></li>
                        <li class="active">Dashboard 1</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- Different data widgets -->
            <!-- ============================================================== -->
            <!-- .row -->
            <div id="app">
                <users></users>
            </div>

            <template id="users-template">
            <div id="app" class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div  class="white-box analytics-info">
                        <h3 class="box-title">Giriş</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                            <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">@{{ users.upcnt }}</span></li>
                        </ul>
                    </div>
                </div>
                <div id="app" class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Çıkış</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                            <li class="text-right"><i class="ti-arrow-down text-purple"></i> <span class="counter text-purple">@{{ users.downcnt }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Toplam</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash3"></div>
                            </li>
                            <li class="text-right"><i class="text-info"></i> <span class="counter text-info">@{{ users.total }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Bi Önceki Güne Oran</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash4"></div>
                            </li>
                            <li class="text-right"><i class=" text-danger"></i> <span class="text-danger">18%</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            </template>
            <!--/.row -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; SoSmart </footer>
    </div>

    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->

@endsection

@section('js')
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


@stop

