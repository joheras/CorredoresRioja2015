<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Acl\Tests\Domain;

use PHPUnit\Framework\TestCase;

class AuditLoggerTest extends TestCase
{
    /**
     * @dataProvider getTestLogData
     */
    public function testLogIfNeeded($granting, $audit)
    {
        $logger = $this->getLogger();
        $ace = $this->getEntry();

        if (true === $granting) {
            $ace
                ->expects($this->once())
                ->method('isAuditSuccess')
                ->will($this->returnValue($audit))
            ;

            $ace
                ->expects($this->never())
                ->method('isAuditFailure')
            ;
        } else {
            $ace
                ->expects($this->never())
                ->method('isAuditSuccess')
            ;

            $ace
                ->expects($this->once())
                ->method('isAuditFailure')
                ->will($this->returnValue($audit))
            ;
        }

        if (true === $audit) {
            $logger
                ->expects($this->once())
                ->method('doLog')
                ->with($this->equalTo($granting), $this->equalTo($ace))
            ;
        } else {
            $logger
                ->expects($this->never())
                ->method('doLog')
            ;
        }

        $logger->logIfNeeded($granting, $ace);
    }

    public function getTestLogData()
    {
        return array(
            array(true, false),
            array(true, true),
            array(false, false),
            array(false, true),
        );
    }

    protected function getEntry()
    {
        return $this->getMockBuilder('Symfony\Component\Security\Acl\Model\AuditableEntryInterface')->getMock();
    }

    protected function getLogger()
    {
        return $this->getMockForAbstractClass('Symfony\Component\Security\Acl\Domain\AuditLogger');
    }
}
