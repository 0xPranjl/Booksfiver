<?php
include 'connection.php';
$email=$_COOKIE['email'];
$cat=$_GET['cat'];
$id=$_GET['book'];
$q1="SELECT * FROM product_info WHERE sn='$id'";
$reso=mysqli_query($conn,$q1);
while($rt=mysqli_fetch_assoc($reso)){
  $title=$rt['title'];
  $price=$rt['price'];
  $product=$title;
  $image=$rt['Image_link1'];
  $u="uploads/";
  $f=$u.$image;
}

$querys="SELECT * FROM product_info WHERE title='$product' ORDER BY price DESC LIMIT 1";
$lb=mysqli_query($conn,$querys);
while($row=mysqli_fetch_assoc($lb)){
    $max_price=$row['price'];
}
$queryt="SELECT * FROM product_info WHERE title='$product' ORDER BY price ASC LIMIT 1";
$lbp=mysqli_query($conn,$queryt);
while($row=mysqli_fetch_assoc($lbp)){
    $min_price=$row['price'];
}
$ranger=$max_price-$min_price;
$per_range=$ranger/5;
$p1=$min_price+$per_range;
$p2=$p1+$per_range+1;
$p3=$p2+$per_range+1;
$p4=$p3+$per_range+1;
$range1=$min_price."-".$p1;
$range2=$p1."-".$p2;
$range3=$p2."-".$p3;
$range4=$p3."-".$p4;
$range5=$p4."-".$max_price;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
      $(document).ready(function(){
          $("#myModal").modal('show');
          $("#slide").slideUp(2000);
      });
  </script>
  <style>
body {
  font-size: 16px;
  font-family: "Helvetica", "Arial", sans-serif;
  text-align: center;
  background-color: #f8faff;
}

* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body { font-family: sans-serif; }

.gallery {
  background: #EEE;
}

.gallery-cell {
  width: 66%;
  height: 200px;
  margin-right: 10px;
  background: #8C8;
  counter-increment: gallery-cell;
}

/* cell number */
.gallery-cell:before {
  display: block;
  text-align: center;
  content: counter(gallery-cell);
  line-height: 200px;
  font-size: 80px;
  color: white;
}
/**
 * Carousel.sass
 * @author: Dang Van Thanh
 * @github: https://github.com/dangvanthanh/carousel.sass
 * @description: A Simple Carousel Pure CSS Using Sass
 * @version: 1.0.0
 */
%animation-default {
  opacity: 1 !important;
  z-index: 3;
}

@mixin carousel($items, $animation: 'default') {
  .carousel {
    width: 100%;
    position: relative;
    overflow: hidden;

    > input[type="radio"] {
      position: absolute;
      left: 0;
      opacity: 0;
      top: 0;

      &:checked {
        ~ .carousel__items .carousel__item,
        ~ .carousel__prev > label,
        ~ .carousel__next > label {
          opacity: 0;
        }
      }

      @for $i from 1 through $items {
        &:nth-child(#{$i}) {
          &:checked {
            ~ .carousel__items .carousel__item {
              @if $animation == 'default' {
                &:nth-child(#{$i}) {
                  opacity: 1;
                }
              }
            }

            ~ .carousel__prev {
              > label {
                @if $i == 1 {
                  &:nth-child(#{$items}) {
                    @extend %animation-default;
                  }
                } @else if $i == $items {
                  &:nth-child(#{$items - 1}) {
                    @extend %animation-default;
                  }
                } @else {
                  &:nth-child(#{$i - 1}) {
                    @extend %animation-default;
                  }
                }
              }
            }

            ~ .carousel__next {
              > label {
                @if $i == $items {
                  &:nth-child(1) {
                    @extend %animation-default;
                  }
                } @else {
                  &:nth-child(#{$i + 1}) {
                    @extend %animation-default;
                  }
                }
              }
            }

            ~ .carousel__nav {
              > label {
                &:nth-child(#{$i}) {
                  background: #ccc;
                  cursor: default;
                  pointer-events: none;
                }
              }
            }
          }
        }
      }
    }

    &__items {
      margin: 0;
      padding: 0;
      list-style-type: none;
      width: 100%;
      height: 600px;
      position: relative;
    }

    &__item {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
      transition: opacity 2s;
      -webkit-transition: opacity 2s;

      img {
        width: 100%;
        vertical-align: middle;
      }
    }

    &__prev,
    &__next {
      > label {
        border: 1px solid #fff;
        border-radius: 50%;
        cursor: pointer;
        display: block;
        width: 40px;
        height: 40px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        transition: all .3s ease;
        -webkit-transition: all .3s ease;
        opacity: 0;
        z-index: 2;

        &:hover,
        &:focus {
          opacity: .5 !important;
        }

        &:before,
        &:after {
          content: "";
          position: absolute;
          width: inherit;
          height: inherit;
        }

        &:before {
          background: linear-gradient(to top, #fff 0%, #fff 10%, rgba(51, 51, 51, 0) 10%),
                      linear-gradient(to left, #fff 0%, #fff 10%, rgba(51, 51, 51, 0) 10%);
          width: 60%;
          height: 60%;
          top: 20%;
        }
      }
    }

    &__prev {
      > label {
        left: 2%;

        &:before {
          left: 35%;
          top: 20%;
          transform: rotate(135deg);
          -webkit-transform: rotate(135deg);
        }
      }
    }

    &__next {
      > label {
        right: 2%;

        &:before {
          left: 10%;
          transform: rotate(315deg);
          -webkit-transform: rotate(315deg);
        }
      }
    }

    &__nav {
      position: absolute;
      bottom: 3%;
      left: 0;
      text-align: center;
      width: 100%;
      z-index: 3;

      > label {
        border: 1px solid #fff;
        display: inline-block;
        border-radius: 50%;
        cursor: pointer;
        margin: 0 .125%;
        width: 20px;
        height: 20px;
      }
    }
  }
}

*,
*:before,
*:after {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
}

body {
  background: #fcfcfc;
  margin: 0;
}

.container {
  width: 900px;
  min-width: 900px;
  margin: 50px auto;
}

@include carousel(5);

.bubbly-button {
  font-family: "Helvetica", "Arial", sans-serif;
  display: inline-block;
  font-size: 1em;
  padding: 1em 2em;
  margin-top: 25px;
  -webkit-appearance: none;
  appearance: none;
  background-color: #ff0081;
  color: #fff;
  border-radius: 4px;
  border: none;
  cursor: pointer;
  position: relative;
  transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;
  box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);
}
.bubbly-button:focus {
  outline: 0;
}
.bubbly-button:before, .bubbly-button:after {
  position: absolute;
  content: "";
  display: block;
  width: 140%;
  height: 100%;
  left: -20%;
  z-index: -1000;
  transition: all ease-in-out 0.5s;
  background-repeat: no-repeat;
}
.bubbly-button:before {
  display: none;
  top: -75%;
  background-image: radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 20%, #ff0081 20%, transparent 30%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 10%, #ff0081 15%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%);
  background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%;
}
.bubbly-button:after {
  display: none;
  bottom: -75%;
  background-image: radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, transparent 10%, #ff0081 15%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%), radial-gradient(circle, #ff0081 20%, transparent 20%);
  background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%;
}
.bubbly-button:active {
  transform: scale(0.9);
  background-color: #e60074;
  box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2);
}
.bubbly-button.animate:before {
  display: block;
  animation: topBubbles ease-in-out 0.75s forwards;
}
.bubbly-button.animate:after {
  display: block;
  animation: bottomBubbles ease-in-out 0.75s forwards;
}

@keyframes topBubbles {
  0% {
    background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
  }
  50% {
    background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;
  }
  100% {
    background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;
    background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
  }
}
@keyframes bottomBubbles {
  0% {
    background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;
  }
  50% {
    background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;
  }
  100% {
    background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;
    background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
  }
}
    .wrapper:hover #slide {
    transition: 1s;
    left: 0;
}
.container {
  padding: 2rem 0rem;

}

h4 {
  margin: 2rem 0rem;
}

.panel {
  border-radius: 4px;
  padding: 1rem;
  margin-top: 0.2rem;
  background-color: #F5F5F5;
  color: #323B40;
}
.panel.panel-blue {
  background-color: #E0F5FF;
  color: #00A5FA;
}
.panel.panel-big-height {
  min-height: 150px;
}

.item {
  border-radius: 4px;
  padding: 0.5rem;
  margin: 0.2rem;
  
}
.container{ 
   height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left:25px;
}
@media only screen and (max-width: 600px) {
 .container{ 
   height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
}
.item.item-blue {
  background-color: #B9E5FE;
  color: #00A5FA;
  
}
.item.item-green {
  background-color: #B7E0DC;
  color: #019888;
}
.item.item-lime {
  background-color: #C7E8C8;
  color: #42B045;
}
body {
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizelegibility;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

.range {
  width: 234px;
  height: 48px;
  border: 0;
  background: #626CE4;
  position: absolute;
  top: 45%;
  left: 50%;
  margin-left: -117px;
}
.range:before, .range:after {
  content: "";
  position: absolute;
  top: 0;
  z-index: -1;
  height: 100%;
  width: 28px;
  background: #626CE4;
  pointer-events: none;
}
.range:before {
  left: -28px;
  border-radius: 5px 0 0 5px;
}
.range:after {
  right: -28px;
  border-radius: 0 5px 5px 0;
}
.range input {
  -webkit-appearance: none;
  position: absolute;
  width: calc(100% + 40px);
  height: 100%;
  margin: 0;
  background-color: transparent;
  outline: none;
  left: -20px;
  -webkit-tap-highlight-color: transparent;
}
.range input::-webkit-slider-thumb, .range input::-webkit-media-slider-thumb {
  opacity: 0;
}
@media screen and (max-width: 768px) {
  .range input:hover + .range-thumb, .range input:active + .range-thumb {
    transform: translateY(-48px);
  }
}
.range input:hover + .range-thumb::before, .range input:active + .range-thumb::before {
  display: block;
}

.lbl-lft, .lbl-rgt {
  position: absolute;
  top: -15px;
  color: #1a1a1a;
  font-size: 12px;
  font-weight: 700;
}

.lbl-lft {
  left: -28px;
}

.lbl-rgt {
  right: -28px;
  text-align: left;
}

.range-thumb {
  position: absolute;
  top: 0px;
  margin-left: -24px;
  border-radius: 50%;
  border: 5px solid #626CE4;
  background: white;
  height: 48px;
  width: 48px;
  outline: none;
  transition: transform 0.3s ease;
  text-align: center;
  font-size: 12px;
  line-height: 38px;
  color: #1a1a1a;
  font-weight: 700;
  pointer-events: none;
}
.range-thumb::before {
  display: none;
  content: "";
  position: absolute;
  z-index: 1;
  top: 53px;
  left: 50%;
  transform: translateX(-50%);
  border-radius: 3px;
  width: 2px;
  height: 28px;
  margin-left: -3px;
  background: rgba(255, 255, 255, 0.25);
  box-shadow: 6px 0 0 rgba(255, 255, 255, 0.25);
}
.range-thumb::after {
  content: "";
  position: absolute;
  bottom: -5px;
  left: -5px;
  width: 48px;
  height: 10px;
  background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNDhweCIgaGVpZ2h0PSIxMHB4IiB2aWV3Qm94PSIwIDAgNDggMTAiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQ3ICg0NTM5NikgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+Q29tYmluZWQgU2hhcGU8L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iQXJ0Ym9hcmQiIGZpbGw9IiM2MTY4RTciPgogICAgICAgICAgICA8cGF0aCBkPSJNMTEuMTU0NjA2NCwyLjE4MjkyMDUxZS0xMiBMNC40NzIyMTMwMSwyLjE4MjkyMDUxZS0xMiBDNS40MjIyOTI4NiwxLjA2MTUxMjk4IDYsMi40NjMyOTExMyA2LDQgQzYsNy4zMTM3MDg1IDMuMzEzNzA4NSwxMCAwLDEwIEw0OCwxMCBDNDQuNjg2MjkxNSwxMCA0Miw3LjMxMzcwODUgNDIsNCBDNDIsMi40NjMyOTExMyA0Mi41Nzc3MDcxLDEuMDYxNTEyOTggNDMuNTI3Nzg3LDAgTDQzLjUyNzc4NywyLjE4MjkyMDUxZS0xMiBMMzYuODQ1MzkzNiwyLjE4MjkyMDUxZS0xMiBDMzMuNDYzMzI1NSwzLjEwNDc5MzA5IDI4Ljk1Mjk4NzQsNSAyNCw1IEMxOS4wNDcwMTI2LDUgMTQuNTM2Njc0NSwzLjEwNDc5MzA5IDExLjE1NDYwNjQsMi4xOTQyNDQ3OWUtMTIgWiIgaWQ9IkNvbWJpbmVkLVNoYXBlIj48L3BhdGg+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=");
  background-repeat: no-repeat;
  background-position: center;
}

.resize {
  position: fixed;
  bottom: 20px;
  left: 0;
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: 500;
  color: #C8CCD4;
}
.item.item-yellow {
  background-color: #FFEEBA;
  color: #FF9901;
}
.item.item-pink {
  background-color: #FABAD0;
  color: #EF075F;
}
.item.item-red {
  background-color: #FEC9C6;
  color: #FD3D08;
}
.item.item-big-width {
  min-width: 380px;
}
* {
  margin: 0;
  padding: 0;
}

body {
  height: 100vh;
  font-family: "Roboto", sans-serif;
  
}

.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.box-minmax {
  margin-top: 30px;
  width: 300px;
  display: flex;
  justify-content: space-between;
  font-size: 20px;
  color: 	#800080;
}
.box-minmax span:first-child {
  margin-left: 0px;
}

.range-slider {
  margin-top: 30vh;
}

.rs-range {
  margin-top: 29px;
  width: 300px;
  -webkit-appearance: none;
}
.rs-range:focus {
  outline: none;
}
.rs-range::-webkit-slider-runnable-track {
  width: 100%;
 height: 1px;
  cursor: pointer;
  box-shadow: none;
  background: 	#800080;
  border-radius: 0px;
  border: 0px solid #010101;
}
.rs-range::-moz-range-track {
  width: 100%;
  height: 1px;
  cursor: pointer;
  box-shadow: none;
  background: #ffffff;
  border-radius: 0px;
  border: 0px solid #010101;
}
.rs-range::-webkit-slider-thumb {
  box-shadow: none;
  border: 0px solid #ffffff;
  box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25);
  height: 42px;
  width: 22px;
  border-radius: 22px;
  background: white;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -20px;
}
.rs-range::-moz-range-thumb {
  box-shadow: none;
  border: 0px solid #ffffff;
  box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25);
  height: 42px;
  width: 22px;
  border-radius: 22px;
  background: white;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -20px;
}
.rs-range::-moz-focus-outer {
  border: 0;
}

.rs-label {
  position: relative;
  transform-origin: center center;
  display: block;
  width: 98px;
  height: 98px;
  background: transparent;
  border-radius: 50%;
  line-height: 30px;
  text-align: center;
  font-weight: bold;
  padding-top: 22px;
  box-sizing: border-box;
  border: 2px solid #fff;
  margin-top: 20px;
  margin-left: -360px;
  left: attr(value);
  color: #800080;
  font-style: normal;
  font-weight: normal;
  line-height: normal;
  font-size: 36px;
}
.rs-label::after {
  content: "₹";
  display: block;
  font-size: 20px;
  letter-spacing: 0.07em;
  margin-top: -2px;
}


.carousel {
  width: 300px;
  height: 100%;
  border-radius: 3px;
  margin-left:auto;
  margin-right:auto;
  overflow: hidden;
  position: relative;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
}
.carousel:hover .controls {
  opacity: 1;
}
.carousel .controls {
  opacity: 0;
  display: flex;
  position: absolute;
  top: 50%;
  left: 0;
  justify-content: space-between;
  width: 100%;
  z-index: 99999;
 
}
.igo{
  width: 280px;
  height: 350px;
}
.carousel .controls .control {
  margin: 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.7);
  opacity: 0.5;

  cursor: pointer;
}
.carousel .controls .control:hover {
  opacity: 1;
}
.carousel .slides {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  display: flex;
  width: 100%;
  min-height: 100%;
  height: 100%;

}
.carousel .slides .slide {
  min-width: 100%;
  min-height: 100%;
  height: 100%;
}

.carousel1 {
  width: 360px;
  height: 400px;
  border-radius: 3px;
  margin-left:auto;
  margin-right:auto;
  overflow: hidden;
  position: relative;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
}
.carousel1:hover .controls1 {
  opacity: 1;
}
.carousel1 .controls1 {
  opacity: 0;
  display: flex;
  position: absolute;
  top: 50%;
  left: 0;
  justify-content: space-between;
  width: 100%;
  z-index: 99999;
 
}
.carousel1 .controls1 .control1 {
  margin: 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.7);
  opacity: 0.5;

  cursor: pointer;
}
.carousel1 .controls1 .control1:hover {
  opacity: 1;
}
.carousel1 .slides1 {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  display: flex;
  width: 100%;
  min-height: 100%;
  height: 100%;

}
.carousel1 .slides1 .slide1 {
  min-width: 100%;
  min-height: 100%;
  height: 100%;
}
html,body {
margin:0;
padding:0;
margin: 0px;
    padding: 0px;
width:100%;
    overflow-x:hidden;
}
    </style>
  </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BooksFiver</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
          </ul>
          <span class="navbar-text">
            Navbar text with an inline element
          </span>
        </div>
      </nav>
      <div class="container" style='margin-left:-250px;'>
      <div class="row" >
      <?php
$queryt="SELECT * FROM product_info WHERE title='$product' ORDER BY price ASC LIMIT 1";
$lbp=mysqli_query($conn,$queryt);
while($row=mysqli_fetch_assoc($lbp)){
  $title = $row['title'];
  $min_price=$row['price'];
  $image=$row['Image_link1'];
  $idm=$row['sn'];
  $image1=$row['Image_link2'];
  $v1=$row['Image_link3'];
  $lnk="'apay.php?sn=".$idm."'";
  $u="upload/";
  $f=$u.$image;
  $f1=$u.$image1;
  $v=$u.$v1;
  echo "<div id='carouselExampleControls2' class='carousel slide' data-ride='carousel'>
  <div class='carousel-inner'>
    <div class='carousel-item active'>
      <img class='igo'  src=".$f." alt='First slide'>
    </div>
    <div class='carousel-item'>
      <img class='igo' src=".$f1." alt='Second slide'>
    </div>
    <div class='carousel-item'>
      <video class='igo' src=".$v." controls>
    </div>
  </div>
  <a class='carousel-control-prev' href='#carouselExampleControls2' role='button' data-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='sr-only'>Previous</span>
  </a>
  <a class='carousel-control-next' href='#carouselExampleControls2' role='button' data-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='sr-only'>Next</span>
  </a>
</div><br>";

}


?>
</div>
<br>
<br>
<a href="<?php echo $lnk;?>"><button class='bubbly-button'>Buy Now</button></a><br><br><br>
<h2 style='color:green;'>₹<?php echo $title;?></h2>
<h4 style='color:green;'>₹<?php echo $max_price;?></h4>
<script>
  var rangeSlider = document.getElementById("rs-range-line");
var rangeBullet = document.getElementById("rs-bullet");

rangeSlider.addEventListener("input", showSliderValue, false);

function showSliderValue() {
  rangeBullet.innerHTML = rangeSlider.value;
  var bulletPosition = (rangeSlider.value /rangeSlider.max);
  rangeBullet.style.left = (bulletPosition * 578) + "px";
  var title = "hcv part 2";
  var rangeInput = document.getElementById("rs-range-line").value;
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("pagal").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "bargain.php?price=" +rangeSlider.value+"&title="+title, true);
    xmlhttp.send();
}

  </script>
    <script>
  var rangeInpt = document.getElementById("rs-range-line");
rangeInpt.addEventListener('', function() {
 
});
</script>
<script>
  $(".btn-link").click(function(){
    $("#badal").hide();
    $("#loto").toggle();
  $("#po").hide();
  });
  </script>
<script>
  var animateButton = function(e) {

e.preventDefault;
//reset animation
e.target.classList.remove('animate');

e.target.classList.add('animate');
setTimeout(function(){
  e.target.classList.remove('animate');
},700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
bubblyButtons[i].addEventListener('click', animateButton, false);
}
  </script>
  <script>
  const delay = 30000; //ms

const slides = document.querySelector(".slides");
const slidesCount = slides.childElementCount;
const maxLeft = (slidesCount - 1) * 100 * -1;

let current = 0;

function changeSlide(next = true) {
  if (next) {
    current += current > maxLeft ? -100 : current * -1;
  } else {
    current = current < 0 ? current + 100 : maxLeft;
  }

  slides.style.left = current + "%";
}

let autoChange = setInterval(changeSlide, delay);
const restart = function() {
  clearInterval(autoChange);
  autoChange = setInterval(changeSlide, delay);
};

// Controls
document.querySelector(".next-slide").addEventListener("click", function() {
  changeSlide();
  restart();
});

document.querySelector(".prev-slide").addEventListener("click", function() {
  changeSlide(false);
  restart();
});

    </script>
      <script>
  const delay = 30000; //ms

const slides = document.querySelector(".slides1");
const slidesCount = slides.childElementCount;
const maxLeft = (slidesCount - 1) * 100 * -1;

let current = 0;

function changeSlidep(next = true) {
  if (next) {
    current += current > maxLeft ? -100 : current * -1;
  } else {
    current = current < 0 ? current + 100 : maxLeft;
  }

  slides.style.left = current + "%";
}

let autoChange = setInterval(changeSlidep, delay);
const restart = function() {
  clearInterval(autoChange);
  autoChange = setInterval(changeSlidep, delay);
};

// Controls
document.querySelector(".next-slide1").addEventListener("click", function() {
  changeSlidep();
  restart();
});

document.querySelector(".prev-slide1").addEventListener("click", function() {
  changeSlidep(false);
  restart();
});

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>7