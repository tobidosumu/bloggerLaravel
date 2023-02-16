<div class="infoModal modal fade" id="moreInfoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body d-flex flex-column justify-content-center align-items-center text-center">

                <div class="modalLinksWrapper"> 

                    <form
                        action="/posts/{{ $post->slug }}"
                        method="POST"
                    >
                        @csrf
                        @method('delete')

                        <button type="submit" name="deletePost">
                            <li class="nthChild rounded-top">Delete post</li>
                        </button>

                    </form>
                    
                    <!-- Post header three dots popup modal -->
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <a  href="/posts/{{ $post->slug }}">

                            <!-- Post edit button -->
                            <li class="nthChild">
                                Edit post
                            </li>
                            
                        </a>
                    @endif

                    <a href="/posts/{{ $post->slug }}"><li>Go to post</li></a>
                    <a href="#"><li>Add to favorites</li></a>
                    <a href="#"><li>Copy link</li></a>
                    <a href="#" data-bs-dismiss="modal"><li class="lastChild rounded-bottom">Cancel</li></a>
                </div>

            </div>
        </div>
    </div>
</div>