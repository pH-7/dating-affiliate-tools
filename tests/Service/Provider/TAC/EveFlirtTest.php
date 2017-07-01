<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Tests\Service\Provicer\TAC;

use DAT\Service\Identifier\Affiliate;
use DAT\Service\Provider\TAC\EveFlirt;
use PHPUnit_Framework_TestCase;

class EveFlirtTest extends PHPUnit_Framework_TestCase
{
    /** @var Affiliate */
    private $affiliateId;

    /** @var EveFlirt */
    private $everFlirt;

    protected function setUp()
    {
        $this->affiliateId = new Affiliate(123);
        $this->everFlirt = new EveFlirt($this->affiliateId);
    }

    public function testUrl()
    {
        $this->assertSame('https://www.idilys.com&comfrom=123', $this->everFlirt->getUrl());
    }

    public function testFormAction()
    {
        $this->assertSame('loginSubmit/?cf0=&cf1=P13&degree=soft', $this->everFlirt->getFormAction());
    }
}