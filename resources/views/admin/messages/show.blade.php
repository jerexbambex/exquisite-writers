@extends('layouts.admintemplate')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-msg">

                        <div class="nk-ibx-view show-ibx">
                            <div class="nk-ibx-head">
                                <div class="nk-ibx-head-actions">
                                    <ul class="nk-ibx-head-tools g-1">
                                        <li class="ml-n2"><a href="{{ route('adminMessageIndex') }}" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
                                        <li>
                                            <form method="post" action="{{ route('adminMessageDelete', $message->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button href="#" class="btn btn-icon btn-trigger btn-tooltip" title="" data-original-title="Delete"><em class="icon ni ni-trash"></em></button>
                                            </form>
                                        </li>
                                        <li>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <form method="post" action="{{ route('adminMessageUpdate', $message->id) }}">
                                                                @method('PATCH')
                                                                @csrf
                                                                <button class="dropdown-item" href="#"><span>Mark as unread</span></button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form method="post" action="{{ route('adminMessageDelete', $message->id) }}">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button class="dropdown-item text-danger" href="#"><span>Delete this message</span></button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nk-ibx-head-actions">
                                </div>
                                <div class="search-wrap" data-search="search">

                                </div><!-- .search-wrap -->
                            </div><!-- .nk-ibx-head -->
                            <div class="nk-ibx-reply nk-reply" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <div class="nk-ibx-reply-head">
                                                        <div>
                                                            <h4 class="title">{{ $message->subject }}</h4>
                                                            <p>From: {{ $message->fullName() }}</p>
                                                            <p>Email: {{ $message->email }}</p>
                                                        </div>
                                                        <ul class="d-flex g-1">
                                                            {{-- <li class="d-none d-sm-block">
                                                                <a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="" data-original-title="Print"><em class="icon ni ni-printer"></em></a>
                                                            </li>
                                                            <li class="mr-n1">
                                                                <div class="asterisk"><a class="btn btn-trigger btn-icon btn-tooltip" href="#" data-original-title="" title=""><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                            </li> --}}
                                                        </ul>
                                                    </div>
                                                    <div class="nk-ibx-reply-group nk-reply-form">
                                                        <div class="nk-ibx-reply-item nk-reply-item">
                                                            <div class="nk-reply-header nk-ibx-reply-header is-collapsed">
                                                                <div class="nk-reply-desc">
                                                                    {!! nl2br($message->message) !!}
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
                        </div>

                    </div><!-- .nk-msg -->
                </div>
            </div>
        </div>
    </div>
@endsection
