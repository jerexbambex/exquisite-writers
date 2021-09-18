@extends('layouts.admintemplate')

@section('content')
    <script src="https://cdn.tiny.cloud/1/skfrbrhb18mdqaudmp4i5ubffljrxf9x77bndty9vvw0unjl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title page-title font-circular-regular">Add new post</h5>
               {{-- <div class="nk-block-des text-soft">
                   <p>You have total of {{ $blogs->count()}} posts.</p>
               </div> --}}
            </div>
            <!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li>
                                <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">
                                    <em class="icon ni ni-chevron-left-c"></em><span>Back</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- .toggle-wrap -->
            </div>
            <!-- .nk-block-head-content -->
        </div>
        <!-- .nk-block-between -->
    </div>
    <!-- .nk-block-head -->

    <div class="nk-block">
        <div class="row g-gs">
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    @if (Session::has('success'))
                        <div class="alert alert-pro alert-success alert-dismissible" role="alert">
                            <div class="alert-text">
                                <h6>Success</h6>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                            <button class="close" data-dismiss="alert"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-fill alert-icon alert-dismissible" role="alert">
                            <em class="icon ni ni-cross-circle"></em>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button class="close" data-dismiss="alert"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.blog.store') }}" id="form-submit" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="form-control-group">
                                        <input type="text" class="form-control form-control-lg" name="title" value="{{ old('title') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label">Description <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="form-control-group">
                                        <input type="text" class="form-control form-control-lg" name="description" placeholder="Short Description" value="{{ old('description') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 col-md-12">
                                <img src="{{ old('avatar') }}" class="shadow float-md-left avatar-medium img-thumbnail mr-md-4" id="previewImg" alt=""><br>
                                @error('avatar')
                                <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                @enderror

                                <div class="mt-3 mt-md-4 mt-sm-0 font-montserrat">
                                    <input type="file" class="d-none" name="avatar" id="image_upload" onchange="previewFile(this);"/>
                                    <a href="javascript:void(0)" class="mt-2 btn btn-outline-info btn-sm btn-brand" onclick="$('#image_upload').click()">Change Picture</a>
                                </div>
                            </div>

                            <div class="mt-3 col-md-12">
                        <textarea rows="20" name="body" placeholder="Blog message">
                            {{ old('body') }}
                        </textarea>
                            </div>
                            <div class="mt-5 col-12">
                                <button type="submit" class="btn btn-lg btn-primary" id="submitButton"
                                        onclick="event.preventDefault(); document.getElementById('form-submit').submit(); return DisplayProgressMessage(this, 'Publishing...');"
                                >Publish post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- .card-preview -->
        </div>
    </div>
    <!-- .nk-block -->

    <script>
        function DisplayProgressMessage(ctl, msg) {
            $(ctl).prop("disabled", true);
            $(ctl).html("<div class='mr-3 spinner-grow spinner-grow-sm' role='status'><span class='sr-only'>Loading...</span></div>" + msg);
            return true;
        }
    </script>

    <script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];

            if(file){
                var reader = new FileReader();

                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
@endsection
