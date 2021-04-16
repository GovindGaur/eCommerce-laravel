<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <input type="button" name="button" id="button" value="Button">
    <input type="button" name="button" id="button" value="Reset" onclick="reset()">
    <div id="show_countray_flag" class="row">

    </div>

</body>

</html>
<script>
    var a = `<div>
           <center><label>Search</label> <input type="text"  name="search"  id="search" onkeyup="search()">
           <center>
        </div>`;

    var b = '';

    $(document).ready(function() {

        $('#button').click(function() {
            $.ajax({
                url: 'https://restcountries.eu/rest/v2/all',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // console.log(response);
                    response.forEach(fetch_country);
                    $('#show_countray_flag').append(a + b);

                    // fetch_country(response);
                }
            });
        });

    });

    function fetch_country(country, index) {
        // console.log(country.name);
        if (index <= 23) {
            b += `<div class="col-md-2 p-5 content1 ">
            <div class="card"  style="width: 10rem;">
            <img class="card-img-top"  src= https://www.countryflags.io/${(country.alpha2Code).toLowerCase()}/flat/64.png>
            <div class="card-body">
                <p class="card-text" ><b> ${country.name}</b></p>
            </div>
        </div>
        </div>`;
        }

    }

    function reset() {
        $("#show_countray_flag").html("");
    }

    function search() {
        var text = $('#search').val();
        $('.content1').hide();
        $('.content1:contains("' + text + '")').show();
    }
</script>