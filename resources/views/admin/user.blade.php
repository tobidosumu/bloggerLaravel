@extends('admin.admin_layouts.base_admin')

<!-- Style/title for index page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/adminUser.css') }}">
    <title>{{ 'Blogger | User' }}</title>
@endsection

@section('content')

    <div class="dashboardContainer pt-5 px-5 p-4">

        <h2>User</h2>

        <div class="tableContainer">

            <table class="table table-hover">
    
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Joined</th>
                        <th scope="col">Revenue(₦)</th>
                        <th scope="col">
                            <select name="contact">
                                <option value="email">Email</option>
                                <option value="phone">Phone</option>
                            </select>
                        </th>
                        <th scope="col">Store</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
    
                <tbody>
    
                    <tr>
                        <th scope="row">1</th>
                        <td>Mojisola Badmus</td>
                        <td>2023-02-09</td>
                        <td>240,000.00</td>
                        <td>mojisola@gmail.com</td>
                        <td><a href="#">Unusual merch <i class="bi bi-box-arrow-up-right"></i></a></td>
                        <td>
                            <!-- This button opens the UPDATE/EDIT form when clicked -->
                            <a href="" class="me-3">
                                <i class="bi bi-pencil-square"></i>
                            </a>
    
                            <!-- This button deletes a category row -->
                            <a href="">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
    
                </tbody>
    
            </table>
        </div>

    </div>

@endsection