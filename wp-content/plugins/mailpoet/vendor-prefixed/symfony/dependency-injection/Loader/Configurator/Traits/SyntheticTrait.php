<?php
 namespace MailPoetVendor\Symfony\Component\DependencyInjection\Loader\Configurator\Traits; if (!defined('ABSPATH')) exit; trait SyntheticTrait { public final function synthetic(bool $synthetic = \true) : self { $this->definition->setSynthetic($synthetic); return $this; } } 