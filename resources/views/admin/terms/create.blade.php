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
                                            class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                <h2 class="nk-block-title fw-normal">Privacy Statement</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Using the <a href="/" target="_blank">quilljs</a> plugin, you
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
                                    <form method="POST" action="{{ route('adminTermsStore') }}" id="form-submit">
                                        @csrf
                                        <textarea class="summernote-basic" name="body" id=""
                                            rows="300">Start Typing</textarea>
                                        <button class="mt-2 btn btn-lg btn-primary" id="submitButton"
                                            onclick="event.preventDefault(); document.getElementById('form-submit').submit(); return DisplayProgressMessage(this, 'Adding...');">Add
                                            Statement</button>
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

    <script>
        $('#summernote').summernote({
            tabsize: 2,
            lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0', '3.0'],
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['height', ['height']],
                ['fontname', ['fontname', 'fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush
