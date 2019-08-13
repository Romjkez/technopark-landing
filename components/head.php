<?php
function getHead($title, $level)
{
  $lvl = '';
  for ($i = 0; $i < $level; $i++) {
    $lvl .= '../';
  }
  echo '<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>'.$title.'Детский технопарк</title>
  <meta name="description"
        content="Детский технопарк для школьников от Центра развития инжиниринга Московского Политеха">
  <link rel="icon" href="'.$lvl.'assets/img/favicon.png" type="image/png">
  <link rel="shortcut icon" href="'.$lvl.'assets/img/favicon.png" type="image/png">
  <link href="'.$lvl.'assets/css/lib/bootstrap4_custom.css" rel="stylesheet">
  <link href="'.$lvl.'assets/css/style.css" rel="stylesheet">
  <script type="text/javascript">!function (e, t, a) {
          (t[a] = t[a] || []).push(function () {
              try {
                  t.yaCounter51162917 = new Ya.Metrika2({
                      id: 51162917,
                      clickmap: !0,
                      trackLinks: !0,
                      accurateTrackBounce: !0
                  })
              } catch (e) {
              }
          });
          var c = e.getElementsByTagName("script")[0], n = e.createElement("script"), r = function () {
              c.parentNode.insertBefore(n, c)
          };
          n.type = "text/javascript", n.async = !0, n.src = "https://mc.yandex.ru/metrika/tag.js", "[object Opera]" == t.opera ? e.addEventListener("DOMContentLoaded", r, !1) : r()
      }(document, window, "yandex_metrika_callbacks2");</script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/51162917" style="position:absolute; left:-9999px;" alt=""/></div>
  </noscript>
</head>';
}

