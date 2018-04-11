@extends('master')
@section('title', 'Meal Up')
@section('content')
<div class="container-fluid px-0">
    <div class="conBack">
        <div class="row mainCon">
            <div class="col">
                    <div class="row topRow">
                        <div id="context" class="col">
                            <h2>Let's Get in Touch!</h2>
                            <h5 style="margin-bottom: 10px;">Please leave us a message</h5>
                        </div>
                    </div>
                    <div class="row" style="padding-left:185px;">
                        <div class="col-md-8">
                            <div class="form-area">
                                <form id="text" role="form">
                                    <br style="clear:both">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="conName" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="conEmail" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" type="textarea" id="conMessage" placeholder="Message" maxlength="140" rows="7"></textarea>
                                    </div>
                                    <button type="button" id="conSubmit" name="submit" class="btn btn-success pull-right">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div id="detailsbg" class="col-md-4">

                        </div>
                    </div>
            </div>
        </div>

    </div>
</div>
@endsection
