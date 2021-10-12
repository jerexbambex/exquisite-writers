@extends('layouts.admintemplate')

@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">All registered Categories</h3>
                <div class="nk-block-des text-soft">
                    {{-- <p>{{ Auth::user()->fullName() }}</p> --}}
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                            class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li>
                                {{-- <a href="#"
                                    class="btn btn-white btn-dim btn-outline-primary">
                                    <em class="icon ni ni-download-cloud"></em><span>Export</span>
                                </a> --}}
                            </li>
                            <li>
                                {{-- <a href="#"
                                    class="btn btn-white btn-dim btn-outline-primary">
                                    <em class="icon ni ni-reports"></em><span>Reports</span>
                                </a> --}}
                            </li>
                            <li class="nk-block-tools-opt">
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary"
                                        data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#add-set">
                                                    <em class="icon ni ni-user-add-fill"></em><span>Add Category</span>
                                                </a>
                                            </li>
                                            {{-- <li><a href="#"><em class="icon ni ni-coin-alt-fill"></em><span>Add
                                                        Order</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-note-add-fill-c"></em><span>Add
                                                        Page</span></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .toggle-expand-content -->
                </div><!-- .toggle-wrap -->
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->

    <div class="nk-block nk-block-lg">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                @if (Session::has('message'))
                    <div class="alert alert-success alert-icon alert-dismissible" role="alert">
                        <em class="icon ni ni-check-circle"></em>
                        {{ Session::get('message') }}
                        <button class="close" data-dismiss="alert"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-fill alert-icon alert-dismissible" role="alert">
                        <em class="icon ni ni-cross-circle"></em>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>* {{ $error }}</li>
                            @endforeach
                        </ul>
                        <button class="close" data-dismiss="alert"></button>
                    </div>
                @endif
                <table class="datatable-init nk-tb-list nk-tb-ulist is-compact table-tranx"
                    data-auto-responsive="false">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col nk-tb-col-check">
                                ID
                            </th>
                            <th class="nk-tb-col"><span class="sub-text">Category Name</span></th>
                            {{-- <th class="nk-tb-col"><span class="sub-text">Set Name</span></th> --}}
                            <th class="text-right nk-tb-col nk-tb-col-tools">

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="nk-tb-item">
                                <td class="nk-tb-col nk-tb-col-check">
                                    <span class="tb-amount">{{ $loop->iteration }} <span class="currency"></span></span>
                                </td>
                                <td class="nk-tb-col">
                                    <span>{{ $category->name }}</span>
                                </td>
                                {{-- <td class="nk-tb-col">
                                    <span>{{ $category->set_name }}</span>
                                </td> --}}
                                <td class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        {{-- <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                data-placement="top" title="Wallet">
                                                <em class="icon ni ni-wallet-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                data-placement="top" title="Send Email">
                                                <em class="icon ni ni-mail-fill"></em>
                                            </a>
                                        </li>
                                        <li class="nk-tb-action-hidden">
                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                data-placement="top" title="Suspend">
                                                <em class="icon ni ni-user-cross-fill"></em>
                                            </a>
                                        </li> --}}
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <!-- Modal Trigger Code -->
                                                        <li><a href="#" class="" data-toggle="modal"
                                                                data-target="#modalDefault{{ $category->id }}"><em
                                                                    class="icon ni ni-focus"></em><span>Quick
                                                                    Edit</span></a></li>
                                                        {{-- <li><a
                                                                href="{{ route('admin.set.show', $category->id) }}"><em
                                                                    class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a></li> --}}
                                                        {{-- <li class="divider"></li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr><!-- .nk-tb-item  -->


                            <!-- Modal Edit Content Code -->

                            <div class="modal fade zoom" tabindex="-1" id="modalDefault{{ $category->id }}">
                                <div class="modal-dialog" role="document">
                                    <form method="POST" action="{{ route('adminCategoryUpdate', $category->id) }}"
                                        id="form-update{{ $category->id }}">
                                        @csrf
                                        @method('PATCH')
                                        <div class="modal-content">

                                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                <em class="icon ni ni-cross"></em>
                                            </a>
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit {{ $category->name }} Category</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row gy-4">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="full-name">Category Name</label>
                                                            <input type="text" class="form-control form-control-lg"
                                                                id="full-name" name="name" value="{{ $category->name }}"
                                                                placeholder="Category name">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="display-name">Set
                                                                Name</label>
                                                            <input type="text" class="form-control form-control-lg"
                                                                id="display-name" name="set_name"
                                                                value="{{ $category->set_name }}" placeholder="Set Alias">
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phone-no">Phone Number</label>
                                                                <input type="text" class="form-control form-control-lg"
                                                                    id="phone-no" value="+880" placeholder="Phone Number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="birth-day">Date of Birth</label>
                                                                <input type="text"
                                                                    class="form-control form-control-lg date-picker"
                                                                    id="birth-day" placeholder="Enter your BirthDay">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="latest-sale">
                                                                <label class="custom-control-label" for="latest-sale">Use full
                                                                    name to display </label>
                                                            </div>
                                                        </div> --}}
                                                </div>

                                            </div>
                                            <div class="modal-footer bg-light">
                                                <span class="sub-text">
                                                    <div class="col-12">
                                                        <ul class="flex-wrap align-center flex-sm-nowrap gx-4 gy-2">
                                                            <li>
                                                                <button class="btn btn-lg btn-success" id="submitButton"
                                                                    type="submit"
                                                                    onclick="event.preventDefault(); document.getElementById('form-update{{ $category->id }}').submit(); return DisplayProgressMessage(this, 'Updating Category...');">Update</button>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-dismiss="modal"
                                                                    class="link link-light">Cancel</a>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </span>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>




                        @endforeach


                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->

    {{-- Add new set Modal --}}
    <div class="modal fade zoom" tabindex="-1" id="add-set">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{ route('adminCategoryStore') }}">
                @csrf
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                    <div class="modal-header">
                        <h5 class="modal-title">Add new Category</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row gy-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Category Name</label>
                                    <input type="text" class="form-control form-control-lg" id="full-name" value=""
                                        name="name" placeholder="Category name">
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="display-name">Set Name</label>
                                    <input type="text" class="form-control form-control-lg" id="display-name" value=""
                                        name="set_name" placeholder="Set Alias">
                                </div>
                            </div> --}}
                        </div>

                    </div>
                    <div class="modal-footer bg-light">
                        <span class="sub-text">
                            <div class="col-12">
                                <ul class="flex-wrap align-center flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" class="btn btn-lg btn-primary">Add Cateory</button>
                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function DisplayProgressMessage(ctl, msg) {
            $(ctl).prop("disabled", true);
            $(ctl).html(
                "<div class='mr-3 spinner-grow spinner-grow-sm' role='status'><span class='sr-only'>Loading...</span></div>" +
                msg);
            return true;
        }

    </script>
@endsection
