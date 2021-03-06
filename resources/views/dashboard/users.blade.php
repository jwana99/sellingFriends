@extends('layouts.master')

@section('content')
    <div id="users" class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="card-body">

                    <table class="ui very basic table">
                        <thead>
                        <tr>
                            <th><h5>Users</h5></th>
                            <th><h5>User ID</h5></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="user in users">
                            <td>
                                <h4 class="ui image header">
                                    <img :src="user.avatar" class="ui mini rounded image">
                                    <div class="content">
                                        @{{user.name}}
                                    </div>
                                </h4>
                            </td>
                            <td>
                                @{{ user.id }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        new Vue({
            el: "#users",
            data: {
                users: {
                    user: {}
                },
            },
            methods: {
                getUsers() {
                    axios.get('/api/users').then(response => {
                        this.users = response.data.users
                    })
                }
            },
            mounted() {
                this.getUsers()
            }
        })
    </script>
@endpush