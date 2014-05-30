@extends('layouts.default')

@section('content')

    <br>
    <div class="carousel slide" id="carousel-example">
       <ol class="carousel-indicators">
          <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example" data-slide-to="1"></li>
          <li data-target="#carousel-example" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="http://lorempixel.com/1170/300/technics" alt="Image">
          <div class="carousel-caption">TECHNICS</div>
        </div>
        <div class="item">
          <img src="http://lorempixel.com/1170/300/people" alt="Image">
          <div class="carousel-caption">PEOPLE</div>
        </div>
        <div class="item">
          <img src="http://lorempixel.com/1170/300/business" alt="Image">
          <div class="carousel-caption">BUSINESS</div>
        </div>
      </div>

      <a href="#carousel-example" class="left carousel-control" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a href="#carousel-example" class="right carousel-control" data-slide="next">
        <span class="icon-next"></span>
      </a>

    </div>

@stop