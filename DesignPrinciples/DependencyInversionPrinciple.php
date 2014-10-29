<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 10/29/2014
 * Time: 9:07 PM
 */

namespace DesignPrinciples;


interface InterfaceWorker
{
    /**
     * @return mixed
     */
    public function work();
}

class Worker implements InterfaceWorker
{

    /**
     * @return string
     */
    public function work()
    {
        return "worker";
    }
}

class SuperWorker implements InterfaceWorker
{

    /**
     * @return string
     */
    public function work()
    {
        return "superworker";
    }
}

class Manager
{
    private $worker;

    /**
     * @param InterfaceWorker $worker
     */
    public function setWorker(InterfaceWorker $worker)
    {
        $this->worker = $worker;
    }

    /**
     * @return string
     */
    public function manage()
    {
        return "manage ".$this->worker->work();
    }
}

$manager = new Manager();

$worker = new Worker();
$super_worker = new SuperWorker();

$manager->setWorker($worker);
echo $manager->manage()."<br>";

$manager->setWorker($super_worker);
echo $manager->manage();