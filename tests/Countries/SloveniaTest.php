<?php

namespace Spatie\Holidays\Tests\Countries;

use Carbon\CarbonImmutable;
use Spatie\Holidays\Holidays;

it('can calculate slovenian holidays', function () {
	CarbonImmutable::setTestNowAndTimezone('2024-01-01');

	$holidays = Holidays::for(country: 'si')->get();

	expect($holidays)
		->toBeArray()
		->not()->toBeEmpty();

	expect(formatDates($holidays))->toMatchSnapshot();
});
