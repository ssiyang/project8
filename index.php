<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <title>&#22825;&#27683;&#38928;&#22577;&#32178;&#31449;</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <style>

      .heroImage {

        background-image: url("bg.jpg");
        border-radius: 0;
        height: 100vh;
        margin-bottom: 0;
        background-size: cover;

      }

      .alert {

        display: none;

      }

    </style>
</head>

<body>

  <div class="jumbotron heroImage text-center">

    <div class="container">

      <h1 class="display-4 text-light mt-5">天氣預報</h1>

      <p class="lead text-light">請在輸入框輸入您要查詢的<strong class="text-danger">城市名稱</strong></p>

      <form>

        <div class="form-group col-md-7 mx-auto">

          <input id="city" type="text" name="city" class="form-control" placeholder="London, Paris, San Francisco...">

        </div>

      </form>

      <button id="findMyWeather" type="submit" name="submit" class="btn btn-warning btn-lg">&#26597; &#35426;</button>

      <div class="col-8 mx-auto mt-3">

        <div id="success" class="alert alert-success">查詢成功</div>
        <div id="fail" class="alert alert-danger">無法找到您查詢的城市，請重新再試</div>
        <div id="noCity" class="alert alert-danger">請輸入城市名稱</div>

      </div>

    </div>

  </div>


  <script type="text/javascript">

    $("#findMyWeather").click(function(event) {

      event.preventDefault();

      $(".alert").hide();

      if ($("#city").val() != "") {

        $.get("api.php?city="+$("#city").val(), function(data) {

          if (data == "") {

            $("#fail").fadeIn();

          } else {

            $("#success").html(data).fadeIn();

          }

        });

      } else {

        $("#noCity").fadeIn();

      }

    });

  </script>


</body>
</html>
		
