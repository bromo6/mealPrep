@extends('master')
@section('title', 'Meal Up')
@section('content')
<div class="container-fluid px-0">
    <div class="proHeader">
        <div class="row mainPro">
            <div class="col">
                <div class="row pt-2">
                    <div class="col">
                        <a class="logout" href="/logout">
                            <i class="fas fa-sign-out-alt fa-2x"></i>
                        </a>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img id="profilePic" height="120" width="125" src="https://files.slack.com/files-pri/T8TBSJ9S9-FA1AJGWAD/image.png" />
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <p>{{ $showUser->username or ''}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Age: {{ $showUser->age or '' }}</p>
                        <p>Height: {{ $showUser->height or '' }}</p>
                        <p>Weight: {{ $showUser->weight or '' }}</p>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <a href="/settings">
                            <button type="btn" class="btn btn-success edit">Edit</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-5 mb-3 ml-3">
        <div class="col owlText">
            <h2>My Recipes</h2>
        </div>
    </div>
    <div class="row youMightLike">
        <div class="col-1">
            <!-- <button type="button" role="presentation" class="owl-prev owlBtn">
            <span aria-label="Previous">
                <i class="fas fa-angle-left"></i>
            </span>
            </button> -->
        </div>
        <div class="col-10 firstOwl">
            @if (count($myRecipes) > 0)
            <div class="owl-carousel owl-one owl-theme">
                <div>
                    @foreach($myRecipes as $created)
                        <div class="likePic">
                            <a href="/recipe-detail/{{$created->id}}"><img class="searchPic" height="190" width="100" src="{{ $created->image_path or '' }}" /></a>
                            <a href="/favorite/{{$created->id}}"><i class="fas fa-heart fa-2x heart"></i></a>
                            <div style="clear:both"></div>
                        </div>
                    @endforeach
                </div>

            </div>
            @else
            <p class="text-center">You haven't favorited any recipes yet!</p>
            @endif
        </div>
        <div class="col-1">
            <!-- <button type="button" role="presentation" class="owl-next owlBtn">
                    <span aria-label="next">
                        <i class="fas fa-angle-right"></i>
                    </span>
            </button> -->
        </div>

    </div>
    <div class="row mt-5 mb-3 ml-3">
        <div class="col owlText">
            <h2>Favorites</h2>
        </div>
    </div>
    <div class="row youMightLike">
        <div class="col-1">
            <!-- <button type="button" role="presentation" class="owl-prev owlBtn">
            <span aria-label="Previous">
                <i class="fas fa-angle-left"></i>
            </span>
            </button> -->
        </div>
        <div class="col-10 firstOwl">
            @if (count($favoritedRecipes) > 0)
            <div class="owl-carousel owl-two owl-theme">
                <div>
                    @foreach($favoritedRecipes as $recipe)
                        <div class="likePic">
                            <a href="/recipe-detail/{{$recipe->id}}"><img class="searchPic" height="190" width="100" src="{{ $recipe->recipe->image_path or '' }}" /></a>
                        </div>
                    @endforeach
                </div>

            </div>
            @else
            <p class="text-center">You haven't favorited any recipes yet!</p>
            @endif
        </div>
        <div class="col-1">
            <!-- <button type="button" role="presentation" class="owl-next owlBtn">
                    <span aria-label="next">
                        <i class="fas fa-angle-right"></i>
                    </span>
            </button> -->
        </div>

    </div>
    <div class="row">
        <div class="col py-5 add">
            <button type="btn" class="btn btn-success plus">Add Recipe</button>
        </div>
    </div>
    <footer id="foot">
        <div id="copy" class="copyright">
            <div class="row">
                <div class="col socialMedia">
                    <a href="https://www.facebook.com/?stype=lo&jlou=AfdcRT9kTFzrJiLwJq57CUQJQn_K-YmZaURxqn0pVpUfwYjfv83EWvA7Fg9bENoRVSjCupMVYrtixRgsDr3gGX885_JWbCZP9-If-UOmNqNs_Q&smuh=2157&lh=Ac9ntiQbc2-1Sufu">
                        <i class="fab fa-facebook-square fa-2x icon book bottomIcons"></i>
                    </a>
                    <a href="https://www.instagram.com/">
                        <i class="fab fa-instagram fa-2x icon pictoGram bottomIcons"></i>
                    </a>
                    <a href="https://twitter.com/?logged_out=1&lang=en">
                        <i class="fab fa-twitter fa-2x icon twitt bottomIcons"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col bottomNav">
                    <a class="bottomTags footHome" href="/home">Home</a>

                    <a class="bottomTags footPro" href="/profile">Profile</a>

                    <a class="bottomTags footAbout" href="/about">About Us</a>

                    <a class="bottomTags footContact" href="/contact">Contact Us</a>
                </div>
            </div>
            <div class="row">
                <div class="col footLog">
                    <img height="60" width="60" src="img/meal-up-logo.png" />
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
