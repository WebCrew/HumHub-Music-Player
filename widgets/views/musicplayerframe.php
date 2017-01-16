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


Amplitude.init({
    "volume": .35,
    "songs": [
        {
            "name": "Burial",
            "artist": "YOGI feat Pusha T - Burial",
            "album": "YOGI remixes",
            "url": "https://soundcloud.com/yogitrf/yogi-feat-pusha-t-burial-skrillex-trollphace-remix",
            "cover_art_url": "http://upload.wikimedia.org/wikipedia/commons/3/3a/RHCP_Logo.svg"
        },
        {
            "name": "Hell Of A Night",
            "artist": "Schoolboy Q (YOGI Remix)",
            "album": "YOGI remixes",
            "url": "https://soundcloud.com/yogitrf/schoolboy-q-hell-of-a-night"
        },
        {
            "name": "Christian Bale",
            "artist": "YOGI Feat. Casey Veggies, Knytro, Sway, KSI, Raptor",
            "album": "Christian Bale feat. Casey Veggies, Knytro, Sway, KSI, Raptor",
            "url": "https://soundcloud.com/yogitrf/yogi-christian-bale-feat-casey-veggies-knytro-sway-ksi-raptor?in=yogitrf/sets/burial-ep"
        }
    ],
    "soundcloud_client": 'YOUR KEY'
});
