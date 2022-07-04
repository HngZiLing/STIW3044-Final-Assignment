<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyTutor</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <style>
            @media screen and (max-width: 768px) {.w3-container {width: 100%;}}
            @media screen and (min-width: 768px) {.w3-container {width: 700px;margin: 0 auto;}}
            html {background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url("/images/background.png");}
        </style>
    </head>

    <body>
        @if (session('save'))
        <script>alert("Success");</script>
        @endif

        @if (session('error'))
        <script>alert("Failed");</script>
        @endif

        <div class="w3-bar w3-amber w3-round w3-card-4">
            <a href="{{route('mainpage')}}" class="w3-button w3-hover-none w3-padding-16 w3-large">MyTutor</a>
            <a href="{{route('logout')}}" class="w3-right w3-bar-item w3-button w3-padding-16 w3-hover-none w3-border-amber w3-bottombar w3-hover-border-white w3-hover-text-white w3-normal">Logout</a>
        </div>

        <div class="w3-container" style="padding:16px"></div>
        <div style="padding-right:64px">
            <button class="w3-button w3-round w3-right w3-indigo" style="border-radius:25px" onclick="document.getElementById('newSubject').style.display= 'block';return false;">New Subject</button>
        </div>

        <div class="w3-container" style="padding:16px"></div>
        <table class="w3-table w3-hoverable w3-centered w3-striped w3-bordered w3-white w3-responsive w3-card" style="border-radius:25px;table-layout:auto;width:90%;margin:auto;">
            <thead class="w3-indigo">
                <th>Subject ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Total Learning Hours</th>
            </thead>
            @foreach ($subjects as $subject)
            <tr>
                <td style="width:10%">{{ $loop->iteration }}</td>
                <td style="width:15%;white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">{{ $subject->title }}</td>
                <td style="width:50%;white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;">{{ $subject->description }}</td>
                <td style="width:5%">RM{{ $subject->price }}</td>
                <td style="width:20%">{{ $subject->hours }} Hours</td>
            </tr>
            @endforeach
        </table>

        <div id="newSubject" class="w3-modal w3-animate-opacity">
            <div class="w3-modal-content w3-round" style="width:500px;border-radius:25px">
                <header class="w3-row w3-amber" style="border-radius:25px 25px 0px 0px">
                    <div class="w3-row">
                        <span onclick="document.getElementById('newSubject').style.display='none'" class="w3-button w3-right w3-display-topright w3-small">&times;</span>
                        <h4 class="w3-margin-left"><b>New Subject</b></h4>
                    </div>
                </header>
                <div class="w3-padding">
                    <form method="post" action="{{route('saveSubject')}}">
                    {{csrf_field()}}
                        <p><input class="w3-input w3-round w3-border" type="text" name="title" placeholder="Subject Title"></p>
                        <p>
                            <textarea class="w3-input w3-border w3-round" name="description" rows="4" cols="50" placeholder="Subject Description"></textarea>
                        </p>
                        <p><input class="w3-input w3-round w3-border" type="text" name="price" placeholder="Subject Price"></p>
                        <p><input class="w3-input w3-round w3-border" type="text" name="hours" placeholder="Total Learning Hours"></p>
                        <button class="w3-button w3-amber w3-round" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>

        <footer class="w3-footer w3-bottom w3-center w3-light-grey">Copyright @ H'ng Zi Ling 281895</footer> 
    </body>
</html>
