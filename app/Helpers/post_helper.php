<?php

function bgCategory($category)
{
  switch ($category) {
    case 'Fashion':
      echo 'bgb';
      break;
    case 'Teknologi':
      echo 'bgg';
      break;
    case 'Kesehatan':
      echo 'bgr';
      break;
    case 'Gaya Hidup':
      echo 'bgbeg';
      break;
    case 'Bisnis':
      echo 'bgb';
      break;
    case 'Hiburan':
      echo 'bgg';
      break;
    case 'Olahraga':
      echo 'bgr';
      break;

    default:
      echo 'bgbeg';
      break;
  }
}

function color()
{
  $color = ['colorr', 'colorg', 'colorb'];

  $i = array_rand($color);
  return $color[$i];
}
