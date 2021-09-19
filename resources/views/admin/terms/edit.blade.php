@extends('layouts.admintemplate')

@section('content')

    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="mx-auto components-preview wide-md">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to"
                                        href="{{ route('adminTermsIndex') }}"><em
                                            class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                                <h2 class="nk-block-title fw-normal">Privacy Statement</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Using the <a href="" target="_blank">quilljs</a> plugin, you
                                        can simply make some awesome rich text
                                        editor.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                            <div class="card card-bordered">
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
                                        <div class="alert alert-danger alert-fill alert-icon alert-dismissible"
                                            role="alert">
                                            <em class="icon ni ni-cross-circle"></em>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button class="close" data-dismiss="alert"></button>
                                        </div>
                                    @endif
                                    <!-- Create the editor container -->
                                    <form method="POST" action="{{ route('adminTermsUpdate', $term->id) }}"
                                        id="form-submit">
                                        @csrf
                                        @method('PATCH')
                                        <textarea class="summernote-basic" name="body" id=""
                                            rows="200">{{ $term->body }}</textarea>
                                        <button class="mt-2 btn btn-lg btn-primary" id="submitButton"
                                            onclick="event.preventDefault(); document.getElementById('form-submit').submit(); return DisplayProgressMessage(this, 'Updating...');">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->

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

@push('scripts')
    <!-- JavaScript -->
    <link rel="stylesheet" href="/assets/admin/assets/css/editors/summernote.css?ver=2.4.0">
    <script src="/assets/admin/assets/js/libs/editors/summernote.js?ver=2.4.0"></script>
    <script src="/assets/admin/assets/js/editors.js?ver=2.4.0"></script>
@endpush
