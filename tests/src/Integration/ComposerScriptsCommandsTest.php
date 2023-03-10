<?php

declare(strict_types = 1);

namespace Drupal\Tests\marvin_composer\Integration;

/**
 * @group marvin
 * @group drush-command
 *
 * @covers \Drush\Commands\marvin_composer\ComposerScriptsCommands<extended>
 * @covers \Drupal\marvin\CommandDelegatorTrait
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

    static::assertSame('', $actualStdError, 'StdError');
    static::assertSame('ComposerScriptsSubscriberCommands::onEventMarvinComposerScriptsPostInstallCmd called', $actualStdOutput, 'StdOutput');
  }

  public function testMarvinComposerPostUpdateCmd(): void {
    $this->drush(
      'marvin:composer:post-update-cmd',
      [],
      $this->getCommonCommandLineOptions()
    );

    $actualStdOutput = $this->getOutput();
    $actualStdError = $this->getErrorOutput();

    static::assertSame('', $actualStdError, 'StdError');
    static::assertSame('ComposerScriptsSubscriberCommands::onEventMarvinComposerScriptsPostUpdateCmd called', $actualStdOutput, 'StdOutput');
  }

}
