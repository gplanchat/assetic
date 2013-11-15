<?php

/*
 * This file is part of the Assetic package, an OpenSky project.
 *
 * (c) 2010-2013 OpenSky Project Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Assetic\Test\Asset;

use Assetic\Asset\StringAsset;
use Assetic\Asset\FileAsset;
use Assetic\Asset\AssetCollection;
use Assetic\Filter\CallablesFilter;

class CompilableAssetCollectionTest extends AssetCollectionTest
{
    public function testDumpFilter()
    {
        $filter = $this->getMock('Assetic\\Filter\\FilterInterface');

        $coll = new AssetCollection(array(new StringAsset('')), array($filter));

        $filter->expects($this->once())->method('filterDump')->with($this->identicalTo($this));

        $coll->dump();
    }
}
