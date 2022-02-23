@extends('layouts.admintemplate')

@section('content')
    @if(!$teams)
        <div class="mx-auto nk-block-head nk-block-head-lg wide-xs">
            <div class="text-center nk-block-head-content">
                <p>
                    <img src="/admin/assets/images/none.png" width="50%">
                </p>
                <h2 class="nk-block-title fw-normal">No team member added yet</h2>
                <div class="nk-block-des">
                    <p class="lead">You can start adding team member by clicking the button below.</p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#add-member"><em class="icon ni ni-plus"></em><span>Start adding</span> </a>
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
                        <p>You have total {{ $teams->count()}} registered.</p>
                    </div>
                </div>
                <!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#add-member">
                                        <em class="icon ni ni-plus"></em><span>Add New Member</span>
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
                @foreach($teams as $team)
                    <!-- .col -->
                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="team">
                                    <div class="text-white team-status bg-success"><em class="icon ni ni-check-thick"></em></div>
                                    <div class="team-options">
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#" data-toggle="modal" data-target="#add-member{{ $team->id }}"><em class="icon ni ni-focus"></em><span>Edit</span></a></li>
                                                    {{-- <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li> --}}
                                                    {{-- <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li> --}}
                                                    <li class="divider"></li>
                                                    {{-- <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li> --}}
                                                    {{-- <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li> --}}
                                                    <li class="text-danger"><a href="#" class="text-danger"  data-toggle="modal" data-target="#subscription-cancel{{ $team->path() }}"><em class="icon ni ni-trash-fill"></em><span>Delete</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-card user-card-s2">
                                        @if(!$team->avatar)
                                            <div class="user-avatar lg bg-info">
                                                <span>{{ $team->initials() }}</span>
                                                <div class="status dot dot-lg dot-success"></div>
                                            </div>
                                        @else
                                            <div class="user-avatar lg">
                                                <img src="{{ $team->userAvatar() }}" alt="">
                                                <div class="status dot dot-lg dot-success"></div>
                                            </div>
                                        @endif
                                        <div class="user-info">
                                            <h6>{{ $team->fullName() }}</h6>
                                            <span class="sub-text">@ {{ $team->handle }}</span>
                                        </div>
                                    </div>
                                    <div class="team-details">
                                        <p>Role: {{ $team->role }}</p>
                                    </div>
                                    <ul class="team-statistics">
                                        {{-- <li><span>213</span><span>Projects</span></li>
                                        <li><span>87.5%</span><span>Performed</span></li>
                                        <li><span>587</span><span>Tasks</span></li> --}}
                                        {{ $team->about }}
                                    </ul>
                                    <div class="team-view">
                                        <a href="#" class="btn btn-round btn-outline-light w-150px" data-toggle="modal" data-target="#add-member{{ $team->id }}"><span>Edit Profile</span></a>
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
            <form method="POST" action="{{ route('adminTeamStore') }}" id="form-submit" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-lg">
                        <h5 class="title">Add New Team Member</h5>
                        <div class="tab-content">
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="first_name">First Name</label>
                                            <input type="text" class="form-control form-control-lg" id="first_name" value="{{ old('first_name') }}" placeholder="Enter First name" name="first_name">
                                            @error('first_name')
                                                <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="last_name">Last Name</label>
                                            <input type="text" class="form-control form-control-lg" id="last_name" value="{{ old('last_name') }}" placeholder="Enter your  Surname" name="last_name">
                                            @error('last_name')
                                                <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="role">Role</label>
                                            <input type="text" class="form-control form-control-lg" id="role" value="{{ old('role') }}" placeholder="Engineer / Product Design" name="role">
                                            @error('role')
                                                <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="handle">Handle</label>
                                            {{-- <input type="text" class="form-control form-control-lg date-picker" id="birth-day"> --}}
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-left">
                                                    <em class="icon ni ni-at"></em>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" id="handle" value="{{ old('handle') }}" placeholder="jerexbambex" name="handle">
                                                @error('handle')
                                                    <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="cf-default-textarea">About</label>
                                            <div class="form-control-wrap">
                                                <textarea class="form-control form-control-lg" id="cf-default-textarea" name="about" placeholder="Short description about the person"></textarea>
                                                @error('about')
                                                    <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <img src="" class="shadow user-avatar xl float-md-left rounded-circle mr-md-4" id="previewImg" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="customFileLabel">Upload Image</label>
                                            <div class="form-control-wrap">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image_upload" onchange="previewFile(this);" name="avatar">
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
                                                        onclick="event.preventDefault(); document.getElementById('form-submit').submit(); return DisplayProgressMessage(this, 'Adding...');"
                                                >Submit</button>
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
    @foreach($teams as $team)
        <div class="modal fade" tabindex="-1" role="dialog" id="add-member{{ $team->id }}">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <form method="POST" action="{{ route('adminTeamUpdate', $team->path()) }}" id="form-submit{{ $team->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-content">
                        <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                        <div class="modal-body modal-body-lg">
                            <h5 class="title">Edit {{ $team->first_name }}'s Record</h5>
                            <div class="tab-content">
                                <div class="tab-pane active" id="personal">
                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="first_name">First Name</label>
                                                <input type="text" class="form-control form-control-lg" id="first_name" value="{{ $team->first_name }}" placeholder="Enter First name" name="first_name">
                                                @error('first_name')
                                                    <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="last_name">Last Name</label>
                                                <input type="text" class="form-control form-control-lg" id="last_name" value="{{ $team->last_name }}" placeholder="Enter your Surname" name="last_name">
                                                @error('last_name')
                                                    <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="role">Role</label>
                                                <input type="text" class="form-control form-control-lg" id="role" value="{{ $team->role }}" placeholder="Engineer / Product Design" name="role">
                                                @error('role')
                                                    <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="handle">Handle</label>
                                                {{-- <input type="text" class="form-control form-control-lg date-picker" id="birth-day"> --}}
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-left">
                                                        <em class="icon ni ni-at"></em>
                                                    </div>
                                                    <input type="text" class="form-control form-control-lg" id="handle" value="{{ $team->handle }}" placeholder="jerexbambex" name="handle">
                                                    @error('handle')
                                                        <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="cf-default-textarea">About</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-lg" id="cf-default-textarea" name="about" placeholder="Short description about the person">{{ $team->about }}</textarea>
                                                    @error('about')
                                                        <span id="fv-full-name-error" class="invalid">{{ $message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <img src="{{ $team->userAvatar() }}" class="shadow user-avatar xl float-md-left rounded-circle mr-md-4" id="previewImg{{ $team->id }}" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="customFileLabel">Upload Image</label>
                                                <div class="form-control-wrap">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image_upload" onchange="previewFile(this);" name="avatar">
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
                                                    <button type="submit" class="btn btn-lg btn-primary" id="submitButton{{ $team->id }}"
                                                            onclick="event.preventDefault(); document.getElementById('form-submit'+{{ $team->id }}).submit(); return DisplayProgressMessage(this, 'Updating...');"
                                                    >Update</button>
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
    @foreach($teams as $team)
        <div class="modal fade show" tabindex="-1" id="subscription-cancel{{ $team->id }}">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                    <div class="modal-body modal-body-md">
                        <h4 class="nk-modal-title title">Removing {{ $team->fullName() }}</h4>
                        {{-- <p><strong>Are you sure you want to remove {{ $team->fullName() }} ?</strong></p> --}}
                        <p class="fs-16px">If you continue, {{ $team->fullName() }} will no longer be in the team.</p>
                        <p class="fs-16px">You can re-add your choice person at any time.</p>
                        <div class="form">
                            <ul class="flex-wrap align-center g-3">
                                <li>
                                    <button class="btn btn-danger" id="submitButton{{ $team->id }}" type="submit"
                                        onclick="event.preventDefault();
                                        document.getElementById('subscription-cancel-confirmed{{ $team->id }}').submit();
                                        return DisplayProgressMessage(this, 'Removing...');">Continue and Remove</button>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-light" data-dismiss="modal">Never mind, don't revoke</a>
                                </li>
                            </ul>
                            <form method="POST" action="{{ route('adminTeamDelete', $team->id) }}" id="subscription-cancel-confirmed{{ $team->id }}">
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
