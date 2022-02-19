@extends('layouts.admintemplate')

@section('content')
    <div class="components-preview wide-md mx-auto">
        <div class="nk-block-head nk-block-head-lg wide-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    {{-- <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div> --}}
                    @if (!count($subscribers))
                        <h2 class="nk-block-title fw-normal">You have 0 subscriber</h2>
                    @else
                        <h2 class="nk-block-title fw-normal">You have {{ $subscribers->count() }} {{ Str::plural( 'subscriber', $subscribers->count() )}}</h2>
                    @endif

                </div>
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt"><a href="{{ route('adminSubscriberExport') }}" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Export List</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .nk-block-head-content -->
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="nk-block-des">
                        <p>List of email addresses with date.</p>
                    </div>
                </div>
            </div>
            <table class="datatable-init datatable-init-export nowrap nk-tb-list is-separate table" data-auto-responsive="false" data-export-title="Export">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="puid">
                                <label class="custom-control-label" for="puid"></label>
                            </div>
                        </th>
                        <th class="nk-tb-col"><span>Email</span></th>
                        <th class="nk-tb-col"><span>Registered on</span></th>
                        <th class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1 my-n1">
                                <li class="mr-n1">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-bar-c"></em><span>Update Stock</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-invest"></em><span>Update Price</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </th>
                    </tr><!-- .nk-tb-item -->
                </thead>
                <tbody>
                    @forelse ($subscribers as $subscriber)
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="puid1">
                                    <label class="custom-control-label" for="puid1"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <span class="tb-sub">{{ $subscriber->email }}</span>
                            </td>
                            <td class="nk-tb-col">
                                <span class="tb-sub">{{ $subscriber->created_at }}</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1 my-n1">
                                    <li class="mr-n1">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#" class="text-danger"><em class="icon ni ni-trash"></em><span>Action</span></a></li>
                                                    {{-- <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li> --}}
                                                    {{-- <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li> --}}
                                                    {{-- <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                    @empty
                        <h5>No subscribers yet!
                    @endforelse

                </tbody>
            </table><!-- .nk-tb-list -->
        </div> <!-- nk-block -->
    </div><!-- .components-preview -->
@endsection


@push('scripts')
<script src="./assets/js/libs/datatable-btns.js?ver=2.9.1"></script>
@endpush
