<?php
/**
 * Created by PhpStorm.
 * User: Dani
 */

namespace DesignPrinciples\ISP;


interface InterfaceWorker extends InterfaceFeedable, InterfaceWorkable
{
}

interface InterfaceWorkable
{
    public function work();
}

interface InterfaceFeedable
{
    public function eat();
}

class Worker implements InterfaceWorkable, InterfaceFeedable
{
    public function work()
    {
        return "worker";
    }

    public function eat()
    {
        return "rice";
    }
}

class Robot implements InterfaceWorkable
{

    public function work()
    {
        return "Robot";
    }
}

class SuperWorker implements InterfaceWorkable, InterfaceFeedable
{
    public function work()
    {
        return "super worker";
    }

    public function eat()
    {
        return "chicken";
    }
}

class Manager
{
    private $worker;

    public function setWorker(InterfaceWorkable $worker)
    {
        $this->worker = $worker;
    }

    public function manage()
    {
        return "manage " . $this->worker->work();
    }
}

$manager = new Manager();

$worker = new Worker();
$robot = new Robot();

$manager->setWorker($worker);
echo $manager->manage() . "<br>";

$manager->setWorker($robot);
echo $manager->manage() . "<br>";