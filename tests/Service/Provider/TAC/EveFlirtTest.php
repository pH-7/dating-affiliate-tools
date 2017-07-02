<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Tests\Service\Provider\TAC;

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
        $this->assertSame('http://love-rencontre.wekiss.net', $this->everFlirt->getUrl());
    }

    public function testFormAction()
    {
        $this->assertSame('login/registerProcess/?comfrom=123', $this->everFlirt->getFormAction());
    }
}