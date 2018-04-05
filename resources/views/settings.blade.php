@extends('master')
@section('title', 'Meal Up')
@section('content')
<div class="container">
    <div class="row">
        <div class="col proPic">
            <img src="" />
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <p id="proName">{{ $userInfo->name or '' }}</p>
        </div>
        <div class="col-3">
            <p id=proMail>{{ $userInfo->email or '' }}</p>
        </div>
    </div>
    <form action="/profileSave" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label class="checkbox-inline">
                        <input name="gender" type="radio" value="male">Male
                </label>
                <label class="checkbox-inline">
                        <input name="gender" type="radio" value="female">Female
                </label>

            </div>
        </div>
        <!-- </div> -->
        <div class="row">
            <div class="col">
                Age:
                <input type="text" name="age" value="{{ $userInfo->age or '' }}">
                Height:
                <input type="text" name="height" value="{{ $userInfo->height or '' }}">
                Weight:
                <input type="text" name="weight" value="{{ $userInfo->weight or '' }}">

            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">

                        <p>Allergies:</p>
                        <label class="checkbox-inline">
                            <input name="peanuts" type="checkbox" value="4" @if ($userInfo->allergy_peanuts) checked @endif>Peanuts
                        </label>
                        <label class="checkbox-inline">
                            <input name="tree_nuts" type="checkbox" value="51" @if ($userInfo->allergy_treenuts) checked @endif>Tree Nuts
                        </label>
                        <label class="checkbox-inline">
                            <input name="dairy" type="checkbox" value="23" @if ($userInfo->allergy_dairy) checked @endif>Dairy
                        </label>
                        <label class="checkbox-inline">
                            <input name="egg_whites" type="checkbox" value="46" @if ($userInfo->allergy_egg) checked @endif>Egg White
                        </label>
                        <label class="checkbox-inline">
                            <input name="soy" type="checkbox" value="25" @if ($userInfo->allergy_soy) checked @endif>Soy
                        </label>
                        <label class="checkbox-inline">
                            <input name="finned_fish" type="checkbox" value="30" @if ($userInfo->allergy_finnedfish) checked @endif>Finned Fish
                        </label>


                    </div>

                </div>
                <div class="row">
                    <div class="col">

                        <label class="checkbox-inline">
                                <input name="shellfish"type="checkbox" value="29" @if ($userInfo->allergy_shellfish) checked @endif>Shellfish
                            </label>
                        <label class="checkbox-inline">
                                <input name="wheat" type="checkbox" value="43"@if ($userInfo->allergy_wheat) checked @endif>Wheat
                            </label>
                        <label class="checkbox-inline">
                                <input name="corn" type="checkbox" value="26" @if ($userInfo->allergy_corn) checked @endif>Corn
                            </label>
                        <label class="checkbox-inline">
                                <input name="sesame_seeds" type="checkbox" value="49" @if ($userInfo->allergy_sesameseeds) checked @endif>Sesame Seeds
                            </label>
                        <label class="checkbox-inline">
                                <input name="yeast" type="checkbox" value="45" @if ($userInfo->allergy_yeast) checked @endif>Yeast
                            </label>
                        <label class="checkbox-inline">
                                <input name="other" type="checkbox" value="">Other
                            </label></br>
                        </br>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col"></div>
    </div>


</div>
@endsection
