<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Tests\Tool\Client;

use DAT\Service\Provider\Providable;
use DAT\Service\Provider\TAC\EveFlirt;
use DAT\Tool\Client\Registration;
use Phake;
use PHPUnit_Framework_TestCase;

class RegistrationTest extends PHPUnit_Framework_TestCase
{
    /** @var Registration */
    private $registrationMock;

    protected function setUp()
    {
        $providableMock = Phake::mock(Providable::class);
        $this->registrationMock = Phake::partialMock(Registration::class, $providableMock, $this->getUserDataToSend());
    }

    public function testSend()
    {
        $result = $this->registrationMock->send();
        $this->assertTrue($result);
    }

    /**
     * @return array
     */
    private function getUserDataToSend()
    {
        return [
            EveFlirt::EMAIL_FIELD => 'pierrehenrysoria@ph7.me',
            EveFlirt::USERNAME_FIELD => 'pierreS',
            EveFlirt::FIRSTNAME_FIELD => 'Pierre',
            EveFlirt::PASSWORD_FIELD => '12345Hello'
        ];
    }
}
