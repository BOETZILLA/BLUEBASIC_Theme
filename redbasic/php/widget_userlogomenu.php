<?php

function widget_userlogomenu($args) {

    $channel = channelx_by_n(\App::$profile_uid);

    $o = replace_macros(get_markup_template('userlogomenu.tpl'), array(
      '$sitelocation' => $site['$sitelocation'],
      '$banner' => $channel['channel_name'],
      '$channel' => $channel['channel_address'],
      '$avatar' => $channel['xchan_photo_s'],
    ));

  return $o;

  }
