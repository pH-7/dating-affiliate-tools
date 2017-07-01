<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Tests\Service\Provider\Prelinker;

use DAT\Service\Identifier\Affiliate;
use DAT\Service\Provider\Prelinker\EasyFlirt;
use PHPUnit_Framework_TestCase;

class EasyFlirtTest extends PHPUnit_Framework_TestCase
{
    /** @var Affiliate */
    private $affiliateId;

    /** @var EveFlirt */
    private $everFlirt;

    protected function setUp()
    {
        $this->affiliateId = new Affiliate(4440);
        $this->everFlirt = new EasyFlirt($this->affiliateId);
    }

    public function testUrl()
    {
        $this->assertSame('https://www.easyflirt.com', $this->everFlirt->getUrl());
    }

    public function testFormAction()
    {
        $this->assertSame('?pr=4440', $this->everFlirt->getFormAction());
    }
}