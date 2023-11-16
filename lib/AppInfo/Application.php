<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Christian Baer <donut87@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ImageRename\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'imagerename';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
