        @extends('layouts.app')
        @section('content')
        <div class="container-fluid ">
            <div class="row">
        <div class="col-md-6">
        <div class="card mb-5">
        <div class="card-header py-3 border-bottom-primary">
        <h6 class="m-0 font-weight-bold text-primary">Add Post</h6>
        </div>
        <div class="card-body" >
        <form method="post" action="{{ action('PostsController@store') }}" >
            @csrf

                <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" name="title" id="title" value=""
                    placeholder="Post title" type="text">
                </div>
                                
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" value="" id="message"class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        @endsection

        @section('js')
        <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
            .create( document.querySelector( 'message' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
        </script>
        @endsection