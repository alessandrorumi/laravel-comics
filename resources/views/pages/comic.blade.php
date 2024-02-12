@extends('layouts.main-layout')
@section('content')
<div class="comic-img">
  <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="">
</div>

<div class="mc-container d-flex justify-content-between">
  <div class="content p-3">
    <h5>Action Comics #1000: The Deluxe Edition</h5>
    <div class="price-available mt-4 p-2 d-flex justify-content-between mb-3">
      <div class="left">
        <span class="text-secondary">U.S. Price:</span>
        <span class="text-white">$19.99</span>
      </div>
      <div class="right d-flex">
        <div class="available px-2">
          <span class="text-secondary">AVAILABLE</span>
        </div>
        <div class="check">
          <span class="text-white px-2">Check Availability <i class="fa-solid fa-chevron-down"></i></span>
        </div>
      </div>
    </div>
    <div class="description text-secondary">
    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
    </div>
  </div>
  <div class="advert">
    <h6 class="text-end m-0">ADVERTISEMENT</h6>
    <img src="{{ Vite::asset('/resources/img/adv.jpg') }}" alt="">
  </div>
</div>
<div class="authors-container">
  <div class="auth-content d-flex">
    <div class="talent w-50">
      <h6>Talent</h6>
      <hr class="text-secondary">
      <div class="title-text d-flex justify-content-between">
        <div class="title">
          <span>Art by:</span>
        </div>    
        <div class="text text-secondary">
          <span>
            "José Luis García-López",
            "Clay Mann",
            "Rafael Albuquerque",
            "Patrick Gleason",
            "Dan Jurgens",
            "Joe Shuster",
            "Neal Adams",
            "Curt Swan",
            "John Cassaday",
            "Olivier Coipel",
            "Jim Lee"
          </span>
        </div>
      </div>
      <hr class="text-secondary">
      <div class="title-text d-flex justify-content-between">
        <div class="title">
          <span>Written by:</span>
        </div>    
        <div class="text text-secondary">
          <span>
            "Brad Meltzer",
            "Tom King",
            "Scott Snyder",
            "Geoff Johns",
            "Brian Michael Bendis",
            "Paul Dini",
            "Louise Simonson",
            "Richard Donner",
            "Marv Wolfman",
            "Peter J. Tomasi",
            "Dan Jurgens",
            "Jerry Siegel",
            "Paul Levitz"
          </span>
        </div>
      </div>
    </div>
    <div class="specs w-50">
      <h6>Specs</h6>
      <hr class="text-secondary">
      <div class="title-text d-flex">
        <div class="title">
          <span>Series:</span>
        </div>
        <div class="text text-secondary">
          <span>Action Comics</span>
        </div>
      </div>
      <hr class="text-secondary">
      <div class="title-text d-flex">
        <div class="title">
          <span>U.S. Price:</span>
        </div>
        <div class="text text-secondary">
          <span>$19.99</span>
        </div>
      </div>
      <hr class="text-secondary">
      <div class="title-text d-flex">
        <div class="title">
          <span>On Sale Date:</span>
        </div>
        <div class="text text-secondary">
          <span>2018-10-02</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection