@extends('master') @section('title', 'Meal Up') @section('content')
<div class="container-fluid px-0">
    <img height="400" width="100%" src="img/NewHeader.png" />
    <div class="row searchBar">
        <div class="col">
            <i id="filtersubmit" class="fa fa-search"></i>
            <input id="filter" type="text" placeholder="Search" />
        </div>
    </div>
    <div class="row mt-5 mb-3 ml-3">
        <div class="col">
            <h2>Things You Might Like</h2>
        </div>
    </div>
    <div class="row youMightLike">
        <div class="col-1">
            <button type="button" role="presentation" class="owl-prev owlBtn">
            <span aria-label="Previous">
                <i class="fas fa-angle-left"></i>
            </span>
            </button>
        </div>
        <div class="col-10 firstOwl">
            <div class="owl-carousel owlPics">
              <div>
                  <img height="150" width="100" src="https://whatthehealthmag.files.wordpress.com/2016/11/62dfaedd32fb837b4437eb41ca3bb125.jpg" />
              </div>
            </div>
        </div>
        <div class="col-1">
            <button type="button" role="presentation" class="owl-next owlBtn">
                    <span aria-label="next">
                        <i class="fas fa-angle-right"></i>
                    </span>
            </button>
        </div>

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
@endsection
@section('bottomjs')
<script>
    $('#filtersubmit').click(function() {
    alert('Searching for '+$('#filter').val());
    });
</script>
@endsection
