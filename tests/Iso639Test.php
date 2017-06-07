<?php
/*
 * This file is part of the GlobalState package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gmo\Iso639;

use PHPUnit_Framework_TestCase;

/**
 */
class Iso639Test extends PHPUnit_Framework_TestCase
{
    public function testEnglishLanguage()
    {
        $languages = new Languages;
        $english = [];
        $args = array(
            'Code1' => 'en',
            'Code2t' => 'eng',
            'Code2b' => 'eng',
            'Code3' => 'eng',
            'Name' => 'English'
        );
        foreach($args as $what => $code) {
            $method = "findBy{$what}";
            $this->assertTrue(method_exists($languages,$method));
            $english[$what] = $languages->$method($code);
        }

        foreach($english as $what => $language) {
            $this->assertEquals('en',$language->code1());
            $this->assertEquals('eng',$language->code2t());
            $this->assertEquals('eng',$language->code2b());
            $this->assertEquals('eng',$language->code3());
            $this->assertEquals('English',$language->name());
            $this->assertEquals('English',$language->nativeName());
        }
    }

    public function testListOfLanguages()
    {
        $list = (new Languages)->getLanguages();
        foreach($list as $language) {
            $this->assertInstanceOf('Gmo\\Iso639\\Language',$language);
        }
    }
    /**
     * @expectedException Gmo\Iso639\UnknownLanguage
     */
    public function testUnknownLanguage()
    {
        (new Languages)->findByName("Ameisisch");
    }

    public function testIterator()
    {
        $iterator = (new Languages)->getIterator();
        $this->assertInstanceOf('ArrayIterator',$iterator);
        while($iterator->valid()) {
            $language = $iterator->current();
            $this->assertInstanceOf('Gmo\\Iso639\\Language',$language);
            $iterator->next();
        }
    }
}
