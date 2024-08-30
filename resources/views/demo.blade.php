@extends('base')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="notification" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificationLabel">Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="usernameModal">Username : </p>
                    <p id="rememberModal">Remember me: </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-12 col-lg-12 bg-light shadow-sm p-3">
            Column 1 of 2
        </div>
        <div class="col-sm-6 col-md-12 col-lg-12 bg-primary p-3 mt-2">
            Column 2 of 2
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1 col-md-1 col-lg-1 bg-success">
            Column 1 of 2
        </div>
        <div class="col-sm-1 col-md-1 col-lg-1 bg-info">
            Column 2 of 2
        </div>
        <div class="col-sm-1 col-md-1 col-lg-1 bg-warning">
            Column 3 of 3
        </div>
    </div>

    <div class="row">
        <h1>Form</h1>
        <form id="login">
            <div class="mb-3 col-sm-12 col-md-12 col-lg-12">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" />
                <div class="form-text">Isi username di atas</div>
            </div>
            {{-- Label harus ditaruh bawah. Jika tidak ada placeholder, tidak bisa animate ke atas --}}
            <div class="form-floating mb-3 col-sm-12 col-md-12 col-lg-12">
                <input type="password" class="form-control" name="password" id="password" placeholder="name@example.com" />
                <label for="password">Password</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="check" id="check" />
                <label class="form-check-label" for="check">Remember ?</label>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            console.log("Document ready");
            $("#login").on('submit', function(e) {
                console.log("submit");
                //Username textbox
                $("#usernameModal").html("Username : " + $("input[name='username']").val());
                //Remember checkbox
                var remember = false;
                if($("input[name='check']").is(':checked')) {
                    remember = true;
                }
                $("#rememberModal").html("Remember: " + remember);
                $("#notification").modal('show');
                return false;
            });
        });
    </script>
@endsection
