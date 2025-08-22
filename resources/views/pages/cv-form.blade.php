@extends('layout.app')
@section('title')
    CV Genarator
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    {{-- form desing  --}}
    <div class="row">
        <div class=" col-md-5" id="cv-form-images">
            {{-- Images section  --}}
            <div id="carouselExampleIndicators" class="carousel slide cv-form-images" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100 height-50vh" src="{{asset('images\cv-formate\formate1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 height-50vh" src="{{asset('images\cv-formate\formate2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 height-50vh" src="{{asset('images\cv-formate\formate3.jpg')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-7">
            <h2 class="text-center">Create Your CV</h2>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <h5 class="text-muted">Personal Information</h5>
                <div class="form-row">
                    <div class="col">
                    <label for="name">First Name :</label>
                    <input type="text" name="firstName" class="form-control" placeholder="First name" required>
                    </div>
                    <div class="col">
                    <label for="name">Last Name :</label>
                    <input type="text" name="lastName" class="form-control" placeholder="Last name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title">Work Title :</label>
                    <input type="text" class="form-control" id="workTitle" name="workTitle" placeholder="Web Developer, Full Stack Developer" required>
                </div>

                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="type@your.mail" required>
                </div>

                <div class="form-group">
                    <label for="email">Mobile :</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="+880170000000" required>
                </div>

{{-- Address Section  --}}
                <br>
                <h5 class="text-muted">Address</h5>
                <div class="form-group">
                    <label for="address">Country :</label>
                    <select class="form-control" id="country" name="country" required>
                        <option value="">Select Country</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Maldives">Maldives</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="city">City :</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="City Name" required>
                </div>

                <div class="form-group">
                    <label for="address">Address :</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Your Address" required></textarea>
                </div>

                {{-- upload files --}}
                <div class="form-group">
                    <label for="address">Upload Your Photo :</label>
                    <input type="file" class="form-control-file" id="photo" name="photo" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Generate CV</button>
            </form>
        </div>
    </div>
    <br><br>
@endsection