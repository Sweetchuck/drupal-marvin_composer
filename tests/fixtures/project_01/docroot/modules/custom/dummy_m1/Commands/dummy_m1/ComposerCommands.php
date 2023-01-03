<?php

declare(strict_types = 1);

namespace Drush\Commands\dummy_m1;

use Drush\Commands\marvin_composer\ComposerCommandsBase;
use Robo\Collection\CollectionBuilder;

class ComposerCommands extends ComposerCommandsBase {

  /**
   * @command marvin:lint:composer-validate
   *
   * @return \Robo\Collection\CollectionBuilder|\Robo\Task\Composer\Validate
   */
  public function cmdComposerValidateExecute(string $packagePath): CollectionBuilder {
    return $this->getTaskComposerValidate($packagePath);
  }

}
