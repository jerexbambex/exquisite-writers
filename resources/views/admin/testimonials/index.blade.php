@extends('layouts.admintemplate')

@section('content')
@if(!count($testimonials))
<div class="mx-auto nk-block-head nk-block-head-lg wide-xs">
    <div class="text-center nk-block-head-content">
        <p>
            <img src="/assets/admin/assets/images/none.png" width="50%">
        </p>
        <h2 class="nk-block-title fw-normal">No testimonial added yet</h2>
        <div class="nk-block-des">
            <p class="lead">You can start adding testimonial by clicking the button below.</p>
            <p class="mt-5">
                <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#add-member"><em
                        class="icon ni ni-plus"></em><span>Start adding</span> </a>
            </p>
        </div>
    </div>
</div>
@else
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Teams Card</h3>
            <div class="nk-block-des text-soft">
                <p>You have total {{ $testimonials->count() }} registered.</p>
            </div>
        </div>
        <!-- .nk-block-head-content -->
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                        class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#add-member">
                                <em class="icon ni ni-plus"></em><span>Add New testimonial</span>
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
        @foreach($testimonials as $testimonial)
            {{-- <div class="col-sm-4">
                <div class="card bg-light">
                    <div class="card-header">Header</div>
                    <div class="card-inner">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div> --}}

            <!-- .col -->
            <div class="col-sm-6 col-lg-4 col-xxl-3">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="team">
                            {{-- <div class="text-white team-status bg-success"><em class="icon ni ni-check-thick"></em></div> --}}
                            <div class="team-options">
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                        data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#" data-toggle="modal"
                                                    data-target="#add-member{{ $testimonial->id }}"><em
                                                        class="icon ni ni-focus"></em><span>Edit</span></a></li>
                                            {{-- <li><a href="#"><em class="icon ni ni-eye"></em><span>View
                                                        Details</span></a></li> --}}
                                            {{-- <li><a href="#"><em class="icon ni ni-mail"></em><span>Send
                                                        Email</span></a></li> --}}
                                            <li class="divider"></li>
                                            {{-- <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset
                                                        Pass</span></a></li> --}}
                                            {{-- <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset
                                                        2FA</span></a></li> --}}
                                            <li class="text-danger"><a href="#" class="text-danger" data-toggle="modal"
                                                    data-target="#subscription-cancel{{ $testimonial->id }}"><em
                                                        class="icon ni ni-trash-fill"></em><span>Delete</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="user-card user-card-s2">
                                <div class="user-avatar lg">
                                    <img src="{{ $testimonial->userAvatar() }}" alt="">
                                    <div class="status dot dot-lg dot-success"></div>
                                </div>
                                <div class="user-info">
                                    <h6>{{ $testimonial->name }}</h6>
                                    <span class="sub-text">Title: {{ $testimonial->title }}</span>
                                </div>
                            </div>
                            {{-- <div class="team-details">
                                <p>Role: {{ $testimonial->role }}</p>
                            </div> --}}
                            <ul class="team-statistics">
                                {{-- <li><span>213</span><span>Projects</span></li>
                                <li><span>87.5%</span><span>Performed</span></li>
                                <li><span>587</span><span>Tasks</span></li> --}}
                                {{ Str::limit($testimonial->body, 20) }}
                            </ul>
                            <div class="team-view">
                                <a href="#" class="btn btn-round btn-outline-light w-150px" data-toggle="modal"
                                    data-target="#add-member{{ $testimonial->id }}"><span>Edit</span></a>
                            </div>
                        </div>
                        <!-- .team -->
                    </div>
                    <!-- .card-inner -->
                </div>
                <!-- .card -->
            </div>
        @endforeach
    </div>
</div>
<!-- .nk-block -->
@endif

<!-- Add new Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="add-member">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <form method="POST" action="{{ route('adminTestimonialStore') }}" id="form-submit"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Add New Testimonial</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Fullname</label>
                                        <input type="text" class="form-control form-control-lg" id="name"
                                            value="{{ old('name') }}" placeholder="Firstname Lastname" name="name">
                                        @error('name')
                                        <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" class="form-control form-control-lg" id="title"
                                            value="{{ old('title') }}" placeholder="Dr, Mr, Mrs, Engineer, e.t.c"
                                            name="title">
                                        @error('title')
                                        <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="cf-default-textarea">Body</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control form-control-lg" id="cf-default-textarea"
                                                name="body" placeholder="Short story by the person"></textarea>
                                            @error('body')
                                            <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <img src="" class="shadow user-avatar xl float-md-left rounded-circle mr-md-4"
                                        id="previewImg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="customFileLabel">Upload Image</label>
                                        <div class="form-control-wrap">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image_upload"
                                                    onchange="previewFile(this);" name="avatar">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            @error('avatar')
                                            <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="flex-wrap align-center flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            {{-- <a href="#" class="btn btn-lg btn-primary">Update Profile</a> --}}
                                            <button type="submit" class="btn btn-lg btn-primary" id="submitButton"
                                                onclick="event.preventDefault(); document.getElementById('form-submit').submit(); return DisplayProgressMessage(this, 'Adding...');">Submit</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </form>
    </div><!-- .modal-dialog -->
</div><!-- .modal -->

<!-- Update Modal -->
@foreach($testimonials as $testimonial)
<div class="modal fade" tabindex="-1" role="dialog" id="add-member{{ $testimonial->id }}">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <form method="POST" action="{{ route('adminTestimonialUpdate', $testimonial->id) }}"
            id="form-submit{{ $testimonial->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Record</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Fullname</label>
                                        <input type="text" class="form-control form-control-lg" id="name"
                                            value="{{ $testimonial->name }}" placeholder="Firstname Lastname"
                                            name="name">
                                        @error('name')
                                        <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" class="form-control form-control-lg" id="title"
                                            value="{{ $testimonial->title }}" placeholder="Engineer, Mrs, Pst"
                                            name="title">
                                        @error('title')
                                        <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="cf-default-textarea">Body</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control form-control-lg" id="cf-default-textarea"
                                                name="body"
                                                placeholder="Short story by the person">{{ $testimonial->body }}</textarea>
                                            @error('body')
                                            <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <img src="{{ $testimonial->userAvatar() }}"
                                        class="shadow user-avatar xl float-md-left rounded-circle mr-md-4"
                                        id="previewImg{{ $testimonial->id }}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="customFileLabel">Upload Image</label>
                                        <div class="form-control-wrap">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image_upload"
                                                    onchange="previewFile(this);" name="avatar">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            @error('avatar')
                                            <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="flex-wrap align-center flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            {{-- <a href="#" class="btn btn-lg btn-primary">Update Profile</a> --}}
                                            <button type="submit" class="btn btn-lg btn-primary"
                                                id="submitButton{{ $testimonial->id }}"
                                                onclick="event.preventDefault(); document.getElementById('form-submit'+{{ $testimonial->id }}).submit(); return DisplayProgressMessage(this, 'Updating...');">Update</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </form>
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
@endforeach

<!-- Delete Modal -->
@foreach($testimonials as $testimonial)
<div class="modal fade show" tabindex="-1" id="subscription-cancel{{ $testimonial->id }}">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
            <div class="modal-body modal-body-md">
                <h4 class="nk-modal-title title">Removing {{ $testimonial->name }}</h4>
                {{-- <p><strong>Are you sure you want to remove {{ $testimonial->name }} ?</strong></p> --}}
                <p class="fs-16px">If you continue, {{ $testimonial->name }} will no longer be in the team.</p>
                <p class="fs-16px">You can re-add your choice person at any time.</p>
                <div class="form">
                    <ul class="flex-wrap align-center g-3">
                        <li>
                            <button class="btn btn-danger" id="submitButton{{ $testimonial->id }}" type="submit"
                                onclick="event.preventDefault();
                                        document.getElementById('subscription-cancel-confirmed{{ $testimonial->id }}').submit();
                                        return DisplayProgressMessage(this, 'Removing...');">Continue and
                                Remove</button>
                        </li>
                        <li>
                            <a href="#" class="btn btn-light" data-dismiss="modal">Never mind, don't revoke</a>
                        </li>
                    </ul>
                    <form method="POST" action="{{ route('adminTestimonialDelete', $testimonial->id) }}"
                        id="subscription-cancel-confirmed{{ $testimonial->id }}">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div>
@endforeach


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
@endsection
