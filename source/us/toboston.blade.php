@extends('_layouts.page')

@section('social')
<meta property="og:title" content="DevConf.US | Boston, USA">
<meta property="og:site_name" content="DevConf.US">
<meta property="og:description" content="DevConf are free and open, annual, open-source community conferences for community contibutors, sponsored by Red Hat.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://devconf.info">
<meta property="og:image" content="https://devconf.info/assets/images/devconf-us-social.png">
<meta property="twitter:image" content="https://devconf.info/assets/images/devconf-us-social.png">
@endsection

@section('css')
<link rel="stylesheet" href="{{ mix('css/subsite.css', 'assets/build') }}">
@endsection

@section('title')
<title>Getting to Boston - DevConf.US</title>
@endsection


@section('body')
<header class="masthead">
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top masthead">
		<span class="nav-brand"><a href="/us"><img src="/assets/images/devconf-logo-us-reverse.svg"></a></span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile"
		    aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarMobile">
			<ul class="navbar-nav ml-auto pr-5">
				<li class="nav-item active px-3">
					<a href="/us/" class="nav-link">Home</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/us/aroundboston" class="nav-link">Getting around Boston</a>
				</li>
				<li class="nav-item underline active px-3">
					<a href="/us/toboston" class="nav-link">Getting to Boston</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/us/hotels" class="nav-link">Hotels</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/us/healthandsafety" class="nav-link local">Health & Safety</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/us/faq" class="nav-link">FAQ</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/coc" target="_blank" class="nav-link">Policies</a>
				</li>
			</ul>
		</div>
	</nav>
</header>

<section class="mx-auto mt-5 pt-5 pb-3 col-lg-11">
	<div class="row">
		<div class="h1 mx-5 mont-700 underline position-relative">Getting to Boston</div>
	</div>

</section>
<hr>
<section class="mx-auto col-lg-11">
	<div class="row">
		<div class="os-400 mx-5 text-center" style="min-height: 40vh">
			<strong class="d-block mb-3 os-600">We will post our 'Getting to Boston' in March 2022.</strong>
		</div>
	</div>
</section>
@endsection

@include('_layouts.footerus')
