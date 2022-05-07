<?php

namespace rmvit\Tests;
use \PHPUnit\Framework\TestCase;
use rmvit\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Рязин Виталий Александрович...', $truncater->truncate('Рязин Виталий Александрович'));
        $this->assertSame('Рязин Вита...', $truncater->truncate('Рязин Виталий Александрович', ['length' => 10]));
        $this->assertSame('Рязин Виталий Александрович...', $truncater->truncate('Рязин Виталий Александрович', ['length' => 50]));
        $this->assertSame('Рязин Виталий Александрович...', $truncater->truncate('Рязин Виталий Александрович', ['length' => -10]));
        $this->assertSame('Рязин Вита*', $truncater->truncate('Рязин Виталий Александрович', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Рязин Виталий Александрович*', $truncater->truncate('Рязин Виталий Александрович', ['separator' => '*']));
    }
}
