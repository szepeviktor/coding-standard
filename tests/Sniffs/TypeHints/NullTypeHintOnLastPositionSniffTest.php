<?php declare(strict_types = 1);

namespace SlevomatCodingStandard\Sniffs\TypeHints;

use SlevomatCodingStandard\Sniffs\TestCase;

class NullTypeHintOnLastPositionSniffTest extends TestCase
{

	public function testNoErrors(): void
	{
		$report = self::checkFile(__DIR__ . '/data/nullTypeHintOnLastPositionNoErrors.php');
		self::assertNoSniffErrorInFile($report);
	}

	public function testErrors(): void
	{
		$report = self::checkFile(__DIR__ . '/data/nullTypeHintOnLastPositionErrors.php');

		self::assertSame(8, $report->getErrorCount());

		self::assertSniffError($report, 7, NullTypeHintOnLastPositionSniff::CODE_NULL_TYPE_HINT_NOT_ON_LAST_POSITION);
		self::assertSniffError($report, 11, NullTypeHintOnLastPositionSniff::CODE_NULL_TYPE_HINT_NOT_ON_LAST_POSITION);
		self::assertSniffError($report, 15, NullTypeHintOnLastPositionSniff::CODE_NULL_TYPE_HINT_NOT_ON_LAST_POSITION);
		self::assertSniffError($report, 19, NullTypeHintOnLastPositionSniff::CODE_NULL_TYPE_HINT_NOT_ON_LAST_POSITION);
		self::assertSniffError($report, 22, NullTypeHintOnLastPositionSniff::CODE_NULL_TYPE_HINT_NOT_ON_LAST_POSITION);
		self::assertSniffError($report, 27, NullTypeHintOnLastPositionSniff::CODE_NULL_TYPE_HINT_NOT_ON_LAST_POSITION);
		self::assertSniffError($report, 35, NullTypeHintOnLastPositionSniff::CODE_NULL_TYPE_HINT_NOT_ON_LAST_POSITION);
		self::assertSniffError($report, 43, NullTypeHintOnLastPositionSniff::CODE_NULL_TYPE_HINT_NOT_ON_LAST_POSITION);

		self::assertAllFixedInFile($report);
	}

}
