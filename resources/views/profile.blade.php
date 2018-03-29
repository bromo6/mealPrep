@extends('master') @section('content')
<div class="container">
    <div class="row">
        <div class="col proPic">
            <img src="" />
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <p id="proName">{{ $userInfo->name or 'N/A' }}</p>
        </div>
        <div class="col-3">
            <p id=proMail>{{ $userInfo->email or 'N/A' }}</p>
        </div>
    </div>
    <form action="/profileSave" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label class="checkbox-inline">
                        <input name="male" type="checkbox" value="">Male
                </label>
                <label class="checkbox-inline">
                        <input name="female" type="checkbox" value="">Female
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
                            <input name="peanuts" type="checkbox" value="">Peanuts
                        </label>
                        <label class="checkbox-inline">
                            <input name="tree_nuts" type="checkbox" value="">Tree Nuts
                        </label>
                        <label class="checkbox-inline">
                            <input name="dairy" type="checkbox" value="">Dairy
                        </label>
                        <label class="checkbox-inline">
                            <input name="egg" type="checkbox" value="">Egg
                        </label>
                        <label class="checkbox-inline">
                            <input name="soy" type="checkbox" value="">Soy
                        </label>
                        <label class="checkbox-inline">
                            <input name="finned_fish" type="checkbox" value="">Finned Fish
                        </label>


                    </div>

                </div>
                <div class="row">
                    <div class="col">

                        <label class="checkbox-inline">
                                <input name="shellfish"type="checkbox" value="">Shellfish
                            </label>
                        <label class="checkbox-inline">
                                <input name="wheat" type="checkbox" value="">Wheat
                            </label>
                        <label class="checkbox-inline">
                                <input name="corn" type="checkbox" value="">Corn
                            </label>
                        <label class="checkbox-inline">
                                <input name="sesame_seeds" type="checkbox" value="">Sesame Seeds
                            </label>
                        <label class="checkbox-inline">
                                <input name="yeast" type="checkbox" value="">Yeast
                            </label>
                        <label class="checkbox-inline">
                                <input name="other" type="checkbox" value="">Other
                            </label></br>
                        </br>
                        <input type="submit" value="Submit">
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
