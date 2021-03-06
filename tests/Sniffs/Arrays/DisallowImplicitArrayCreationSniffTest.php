<?php declare(strict_types = 1);

namespace SlevomatCodingStandard\Sniffs\Arrays;

use SlevomatCodingStandard\Sniffs\TestCase;

class DisallowImplicitArrayCreationSniffTest extends TestCase
{

	public function testNoErrors(): void
	{
		$report = self::checkFile(__DIR__ . '/data/disallowImplicitArrayCreationNoErrors.php');
		self::assertNoSniffErrorInFile($report);
	}

	public function testErrors(): void
	{
		$report = self::checkFile(__DIR__ . '/data/disallowImplicitArrayCreationErrors.php');

		self::assertSame(5, $report->getErrorCount());

		self::assertSniffError($report, 3, DisallowImplicitArrayCreationSniff::CODE_IMPLICIT_ARRAY_CREATION_USED);
		self::assertSniffError($report, 7, DisallowImplicitArrayCreationSniff::CODE_IMPLICIT_ARRAY_CREATION_USED);
		self::assertSniffError($report, 13, DisallowImplicitArrayCreationSniff::CODE_IMPLICIT_ARRAY_CREATION_USED);
		self::assertSniffError($report, 20, DisallowImplicitArrayCreationSniff::CODE_IMPLICIT_ARRAY_CREATION_USED);
		self::assertSniffError($report, 27, DisallowImplicitArrayCreationSniff::CODE_IMPLICIT_ARRAY_CREATION_USED);
	}

}
