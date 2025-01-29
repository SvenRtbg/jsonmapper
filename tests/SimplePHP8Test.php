<?php
/**
 * Unit tests for JsonMapper's simple type handling
 *
 * @category Tools
 * @package  JsonMapper
 * @author   Christian Weiske <cweiske@cweiske.de>
 * @license  OSL-3.0 http://opensource.org/licenses/osl-3.0
 * @link     https://github.com/cweiske/jsonmapper
 * @requires PHP 8.0
 */
class SimplePHP8Test extends \PHPUnit\Framework\TestCase
{
    public function testMapToPropertyPromotionAsString()
    {
        $this->markTestSkipped("This is current incorrect behavior, needs a fix");
        $jm = new JsonMapper();
        $this->expectException(JsonMapper_Exception::class);
        $this->expectExceptionMessage("JSON property \"foo\" must be an object, string given");

        $sn = $jm->map(
            json_decode('{"foo":"stringvalue"}'),
            JsonMapperTest_PropertyPromotionPhp8::class
        );
    }

    public function testMapToIntPropertyWithIncorrectPhpdoc()
    {
        $jm = new JsonMapper();
        $sn = $jm->map(
            json_decode('{"foo":42}'),
            JsonMapperTest_PropertyPromotionPhp8::class
        );
        $this->assertSame(42, $sn->foo);
    }

}
