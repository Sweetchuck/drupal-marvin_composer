<?php

declare(strict_types = 1);

namespace Drush\Commands\marvin_composer;

use Drush\Attributes as CLI;
use Drush\Boot\DrupalBootLevels;
use Drush\Commands\marvin\CommandsBase;
use Robo\Collection\CollectionBuilder;

class ComposerScriptsCommands extends CommandsBase {

  protected static string $classKeyPrefix = 'marvin.composerScripts';

  protected string $customEventNamePrefix = 'marvin:composer-scripts';

  /**
   * Do something on Composer post-install-cmd event.
   *
   * @phpstan-param array{dev-mode: bool} $options
   */
  #[CLI\Command(name: 'marvin:composer:post-install-cmd')]
  #[CLI\Bootstrap(level: DrupalBootLevels::NONE)]
  #[CLI\Help(
    hidden: TRUE,
  )]
  public function cmdMarvinComposerPostInstallCmdExecute(
    array $options = [
      'dev-mode' => FALSE,
    ],
  ): CollectionBuilder {
    return $this->delegate('post-install-cmd', getcwd());
  }

  /**
   * Do something on Composer post-update-cmd event.
   *
   * @phpstan-param array{dev-mode: bool} $options
   */
  #[CLI\Command(name: 'marvin:composer:post-update-cmd')]
  #[CLI\Bootstrap(level: DrupalBootLevels::NONE)]
  #[CLI\Help(
    hidden: TRUE,
  )]
  public function cmdMarvinComposerPostUpdateCmdExecute(
    array $options = [
      'dev-mode' => FALSE,
    ],
  ): CollectionBuilder {
    return $this->delegate('post-update-cmd', getcwd());
  }

}
