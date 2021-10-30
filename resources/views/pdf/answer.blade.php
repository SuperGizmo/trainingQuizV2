<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  </head>
  <style>
    body{
        text-align: center;
        border: 1px solid #ccc;
        width:694px;
        height:1122px;
        margin: 0 auto;
        font-family: 'Montserrat', sans-serif;
    }

    .logo, .logo img{
        height: 115px;
        width: auto;
        margin-top: 15px;
    }

    .heading{
        font-size: 65px;
        line-height: 50px;
        margin: 30px 0;
    }

    .name{
        font-size: 35px;
        font-weight: bold;
    }


    .course_name{
        font-size: 28px;
    }

    .text{
        font-size: 20px;
        margin: 10px 0;
    }

    .topics{
        width: 100%;
    }

    .topics_wrapper{
        margin: 30px 0;
    }

    .topics_inline{
        width: 317px;
        display: inline;
        float: left;
        font-size: 12px;
        padding: 0 15px;
        box-sizing: border-box;
    }

    .topics_inline:first-of-type{
        border-right: 1px solid #999;
    }

    .topic{
        margin: 4px 0 0;
    }

    .topics_inline .topic{
        margin: 10px 0;
    }

    .company_info {
        margin: 25px 0 0;
    }

    .company_info, .disclaimer{
        font-size: 10px;
    }

    .clear{
        clear: both;
    }
  </style>
    <body>
        <div class="logo"><img src="{{$logo}}"></div>
        <div class="heading">Certificate Of Achievement</div>
        <div class="course_name">{{ $course }}</div>
        <div class="text">This is to certify that</div>
        <div class="name">{{$name}}</div>
        <div class="text">has scored <?=substr($percent, 0, 5);?>% which is {{ $status }}</div>
        <div class="text">Valid From: <?php echo date('d/m/Y'); ?> - To: <?php echo date('d/m/Y', time() + 365 * 24 * 60 * 60); ?> </div>
        <div class="company_info">{{config('site.PDF_FOOTER_ADDRESS')}}</div>
        <div class="disclaimer">This certificate confers no designation and is not confirmation of regulatory status.</div>
    </body>
</html>
