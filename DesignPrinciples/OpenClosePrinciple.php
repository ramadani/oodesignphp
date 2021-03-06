<?php
/**
 * Created by PhpStorm.
 * User: Dani
 */

namespace DesignPrinciples\OCP;


abstract class Shape
{
    /**
     * @return mixed
     */
    abstract public function draw();
}

class Rectangle extends Shape
{
    /**
     * @return string
     */
    public function draw()
    {
        return "drawing rectangle shape";
    }
}

class Circle extends Shape
{
    /**
     * @return string
     */
    public function draw()
    {
        return "drawing circle shape";
    }
}

class GraphicEditor
{
    /**
     * @param Shape $shape
     * @return mixed
     */
    public function drawShape(Shape $shape)
    {
        return $shape->draw();
    }
}

$editor = new GraphicEditor();

$rectangle = new Rectangle();
$circle = new Circle();

echo $editor->drawShape($rectangle)."<br>";
echo $editor->drawShape($circle);