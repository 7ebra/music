
<div ng-controller="ArtistController">
  <div class="subnav">
    <a class="button left back" href="#/" ng-click="switchAnimationType('animation-goes-right')">Back</a>
    <h1 class="left">{{artist.name}}</h1>
  </div>

  <div ng-repeat="album in artist.albums | orderBy:'year'">
    <div class="album-area"> 
    <div ng-show="album" class="albumart" cover="{{ artist.album.cover }}"
        albumart="{{ album.name }}" title="{{ album.name }}" ></div> 
      <h2 ng-click="playAlbum(album)" title="{{ album.name }} ({{ album.year}})">{{ album.name }}
        <span ng-show="album.year" class="muted">({{ album.year }})</span>
        <div ng-click="playAlbum(album)" class="albumart" cover="{{ album.cover }}" albumart="{{ album.name }}"></div>
      </h2>
    </div>

    <ul>
      <li class="tracks-area" ng-repeat="track in album.tracks | orderBy:'number'" ng-click="playTrack(track)"> 
        <span class="button expand">
          {{track.number}}. {{ track.title }}
        </span>
      </li>
    </ul> 
  </div>
</div>

<!--   <div class="album-area" ng-repeat="album in artist.albums | orderBy:'year'">
    <h2 ng-click="playAlbum(album)" title="{{ album.name }} ({{ album.year}})">{{ album.name }}
      <span ng-show="album.year" class="muted">({{ album.year }})</span>
    </h2>
    <div ng-click="playAlbum(album)" class="albumart" cover="{{ album.cover }}" albumart="{{ album.name }}"></div>
    <img ng-click="playAlbum(album)" class="play overlay svg" alt="{{ 'Play' | translate }}"
      src="<?php p(OCP\image_path('music', 'play-big.svg')) ?>" />
    <ul class="track-list" ng-init="limit = 5; trackcount = album.tracks.length">
      <li ng-click="playTrack(track)"
        ng-repeat="track in album.tracks | orderBy:'number' | limitTo:limit" title="{{ track.title }}">
        <img class="play svg" alt="{{ 'Play' | translate }}" src="<?php p(OCP\image_path('music', 'play-big.svg')) ?>"
          ng-class="{playing: currentTrack.id == track.id}" />
        <span ng-show="track.number" class="muted">{{ track.number }}.</span>
        {{ track.title }}
      </li>
      <li class="muted" translate translate-n="trackcount"
        translate-plural="Show all {{ trackcount }} songs ..."
        ng-click="limit = album.tracks.length"
        ng-hide="trackcount <= limit || limit != 5"
        >Show all {{ trackcount }} songs ...</li>
      <li class="muted"
        ng-click="limit = 5"
        ng-hide="limit == 5" translate>Show less ...</li>
    </ul>
  </div> -->