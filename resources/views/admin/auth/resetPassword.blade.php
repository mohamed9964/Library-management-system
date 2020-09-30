@extends('admin.dashboard.default')
    @section('content')
    <!--Section: Block Content-->
    <section class="mb-5 text-center container">

        <h1>Set a new password</h1>

        <form action="{{route('reset')}}" method="POST">
            @csrf
            <div class="md-form md-outline">
                <label data-error="wrong" data-success="right" for="newPass">Current password</label>
                <input type="password" id="newPass" class="form-control" name="current">
            </div>

            <div class="md-form md-outline">
                <label data-error="wrong" data-success="right" for="newPass">New password</label>
                <input type="password" id="newPass" class="form-control" name="new">
            </div>

            <div class="md-form md-outline">
                <label data-error="wrong" data-success="right" for="newPassConfirm">Confirm password</label>
                <input type="password" id="newPassConfirm" class="form-control" name="confirmNew">
            </div>
            <br/><br/><br/>
            <button type="submit" class=" btn btn-primary mb-4">Change password</button>

        </form>

    </section>
    <!--Section: Block Content--

    @stop
