<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="/css/DPlayer.min.css" rel="stylesheet">

    </head>
    <body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div id="dplayer" style="width: 960px;height: 600px;margin-left: 150px"></div>
            </div>
        </div>
    </div>
    </body>
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/DPlayer.min.js"></script>
    <script>
        $(function () {
            const dp = new DPlayer({
                container: document.getElementById('dplayer'),
                screenshot: true,
                video: {
                    url: '{{ asset($video->path) }}',
                    // pic: 'demo.jpg',
                    // thumbnails: 'thumbnails.jpg'
                },
                danmaku: {
                    id: '{{ $video->id }}',
                    api: 'http://localhost/danmakuv2',
                    user: 'dog'
                }
            });
            {{--$(".dplayer-comment-icon").click(function () {--}}
            {{--    console.log(111)--}}
            {{--});--}}
            {{--$(".dplayer-send-icon").click(function () {--}}
            {{--    let text = $(".dplayer-comment-input").val();--}}
            {{--    let url = '{{ url('/danmaku/send') }}';--}}
            {{--    var list = {"id":"1","author":"dog","time":0.083333,"text":text,"color":16777215,"type":0};--}}
            {{--    $.ajax({--}}
            {{--        //请求方式--}}
            {{--        type : "POST",--}}
            {{--        //请求的媒体类型--}}
            {{--        contentType: "application/json;charset=UTF-8",--}}
            {{--        //请求地址--}}
            {{--        url : url,--}}
            {{--        //数据，json字符串--}}
            {{--        data : JSON.stringify(list),--}}
            {{--        //请求成功--}}
            {{--        success : function(result) {--}}
            {{--            console.log(result);--}}
            {{--        },--}}
            {{--        //请求失败，包含具体的错误信息--}}
            {{--        error : function(e){--}}
            {{--            console.log(e.status);--}}
            {{--            console.log(e.responseText);--}}
            {{--        }--}}
            {{--    });--}}
            {{--});--}}
            {{--$(".dplayer-comment-box").bind("keydown",function(e){--}}
            {{--    // 兼容FF和IE和Opera--}}
            {{--    var theEvent = e || window.event;--}}
            {{--    var code = theEvent.keyCode || theEvent.which || theEvent.charCode;--}}
            {{--    if (code == 13) {--}}
            {{--        //回车执行查询--}}
            {{--        $(".dplayer-send-icon").click();--}}
            {{--    }--}}
            {{--});--}}
            // dp.danmaku.send(
            //     {
            //         text: 'dplayer is amazing',
            //         color: '#b7daff',
            //         type: 'right',
            //         time: 10
            //     },
            //     function () {
            //         console.log('success');
            //     }
            // );
        })

    </script>
</html>
