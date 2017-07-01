<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Tests\Service\Identifier;

use PHPUnit\Framework\TestCase;
use DAT\Service\Identifier\Affiliate;

class AffiliateTest extends TestCase
{
    public function testValidValue()
    {
        $affiliateId = new Affiliate(32430);
        $this->assertSame(32430, $affiliateId->getValue());
    }

    /**
     * @expectedException \DAT\Service\Identifier\InvalidAffiliateIdException
     */
    public function testInvalidValue()
    {
        new Affiliate('');
    }
}