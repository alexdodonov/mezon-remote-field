<?php
namespace Mezon\Gui\Field\Tests;

class RemoteFieldUnitTest extends \PHPUnit\Framework\TestCase
{

    /**
     * Testing constructor
     */
    public function testConstructorNoSessionId()
    {
        // assertions
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Session id is not defined');

        // test body
        $field = new \Mezon\Gui\Field\RemoteField([
            'name' => 'field-name',
            'text' => 'text',
            'type' => 'external'
        ]);

        // more assertions
        $this->assertEquals('field-name', $field->getNamePrefix());
    }

    /**
     * Testing constructor
     */
    public function testConstructorNoRemoteSource()
    {
        // assertions
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Remote source of records is not defined');

        // test body
        $field = new \Mezon\Gui\Field\RemoteField(
            [
                'name' => 'name',
                'text' => 'text',
                'session-id' => 'sid',
                'type' => 'external'
            ]);
        
        // more assertions
        $this->assertEquals('field-name', $field->getNamePrefix());
    }
}
