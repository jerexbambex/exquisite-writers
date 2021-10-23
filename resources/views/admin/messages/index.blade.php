@extends('layouts.admintemplate')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-content-body">
                        <div class="nk-msg">
                            <div class="nk-msg-body bg-white">
                                <div class="nk-msg-head">
                                    <h4 class="title d-none d-lg-block">You have {{ $messages->count() }} messages</h4>
                                </div>
                                <div class="nk-ibx-list" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: 100%; overflow: hidden scroll;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        @foreach ($messages as $message)
                                                            <div class="nk-ibx-item {{ $message->status === 'new' ? 'is-unread' : '' }}">
                                                                <a href="{{ route('adminMessageShow', $message->id) }}" class="nk-ibx-link"></a>

                                                                <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar">
                                                                            {{ $message->initials() }}
                                                                        </div>
                                                                        <div class="user-name">
                                                                            <div class="lead-text">{{ $message->fullname() }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                                    <div class="nk-ibx-context-group">
                                                                        @if ($message->status === 'new')
                                                                            <div class="nk-ibx-context-badges"><span
                                                                                    class="badge badge-danger">New</span>
                                                                            </div>
                                                                        @endif
                                                                        <div class="nk-ibx-context">
                                                                            <span class="nk-ibx-context-text">
                                                                                <span class="heading">{{ $message->subject }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                                    <a class="link link-light">
                                                                        <em class="icon ni ni-clip-h"></em>
                                                                    </a>
                                                                </div>
                                                                <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                                    <div class="sub-text">{{ $message->created_at->diffForHumans() }}</div>
                                                                </div>
                                                                <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                                    <div class="ibx-actions">
                                                                        <ul class="ibx-actions-hidden gx-1">
                                                                            <li>
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-trigger"
                                                                                    data-toggle="tooltip" data-placement="top"
                                                                                    title="" data-original-title="Delete"><em
                                                                                        class="icon ni ni-trash"></em></a>
                                                                            </li>
                                                                        </ul>
                                                                        <ul class="ibx-actions-visible gx-2">
                                                                            <li>
                                                                                <div class="dropdown">
                                                                                    <a href="#"
                                                                                        class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                                        data-toggle="dropdown"><em
                                                                                            class="icon ni ni-more-h"></em></a>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right">
                                                                                        <ul class="link-list-opt no-bdr">
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="{{ route('adminMessageShow', $message->id) }}"><em
                                                                                                        class="icon ni ni-eye"></em><span>View</span></a>
                                                                                            </li>
                                                                                            <li><a class="dropdown-item"
                                                                                                    href="#"><em
                                                                                                        class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-ibx-item -->
                                                        @endforeach

                                                    </div>
                                                </div><!-- .nk-ibx-body -->
                                            </div><!-- .nk-ibx -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
