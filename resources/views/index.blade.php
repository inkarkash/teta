<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Wally.kz</title>
    <meta name="author" content="InlifeGroup" />
    <meta name="description" content="Site Wally.kz" />
    <meta name="keywords"  content="wally,share,help,charity,помогать" />
    <meta name="Resource-type" content="Document" />

    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/main.css')!!}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fullpage.css')}}" />
    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.fullpage.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                menu: '#menu',
                afterLoad: function(anchorLink, index){
                    //section 2
                    if(index == 2){
                        //moving the image
                        $('#section1').find('img').delay(500).animate({
                            left: '0%'
                        }, 1500, 'easeOutExpo');

                        $('#section1').find('p').first().fadeIn(1800, function(){
                            $('#section1').find('p').last().fadeIn(1800);
                        });;

                    }
                    //section 3
                    if(anchorLink == '3rdPage'){
                        //moving the image
                        $('#section2').find('.intro').delay(500).animate({
                            left: '0%'
                        }, 1500, 'easeOutExpo');
                    }
                }
            });
        });
    </script>
</head>
<body>
<ul id="menu">
    <li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
</ul>
<div id="fullpage">
    <div class="section " id="section0">
        <h1>fullPage.js</h1>
        <p>Configure the easing jQuery UI effect!</p>
        <img src="{{asset('img/fullPage.png')}}" alt="fullPage" />
    </div>
    <div class="section" id="section1">
        <div class="intro">
            <img src="{{asset('img/1.png')}}" alt="Cool" />
            <h1>easeOutExpo</h1>
            <p>This example is working with `easeOutExpo` effect instead of the default `easeOutExpo`</p>
            <p>You can see more about them <a href="#" target="_blank">here</a></p>
        </div>
    </div>
    <div class="section" id="section2">
        <div class="intro">
            <h1>Cool uh?</h1>
            <p>Choose the best easing effect for your site!</p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
</script>

</body>
</html>
