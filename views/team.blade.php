<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Team - DinoPHP Framework</title>
@include('links')
</head>

<body>
@include('navbar')

<div class="container" style="margin-bottom: 5%;">
    <h1 style="font-weight: bold">The Dinophp Team</h1>
    <p style="font-size: 20px;color: #6b6b6b;">DinoPHP is a team of passionate developers from all around the world.<br>
        Follow us on Twitter and GitHub to keep up with what we're working on!</p>

    <div class="row">
        <div class="col-lg-3">

            <div class="person" style="margin-top: 15%;">
                <img src="{{ asset('pics/team/ahmedmohamed.jpg') }}" style="width: 280px;height: 280px;object-fit: cover;border-radius: .5rem!important;">
                <div class="info" style="margin-top: 7%;">
                    <h4 class="name" style="font-weight: bold;color: #e92644;">Ahmed Mohamed</h4>
                    <h5 class="address" style="color: #585858;font-weight: 400;">Alexandria, Egypt</h5>
                    <div class="social" style="display: flex;flex-direction: row;gap: 25px;">
                        <a href="https://twitter.com/ahmedmohammedx"><i class="fab fa-twitter" style="font-size: 22px;color: #3e3e3e;"></i></a>
                        <a href="https://github.com/Ahmed-Ibrahimm"><i class="fab fa-github" style="font-size: 22px;color: #3e3e3e;"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@include('footer')
</body>
@include('scripts')
</html>