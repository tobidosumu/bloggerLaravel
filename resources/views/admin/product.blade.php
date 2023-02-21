@extends('admin.admin_layouts.base_admin')

<!-- Style/title for index page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/adminProduct.css') }}">
    <title>{{ 'Blogger | Product' }}</title>
@endsection

@section('content')

    <div class="dashboardContainer pt-5 px-5 p-4">

        <div class="dashboardCaption d-flex justify-content-between align-items-center">
            <h2>Product</h2>
            
            <button type="submit" class="rounded-5">
                <i class="bi bi-plus-circle me-2"></i>
                Add Product
            </button>
        </div>

        <div class="tableContainer">

            <table class="table table-hover">
    
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">
                            <select name="price">
                                <option selected>Price(₦)</option>
                                <option value="created_at">Unit Price</option>
                                <option value="updated_at">Total Price</option>
                            </select>
                        </th>
                        <th scope="col">Qty</th>
                        <th scope="col">Seller</th>
                        <th scope="col">
                            <select name="contact">
                                <option value="created_at">Created</option>
                                <option value="updated_at">Modified</option>
                            </select>
                        </th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
    
                <tbody>
    
                    <tr>
                        <th scope="row">1</th>
                        <td>ADIDAS VS PACE LIFESTYLE</td>
                        <td>29,978</td>
                        <td>400</td>
                        <td>Unusual merch</td>
                        <td>2023-02-09</td>
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