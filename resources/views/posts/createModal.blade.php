<!-- Create post modal -->
<div class="customModal position-fixed top-50 start-50 translate-middle rounded-3 mt-5" id="postModal">
        
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content modalContent">

            <form 
                action="{{ route('posts.store') }}" 
                method="POST" 
                enctype="multipart/form-data">

                @csrf

                <!-- Modal header -->
                <div class="modal-header mx-4 my-3">
                    <h5 class="modal-title">Add Post</h5>
                    <button type="button" onclick="closePostModal()" 
                        class="btn-close">
                    </button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body px-4 my-2">
                    
                    <label for="title">
                        Title <b class="text-danger">*</b>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </label> 

                    <!-- Blog title -->
                    <div class="input-group mt-2 mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="bi bi-card-heading"></i>
                        </span>
                        <input 
                            type="text" 
                            class="postModalValue form-control py-2" 
                            name="title" 
                            value="{{ old('title') }}" 
                            placeholder="Add blog title"
                        >
                    </div>
                    
                    <!-- Blog category wrapper -->
                    <div class="d-flex justify-content-between align-items-center">
                        <label for="category" class="mt-3">
                            Category <b class="text-danger">*</b>
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </label> 
                        
                        <!-- Add category button -->
                        <span>
                            <a href="{{ url('/admin/category') }}" target="_blank" class="addCatBtn btn btn-sm btn-outline-primary">
                                Add category <i class="bi bi-box-arrow-up-right ms-1"></i>
                            </a>
                        </span>
                    </div>

                    <!-- Category select list -->
                    <div class="input-group mt-2 mb-3">
                        <span class="input-group-text rounded-0 rounded-start border-end-0" id="addon-wrapping">
                            <i class="bi bi-list"></i>
                        </span>

                        <select class="form-select py-2" name="category" id="floatingSelect" aria-label="Floating label select example">
                            <option>Select a category</option>
                            {{-- @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if(old('category') == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    
                    <label for="description">
                        Description <b class="text-danger">*</b>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </label> 

                    <!-- Blog description -->
                    <div class="input-group mt-2 mb-3">
                        <span class="input-group-text rounded-0 rounded-start border-end-0" id="addon-wrapping">
                            <i class="bi bi-pencil-square"></i>
                        </span>
                        <textarea class="postModalValue form-control rounded-0 rounded-end decriptionField" name="description" placeholder="Add blog description" id="floatingTextarea2" style="height: 100px">{{ old('description') }}</textarea>
                    </div>
                    
                    <!-- Blog photo -->
                    <label for="photo">
                        Blog photo<b class="text-danger"> * </b>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </label> 

                    <!-- Blog photo upload -->
                    <div class="input-group mt-2 mb-3">
                        <span class="input-group-text rounded-0 rounded-start border-end-0" id="addon-wrapping">
                            <i class="bi bi-card-image"></i>
                        </span>
                        <input type="file" class="postModalValue form-control" name="image" value="{{ old('image') }}" aria-describedby="inputGroupFileAddon01" aria-label="Upload">
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer m-4">
                    <button type="submit" name="insertPostData" class="sendPostBtn btn btn-primary">
                        Post <i class="bi bi-send"></i>
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>

<!-- Keeps Create Post Modal open when there is error after form submission -->
@if ($errors->any())
    <script defer>
        $(document).ready(function(){
            openPostModal();
        });
    </script>
@endif