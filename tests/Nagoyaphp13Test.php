<?php

namespace Nanaweb\Nagoyaphp13;

use PHPUnit\Framework\TestCase;

class Nagoyaphp13Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test($input, $expected)
    {
        $this->assertEquals($expected, $this->nagoyaphp13->run($input));
    }

    public function dataProvider()
    {
        return [
            ['aegj', '286/435/971'],
            ['a', '231/456/789'],
            ['e', '183/426/759'],
            ['g', '123/456/978'],
            ['j', '126/459/783'],
            ['bb', '123/645/789'],
            ['jjj', '123/456/789'],
            ['bd', '723/164/589'],
            ['ah', '231/645/789'],
            ['bj', '124/569/783'],
            ['db', '723/561/489'],
            ['dh', '723/615/489'],
            ['dl', '123/456/789'],
            ['hc', '123/645/897'],
            ['gf', '128/453/976'],
            ['hl', '623/745/189'],
            ['ja', '261/459/783'],
            ['ld', '123/456/789'],
            ['ki', '315/486/729'],
            ['lfa', '294/753/186'],
            ['kga', '531/486/972'],
            ['dbi', '372/561/489'],
            ['che', '193/625/847'],
            ['iea', '823/416/759'],
            ['gbl', '523/964/178'],
            ['egj', '186/425/973'],
            ['jcf', '127/456/839'],
            ['djh', '726/915/483'],
            ['hld', '123/645/789'],
            ['leeh', '453/678/129'],
            ['heja', '851/629/743'],
            ['cakh', '251/649/837'],
            ['bhjik', '652/489/713'],
            ['eabji', '483/269/751'],
            ['cdbch', '823/156/974'],
            ['ckgajc', '536/492/817'],
            ['ggchha', '231/564/978'],
            ['gfbkeg', '128/534/697'],
            ['agfbcbf', '239/148/765'],
            ['ekahijf', '123/645/789'],
            ['hajdjbe', '789/432/615'],
            ['elgililj', '976/325/814'],
            ['chffefif', '317/629/845'],
            ['ilbbihak', '462/587/319'],
            ['abcdefghijkl', '123/456/789'],
            ['hkijbglfaced', '768/125/493'],
            ['dfkbjiechlga', '256/387/419'],
            ['hgfkbidlajce', '186/745/239'],
            ['baciefjhgkdl', '153/482/796'],
        ];
    }
}
