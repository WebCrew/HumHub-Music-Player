<?php
use yii\helpers\Url;
use humhub\models\Setting;
?>
<div class="panel">
  <div class="panel-heading">
    <?=Yii::t('MusicplayerModule.base', '<strong>Music</strong> Player'); ?>
  </div>
  <div class="panel-body">
      
<!-- Start Top Header -->
    <div id="top-header" class="hidden-on-collapse">
      <div id="top-header-toggle" class="small-player-toggle-contract"></div>

      <div class="now-playing-title" amplitude-song-info="name"></div>
      <div class="album-information"><span amplitude-song-info="artist"></span> - <span amplitude-song-info="album"></span></div>
    </div>
  <!-- End Top Header -->
   <!-- Begin Playlist -->
    <div id="small-player-playlist">
      <div class="information">
        Playlist
        <hr>
      </div>
      <div class="amplitude-song-container amplitude-play-pause playlist-item" amplitude-song-index="0">
        <img src="/song_TheCrystalMethod-Emulator.jpg" class="album-art"/>
        <div class="playlist-meta">
          <div class="now-playing-title">Emulator</div>
          <div class="album-information">The Crystal Method - Emulator (Single)</span></div>
        </div>
        <div style="clear: both;"></div>
      </div>
      <div class="amplitude-song-container amplitude-play-pause playlist-item" amplitude-song-index="1">
        <img src="/song_NickyRomero-SymphonicaThibaultRemix.jpg" class="album-art"/>
        <div class="playlist-meta">
          <div class="now-playing-title">Symphonica (Thibault Remix)</div>
          <div class="album-information">Thibault - Nicky Romero Remixes</span></div>
        </div>
        <div style="clear: both;"></div>
      </div>
      <div class="amplitude-song-container amplitude-play-pause playlist-item" amplitude-song-index="2">
        <img src="/song_YogiBurial.jpg" class="album-art"/>
        <div class="playlist-meta">
          <div class="now-playing-title">Burial feat. Pusha T</div>
          <div class="album-information">Yogi - YOGI</span></div>
        </div>
        <div style="clear: both;"></div>
      </div>
    </div>  
    <!-- End Playlist -->

    <div class="footer">
     
    </div>
  </div>

</div>
  <script type="text/javascript">
    Amplitude.init({
      "songs": [
        {
          "name": "Emulator",
          "artist": "The Crystal Method",
          "album": "Emulator (Single)",
          "url": "https://soundcloud.com/the-crystal-method/emulator",
          "cover_art_url": "/song_TheCrystalMethod-Emulator.jpg"
        },
        {
          "name": "Symphonica (Thibault Remix)",
          "artist": "Thibault",
          "album": "Nicky Romero Remixes",
          "url": "https://soundcloud.com/thibaultmusic/nicky-romero-symphonica",
          "cover_art_url": "/song_NickyRomero-SymphonicaThibaultRemix.jpg"
        },
        {
          "name": "Burial feat. Pusha T",
          "artist": "Yogi",
          "album": "YOGI",
          "url": "https://soundcloud.com/yogitrf/yogi-burial-feat-pusha-t",
          "cover_art_url": "/song_YogiBurial.jpg"
        }
      ],
      "soundcloud_client": '7f4a6ed1488c1ebdf31600767b9b6350',
      "default_album_art": "/no-cover-large.png"
    });
    var expanded = false;
    var playlistEpxanded = false;
    /*
      jQuery Visual Helpers
    */
    $('#small-player').hover(function(){
      $('#small-player-middle-controls').show();
      $('#small-player-middle-meta').hide();
    }, function(){
      $('#small-player-middle-controls').hide();
      $('#small-player-middle-meta').show();
    });
    $('#top-large-album').hover(function(){
      $('#top-header').show();
      $('#small-player').show();
    }, function(){
      if( !$('#top-header').is(':hover') && !$('#small-player').is(':hover') ){
        $('#top-header').fadeOut(1000);
        $('#small-player').fadeOut(1000);
      }
    });
    $('#top-header').hover(function(){
      $('#top-header').show();
      $('#small-player').show();
    }, function(){
    });
    /*
      Toggles Album Art
    */
    $('#small-player-toggle').click(function(){
      $('.hidden-on-collapse').show();
      $('.hidden-on-expanded').hide();
      /*
        Is expanded
      */
      expanded = true;
      $('#small-player').css('border-top-left-radius', '0px');
      $('#small-player').css('border-top-right-radius', '0px');
    });
    $('#top-header-toggle').click(function(){
      $('.hidden-on-collapse').hide();
      $('.hidden-on-expanded').show();
      /*
        Is collapsed
      */
      expanded = false;
      $('#small-player').css('border-top-left-radius', '5px');
      $('#small-player').css('border-top-right-radius', '5px');
    });
    $('.playlist-toggle').click(function(){
      if( playlistEpxanded ){
        $('#small-player-playlist').hide();
        $('#small-player').css('border-bottom-left-radius', '5px');
        $('#small-player').css('border-bottom-right-radius', '5px');
        $('#large-album-art').css('border-bottom-left-radius', '5px');
        $('#large-album-art').css('border-bottom-right-radius', '5px');
        playlistEpxanded = false;
      }else{
        $('#small-player-playlist').show();
        $('#small-player').css('border-bottom-left-radius', '0px');
        $('#small-player').css('border-bottom-right-radius', '0px');
        $('#large-album-art').css('border-bottom-left-radius', '0px');
        $('#large-album-art').css('border-bottom-right-radius', '0px');
        playlistEpxanded = true;
      }
    })
  </script>
