@extends('master') @section('title', 'Meal Up') @section('content')
<div class="container-fluid px-0">
    <div class="setBack">
        <div class="row mainSet pt-5" style="padding-left:170px;">
            <div class="col">

                <div class="row pt-5">
                    <div class="col proPic">
                        <img id="profilePic1" height="120" width="125" src="https://files.slack.com/files-pri/T8TBSJ9S9-FA1AJGWAD/image.png" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p id="proName">{{ $userInfo->name or '' }}</p>
                    </div>
                    <div class="col-3">
                        <input id="userName1" type="text" placeholder="Username" value="{{ $userInfo->username or ''}}">

                    </div>
                </div>
                <div class="row passStuff">
                    <div class="col-3">
                        <input id="passChange" type="password" placeholder="New Password">
                    </div>
                    <div class="col-3">
                        <input id="confirmPass" type="password" placeholder="Confirm Password">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p id=proMail>{{ $userInfo->email or '' }}</p>
                    </div>
                </div>
                <form action="/profileSave" method="POST">
                    @csrf
                    <div class="row my-4">
                        <div class="col">
                            <label class="checkbox-inline mr-5">
                                    <input name="gender" type="radio" value="male"> Male
                                </label>
                            <label class="checkbox-inline ml-5">
                                    <input name="gender" type="radio" value="female"> Female
                                </label>

                        </div>
                    </div>
                    <!-- </div> -->
                    <div class="row mb-5">
                        <div class="col" style="padding-left:55px;">

                            <input id="age" type="text" name="age" placeholder="Age" value="{{ $userInfo->age or '' }}">

                            <input id="height" type="text" name="height" placeholder="Height" value="{{ $userInfo->height or '' }}">

                            <input id="weight" type="text" name="weight" placeholder="Weight" value="{{ $userInfo->weight or '' }}">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">

                                    <p>Allergies:</p>
                                    <label class="checkbox-inline alergyCheck">
                                            <input name="peanuts" type="checkbox" value="4" @if ($userInfo->allergy_peanuts) checked @endif>Peanuts
                                        </label>
                                    <label class="checkbox-inline alergyCheck">
                                            <input name="tree_nuts" type="checkbox" value="51" @if ($userInfo->allergy_treenuts) checked @endif>Tree Nuts
                                        </label>
                                    <label class="checkbox-inline alergyCheck">
                                            <input name="dairy" type="checkbox" value="23" @if ($userInfo->allergy_dairy) checked @endif>Dairy
                                        </label>
                                    <label class="checkbox-inline alergyCheck">
                                            <input name="egg_whites" type="checkbox" value="46" @if ($userInfo->allergy_egg) checked @endif>Egg White
                                        </label>
                                    <label class="checkbox-inline alergyCheck">
                                            <input name="soy" type="checkbox" value="25" @if ($userInfo->allergy_soy) checked @endif>Soy
                                        </label>
                                    <label class="checkbox-inline">
                                            <input name="finned_fish" type="checkbox" value="30" @if ($userInfo->allergy_finnedfish) checked @endif>Finned Fish
                                        </label>


                                </div>

                            </div>
                            <div class="row">
                                <div class="col">

                                    <label class="checkbox-inline alergyCheck">
                                            <input name="shellfish"type="checkbox" value="29" @if ($userInfo->allergy_shellfish) checked @endif>Shellfish
                                        </label>
                                    <label class="checkbox-inline alergyCheck">
                                            <input name="wheat" type="checkbox" value="43"@if ($userInfo->allergy_wheat) checked @endif>Wheat
                                        </label>
                                    <label class="checkbox-inline alergyCheck">
                                            <input name="corn" type="checkbox" value="26" @if ($userInfo->allergy_corn) checked @endif>Corn
                                        </label>
                                    <label class="checkbox-inline alergyCheck">
                                            <input name="sesame_seeds" type="checkbox" value="49" @if ($userInfo->allergy_sesameseeds) checked @endif>Sesame Seeds
                                        </label>
                                    <label class="checkbox-inline alergyCheck">
                                            <input name="yeast" type="checkbox" value="45" @if ($userInfo->allergy_yeast) checked @endif>Yeast
                                        </label>
                                    <label class="checkbox-inline">
                                            <input name="other" type="checkbox" value="">Other
                                        </label></br>
                                    </br>
                                    <button type="submit" class="btn btn-success save">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
