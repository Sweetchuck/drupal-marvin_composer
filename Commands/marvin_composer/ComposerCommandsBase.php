<?php

declare(strict_types = 1);

namespace Drush\Commands\marvin_composer;

use Drush\Commands\marvin\CommandsBase;
use Robo\Contract\TaskInterface;

class ComposerCommandsBase extends CommandsBase {

  protected static string $classKeyPrefix = 'marvin.composer';

  protected string $customEventNamePrefix = 'marvin:composer';

  /**
   * @return \Robo\Collection\CollectionBuilder|\Robo\Task\Composer\Validate
   */
  protected function getTaskComposerValidate(string $packagePath): TaskInterface {
    // @todo Relative or absolute path to the composer executable.
    return $this
      ->taskComposerValidate($this->getComposerExecutable())
      ->args(['./composer.json'])
      ->dir($packagePath);
  }

  protected function getComposerExecutable(): string {
    return $this
      ->getConfig()
      ->get('marvin.composerExecutable', 'composer');
  }

}
