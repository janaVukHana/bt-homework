<?php

function rectangle_surface($a, $b) {
    return $a * $b;
}

function circle_surface($r) {
    return pow($r, 2) * pi();
}

function strange_shape_surface($a, $b, $r) {
    return rectangle_surface($a, $b) + (circle_surface($r) / 2);
}

function add_three_shapes_surface($a, $b, $r, $c, $d) {
    return rectangle_surface($a, $b) + circle_surface($r) + strange_shape_surface($c, $d, $r);
}

echo 'RECTANGLE SURFACE: ' . rectangle_surface(2, 3) . '<br>';
echo 'CIRCLE SURFACE: ' . circle_surface(5) . '<br>';
echo 'STRANGE SHAPE SURFACE: ' . strange_shape_surface(2,3,5) . '<br>';
echo 'THREE SHAPES SURFACE: ' . add_three_shapes_surface(2, 3, 5, 2, 3) . '<br>';

