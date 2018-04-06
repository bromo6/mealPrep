@extends('master') @section('title', 'Meal Up') @section('content')
<div class="container-fluid px-0">
    <div class="homeHeader pt-5">
        <div class="row searchBar justify-content-center">
            <div class="col-6">
                <form method="GET" action="/home">
                    <div class="input-group mb-3">
                        <input type="text" name="seachRecipe" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button type="submit" class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if (count($recipeResults) > 0)
    <div class="row">
        <div class="col">
            @foreach($recipeResults as $recipe)
                <!-- insert html logic to display recipes -->

            @endforeach
        </div>
    </div>
    @endif
    <!-- <img height="400" width="100%" src="/img/NewHeader.png" /> -->
    <!--FIRST CAROUSEL  ------------------------------------>
    <div class="row mt-5 mb-3 ml-3">
        <div class="col owlText">
            <h2>Things You Might Like</h2>
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
        <div class="col-10 owl-carousel owl-one owl-theme">
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />

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
            <h2>Trending</h2>
        </div>
    </div>
    <div class="row trending">
        <div class="col-1">
            <!-- <button type="button" role="presentation" class="owl-prev owlBtn">
            <span aria-label="Previous">
                <i class="fas fa-angle-left"></i>
            </span>
            </button> -->
        </div>
        <div class="col-10 owl-carousel owl-two owl-theme">
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />

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
            <h2>Most Popular</h2>
        </div>
    </div>
    <div class="row mostPopular">
        <div class="col-1">
            <!-- <button type="button" role="presentation" class="owl-prev owlBtn">
            <span aria-label="Previous">
                <i class="fas fa-angle-left"></i>
            </span>
            </button> -->
        </div>
        <div class="col-10 owl-carousel owl-one owl-theme">
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
            <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />

        </div>
        <div class="col-1">
            <!-- <button type="button" role="presentation" class="owl-next owlBtn">
                    <span aria-label="next">
                        <i class="fas fa-angle-right"></i>
                    </span>
            </button> -->
        </div>
    </div>

</div>
<!--FOOTER  -------------------------------------------------->
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
@endsection @section('bottomjs')
<script>
    $('#filtersubmit').click(function() {
        alert('Searching for ' + $('#filter').val());
    });
</script>
@endsection
