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
    /**
     * @return mixed
     */
    public function work();
}

interface InterfaceFeedable
{
    /**
     * @return mixed
     */
    public function eat();
}

class Worker implements InterfaceWorkable, InterfaceFeedable
{
    /**
     * @return string
     */
    public function work()
    {
        return "worker";
    }

    /**
     * @return string
     */
    public function eat()
    {
        return "rice";
    }
}

class Robot implements InterfaceWorkable
{

    /**
     * @return string
     */
    public function work()
    {
        return "Robot";
    }
}

class SuperWorker implements InterfaceWorkable, InterfaceFeedable
{
    /**
     * @return string
     */
    public function work()
    {
        return "super worker";
    }

    /**
     * @return string
     */
    public function eat()
    {
        return "chicken";
    }
}

class Manager
{
    private $worker;

    /**
     * @param InterfaceWorkable $worker
     */
    public function setWorker(InterfaceWorkable $worker)
    {
        $this->worker = $worker;
    }

    /**
     * @return string
     */
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