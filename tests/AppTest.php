<?php


namespace Nagoya\Doukaku14;


use Nagoya\Doukaku14\Number\PalindromicNumber\EvenLength;
use Nagoya\Doukaku14\Number\PalindromicNumber\OddLength;
use Nagoya\Doukaku14\Number\PalindromicNumberSpecResolver;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    /**
     * @var App
     */
    private $app;

    public function setUp()
    {
        $resolver = new PalindromicNumberSpecResolver();
        $resolver->addSpec(new EvenLength());
        $resolver->addSpec(new OddLength());

        $this->app = new App($resolver);
    }

    public function tearDown()
    {
        $this->app = null;
    }

    private function doTest(string $input, string $expect)
    {
        $this->assertEquals(intval($expect), $this->app->run($input), $input);
    }


    public function test_0()
    {
        $this->doTest("12,34,5", "5");
    }

    public function test_1()
    {
        $this->doTest("10,11,10", "0");
    }

    public function test_2()
    {
        $this->doTest("1,100,3", "18");
    }

    public function test_3()
    {
        $this->doTest("11,12,10", "1");
    }

    public function test_4()
    {
        $this->doTest("12,13,10", "0");
    }

    public function test_5()
    {
        $this->doTest("123,456,7", "33");
    }

    public function test_6()
    {
        $this->doTest("38,274,14", "17");
    }

    public function test_7()
    {
        $this->doTest("98,76543,2", "535");
    }

    public function test_8()
    {
        $this->doTest("987,6543,2", "103");
    }

    public function test_9()
    {
        $this->doTest("5057,5202,3", "2");
    }

    public function test_10()
    {
        $this->doTest("98,76543,21", "589");
    }

    public function test_11()
    {
        $this->doTest("987,6543,21", "264");
    }

    public function test_12()
    {
        $this->doTest("1097,2889,11", "35");
    }

    public function test_13()
    {
        $this->doTest("2764,6482,17", "132");
    }

    public function test_14()
    {
        $this->doTest("16333,24085,8", "121");
    }

    public function test_()
    {
        $this->doTest("21759,67173,20", "114");
    }

    public function test_15()
    {
        $this->doTest("32026,57805,22", "53");
    }

    public function test_16()
    {
        $this->doTest("188318,407853,6", "523");
    }

    public function test_17()
    {
        $this->doTest("51669,116065,30", "72");
    }

    public function test_18()
    {
        $this->doTest("294104,515248,32", "216");
    }

    public function test_19()
    {
        $this->doTest("444257,740280,15", "1316");
    }

    public function test_20()
    {
        $this->doTest("645098,2741620,9", "2876");
    }

    public function test_21()
    {
        $this->doTest("12345,987654321,2", "62684");
    }

    public function test_22()
    {
        $this->doTest("2467130,8433468,2", "2902");
    }

    public function test_23()
    {
        $this->doTest("323901,4712975,10", "4389");
    }

    public function test_24()
    {
        $this->doTest("12345,987654321,36", "67446");
    }

    public function test_25()
    {
        $this->doTest("3969344,4086910,24", "205");
    }

    public function test_26()
    {
        $this->doTest("19743263,83912295,5", "11553");
    }

    public function test_27()
    {
        $this->doTest("6349529,39870823,10", "6637");
    }

    public function test_28()
    {
        $this->doTest("66160071,153732445,5", "5605");
    }

    public function test_29()
    {
        $this->doTest("18799557,189007582,14", "33741");
    }

    public function test_30()
    {
        $this->doTest("78547566,225312226,20", "18346");
    }

    public function test_31()
    {
        $this->doTest("143084571,506549072,18", "62323");
    }

    public function test_32()
    {
        $this->doTest("2099642384,2789567569,6", "14787");
    }
}
