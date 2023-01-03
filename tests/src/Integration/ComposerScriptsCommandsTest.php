<?php

declare(strict_types = 1);

namespace Drupal\Tests\marvin_composer\Integration;

/**
 * @group marvin
 * @group marvin_composer
 * @group drush-command
 *
 * @covers \Drush\Commands\marvin_composer\ComposerScriptsCommands
 */
class ComposerScriptsCommandsTest extends UnishIntegrationTestCase {

  public function testMarvinComposerPostInstallCmd(): void {
    $this->drush(
      'marvin:composer:post-install-cmd',
      [],
      $this->getCommonCommandLineOptions()
    );

    $actualStdOutput = $this->getOutput();
    $actualStdError = $this->getErrorOutput();

    static::assertSame(
      '[notice] there are no tasks for event: marvin:composer-scripts:post-install-cmd',
      $actualStdError,
      'StdError',
    );

    static::assertSame(
      '',
      $actualStdOutput,
      'StdOutput',
    );
  }

  public function testMarvinComposerPostUpdateCmd(): void {
    $this->drush(
      'marvin:composer:post-update-cmd',
      [],
      $this->getCommonCommandLineOptions()
    );

    $actualStdOutput = $this->getOutput();
    $actualStdError = $this->getErrorOutput();

    static::assertSame(
      '[notice] there are no tasks for event: marvin:composer-scripts:post-update-cmd',
      $actualStdError,
      'StdError',
    );

    static::assertSame(
      '',
      $actualStdOutput,
      'StdOutput',
    );
  }

}
