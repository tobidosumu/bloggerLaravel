@extends('layouts.base')

<!-- Style/title for categories page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/categories.css') }}">
    <title>{{ 'Blogger | Categories' }}</title>
@endsection

<!-- Categories page contents -->
@section('content')

    <!-- Categories page container/wrapper -->
    <section class="blogContents d-flex justify-content-between">

        <section class="mainContentContainer">   

            <table class="table table-striped table-hover">

                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td>Travel</td>
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

        </section>

    </section>

@endsection

<!-- Create category modal button -->
<button type="button" class="postBtn border-0" data-bs-toggle="modal" data-bs-target="#createModal">
    <i class="bi bi-plus-circle"></i>
</button>

<!-- Create category Modal -->
