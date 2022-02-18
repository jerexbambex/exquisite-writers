@extends('layouts.admintemplate')

@section('content')
    @if (!$blogs->count())
        <div class="mx-auto nk-block-head nk-block-head-lg wide-xs">
            <div class="text-center nk-block-head-content">
                <p>
                    <img src="/admin/assets/images/none.png" width="50%">
                </p>
                <h2 class="nk-block-title fw-normal">No blog post added yet</h2>
                <div class="nk-block-des">
                    <p class="lead">You can start adding new posts by clicking the button below.</p>
                    <p class="mt-5">
                        <a href="{{ route('adminBlogCreate') }}" class="btn btn-dark"><em class="icon ni ni-plus"></em><span>Start adding</span> </a>
                    </p>
                </div>
            </div>
        </div>
    @else
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title font-circular-regular">Blog Post</h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total of {{ $blogs->count() }} posts.</p>
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
                                    <a href="{{ route('adminBlogCreate') }}" class="btn btn-primary">
                                        <em class="icon ni ni-plus"></em><span>Add New Post</span>
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
                @foreach ($blogs as $blog)
                    <!-- .col -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <div class="project">
                                    <div class="project-head">
                                        <a href="{{ route('adminBlogShow', $blog->path()) }}" class="project-title">
                                            <div class="project-info">
                                                <h6 class="title">{{ $blog->title }}</h6>
                                                <ul class="kanban-item-tags">
                                                    @foreach ($blog->categories as $category)
                                                        <li>
                                                            <span class="badge badge-dark">{{ $category->name }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1"
                                                data-toggle="dropdown" aria-expanded="false"><em
                                                    class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ route('adminBlogShow', $blog->path()) }}"><em
                                                                class="icon ni ni-eye"></em><span>View</span></a></li>
                                                    <li><a href="{{ route('adminBlogEdit', $blog->id) }}"><em class="icon ni ni-edit"></em><span>Edit</span></a>
                                                    </li>
                                                    <li><a href="#" class="text-danger" data-toggle="modal"
                                                            data-target="#subscription-cancel{{ $blog->id }}"><em
                                                                class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-details">
                                        <p>{!! nl2br(Str::limit($blog->body), 100) !!}</p>
                                    </div>
                                    <div class="project-progress">
                                        <div class="project-progress-details">
                                            <div class="project-progress-task"><em
                                                    class="icon ni ni-check-round-cut"></em><span>{{ $blog->updated_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <!-- .nk-block -->
    @endif

    <!-- Delete Modal -->
    @foreach ($blogs as $blog)
        <div class="modal fade show" tabindex="-1" id="subscription-cancel{{ $blog->id }}">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <h5 class="fs-26px">Are you sure you want to delete this blog post?</h5>
                        <br><br><br>
                        <div class="form">
                            <ul class="flex-wrap align-center g-3">
                                <li>
                                    <button class="btn btn-danger" id="submitButton{{ $blog->id }}" type="submit"
                                        onclick="event.preventDefault();
                                                    document.getElementById('subscription-cancel-confirmed{{ $blog->id }}').submit();
                                                    return DisplayProgressMessage(this, 'Removing...');">
                                        Continue and Remove
                                    </button>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-light" data-dismiss="modal">Never mind, don't delete</a>
                                </li>
                            </ul>
                            <form method="POST" action="{{ route('adminBlogDelete', $blog->id) }}"
                                id="subscription-cancel-confirmed{{ $blog->id }}">
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
            $(ctl).html(
                "<div class='mr-3 spinner-grow spinner-grow-sm' role='status'><span class='sr-only'>Loading...</span></div>" +
                msg);
            return true;
        }
    </script>

    <script>
        function previewFile(input) {
            var file = $("input[type=file]").get(0).files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function() {
                    $("#previewImg").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
