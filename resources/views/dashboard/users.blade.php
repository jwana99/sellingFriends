@extends('layouts.master')

@section('content')
    <div id="users" class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="card-body">
                    <table class="ui very basic collapsing celled table">
                        <thead>
                        <tr>
                            <th>Users</th>
                            <th>The friends they've sold</th>
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
                                22
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
                    user:{}
                },
            },
            methods: {
                getUsers() {
                    axios.get('/api/users').then(response => {
                        this.users = response.data.users
                    })
                }
            }
        })
    </script>
@endpush