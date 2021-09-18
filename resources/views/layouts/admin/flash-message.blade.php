@if ($message = Session::get('success'))
    <div id="toast-container" class="toast-top-right">
        <div class="toastr toast-success alert alert-dismissible" aria-live="polite" style="" role="alert">
            <span class="btn-trigger toast-close-button" role="button" data-dismiss="alert">Close</span>
            <div class="toast-message"><span class="toastr-icon"><em class="icon ni ni-check-circle-fill"></em></span>
                <div class="toastr-text">
                    <h5>Update Successfully</h5>
                    <p>{{ $message }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div id="toast-container" class="toast-top-right">
        <div class="toastr toast-error alert alert-dismissible" aria-live="polite" style="" role="alert">
            <span class="btn-trigger toast-close-button" role="button" data-dismiss="alert">Close</span>
            <div class="toast-message"><span class="toastr-icon"><em class="icon ni ni-cross-circle-fill"></em></span>
                <div class="toastr-text">
                    <h5>Opps</h5>
                    <p>{{ $message }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('alert'))
    <div id="toast-container" class="toast-top-right">
        <div class="toastr toast-warning alert alert-dismissible" aria-live="polite" style="" role="alert">
            <span class="btn-trigger toast-close-button" role="button" data-dismiss="alert">Close</span>
            <div class="toast-message">
                <span class="toastr-icon"><em class="icon ni ni-alert-fill"></em></span>
                <div class="toastr-text">
                    <h5>Alert</h5>
                    <p>{{ $message }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('info'))
    <div id="toast-container" class="toast-top-right">
        <div class="toastr toast-info alert alert-dismissible" aria-live="polite" style="" role="alert">
            <span class="btn-trigger toast-close-button" role="button" data-dismiss="alert">Close</span>
            <div class="toast-message">
                <span class="toastr-icon"><em class="icon ni ni-alert-circle"></em></span>
                <div class="toastr-text">
                    <h5>Alert</h5>
                    <p>{{ $message }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div id="toast-container" class="toast-top-right">
        <div class="toastr toast-warning alert alert-dismissible" aria-live="polite" style="" role="alert">
            <span class="btn-trigger toast-close-button" role="button" data-dismiss="alert">Close</span>
            <div class="toast-message">
                <span class="toastr-icon"><em class="icon ni ni-alert-fill"></em></span>
                <div class="toastr-text">
                    <h5>Alert</h5>
                    <p>Please check the page for the following errors!!!</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif