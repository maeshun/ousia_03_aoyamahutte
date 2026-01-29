<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="あお山ヒュッテではカスタムメイドの商品をはじめ、セレクトした洋服や小物、 また作家たちと一緒に作り上げた他ではないオリジナルの商品がございます。">
    <meta name="google" content="notranslate"/>
<!-- fb OGP -->
    <meta property="og:title" content="AOYAMAHÜTTE OFFICIAL SITE" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://aoyamahutte.com" />
    <meta property="og:image" content="https://aoyamahutte.com/assets/img/ogp.jpg" />
    <meta property="og:site_name" content="AOYAMAHÜTTE OFFICIAL SITE" />
    <meta property="og:description" content="AOYAMAHÜTTE OFFICIAL SITE / あお山ヒュッテではカスタムメイドの商品をはじめ、セレクトした洋服や小物、 また作家たちと一緒に作り上げた他ではないオリジナルの商品がございます。" />
<!-- tw OGP -->
    <meta name="twitter:card"  content="summary_large_image">
    <meta name="twitter:url"   content="https://aoyamahutte.com">
    <meta name="twitter:title" content="AOYAMAHÜTTE OFFICIAL SITE">
    <meta name="twitter:image" content="https://aoyamahutte.com/assets/img/ogp.jpg">
    <meta name="twitter:description" content="AOYAMAHÜTTE OFFICIAL SITE / あお山ヒュッテではカスタムメイドの商品をはじめ、セレクトした洋服や小物、 また作家たちと一緒に作り上げた他ではないオリジナルの商品がございます。">

    <?php if( is_front_page() ): ?>
    <title>AOYAMAHÜTTE</title>
    <?php elseif( is_page('about') ): ?>
    <title>ABOUT / AOYAMAHÜTTE</title>
    <?php elseif( is_page('calendar') ): ?>
    <title>CALENDAR / AOYAMAHÜTTE</title>
    <?php elseif( is_single() ): ?>
    <title><?php the_title(); ?> / NEWS / AOYAMAHÜTTE</title>
    <?php endif; ?>

    <link rel="stylesheet" href="/assets/css/destyle.css" type="text/css">
    <?php if( is_front_page() ): ?>
    <link rel="stylesheet" href="/assets/css/top.css" type="text/css">
    <?php elseif( is_page('about') ): ?>
    <link rel="stylesheet" href="/assets/css/about.css" type="text/css">
    <?php elseif( is_page('calendar') ): ?>
    <link rel="stylesheet" href='/assets/css/calendar.css' type="text/css"/>
    <?php elseif( is_single() ): ?>
    <link rel="stylesheet" href="/assets/css/news.css" type="text/css">
    <?php endif; ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500&display=swap">
<?php wp_head(); ?>
</head>
<body class="fade">
    <div class="header">
    <div class="left_box">
      <h1>AOYAMAHÜTTE</h1>
      <div class="sub_txt">
        There is a small "hütte" in the top of a quiet Aoyama building.
        In a peaceful place where you may make a picnic,
        why don't you choose the only good for yourself like deciding on the sandwich?<br><br>
        
        3-18-5 Minamiaoyama sakura apartment 4F<br>
        Minato,Tokyo,Japan
      </div>
    </div>
  </div>

  <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="/assets/img/logo.svg" alt=""></a></div>
