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
    <div class="row">
        <div class="col">
            <form>
                <label class="checkbox-inline">
                    <input type="checkbox" value="">Male
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="">Female
                </label>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <form>
            Age:
            <input type="text" name="age" value="">
            Height:
            <input type="text" name="height" value="">
            Weight:
            <input type="text" name"weight" value="">
        </form>
    </div>

</div>
<div class="row">
    <div class="col">
        <div class="row">
            <div class="col">
                <form>
                    <p>Allergies:</p>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Peanuts
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Tree Nuts
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Dairy
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Egg
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Soy
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Finned Fish
                    </label>

                </form>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <form>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Shellfish
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Wheat
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Corn
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Sesame Seeds
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Yeast
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Other
                    </label></br></br>
                    <input type="submit" value="Submit">
                </form>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col"></div>
</div>


</div>
@endsection
