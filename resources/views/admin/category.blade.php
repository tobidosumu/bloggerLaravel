@extends('admin.admin_layouts.base_admin')

<!-- Style/title for index page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/adminCategory.css') }}">
    <title>{{ 'Blogger | Category' }}</title>
@endsection

@section('content')

    <div class="dashboardContainer pt-5 px-5 p-4">

        <div class="dashboardCaption d-flex justify-content-between align-items-center">
            <h2>Category</h2>
            
            <button type="submit" onclick="openAddCategoryModal()" class="rounded-5">
                <i class="bi bi-plus-circle me-2"></i>
                Add Category
            </button>
        </div>

        <div class="tableContainer">

            <table class="table table-hover">
    
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Added by</th>
                        <th scope="col">
                            <select name="contact">
                                <option value="created_at">Created</option>
                                <option value="updated_at">Modified</option>
                            </select>
                        </th>
                        <th scope="col">Post</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
    
                <tbody>
    
                    <tr>
                        <th scope="row">1</th>
                        <td>Travel</td>
                        <td>Mojisola Badmus</td>
                        <td>2023-02-09</td>
                        <td>2</td>
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

@include('admin.admin_modals.addCategoryModal')

<!-- Black background behind Post Modal -->
<div id="blackModalBackground" onclick="closeAddCategoryModal()" class="blackModalBackground"> 

</div>