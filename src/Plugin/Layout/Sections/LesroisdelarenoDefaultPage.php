<?php

namespace Drupal\lesroisrenders\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "lesroisrenders_lt_default_page",
 *   label = @Translation(" Hero modele LGB. GOOD "),
 *   category = @Translation("Formatage Models"),
 *   path = "layouts/sections",
 *   template = "lesroisrenders-lt-default-page",
 *   library = "lesroisrenders/lesroisrenders-default-page",
 *   default_region = "title",
 *   regions = {
 *     "subtitle" = {
 *       "label" = @Translation(" Subtitle "),
 *     },
 *     "title" = {
 *       "label" = @Translation(" Title"),
 *     }
 *   }
 * )
 */
class LesroisdelarenoDefaultPage extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'formatage_models') . "/icones/sections/formatage-models-hero-lgb.png");
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
   */
  public function build(array $regions) {
    // TODO Auto-generated method stub
    $build = parent::build($regions);
    // FormatageModelsThemes::formatSettingValues($build);
    return $build;
  }
  
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'css' => '',
      'region_css_entete' => "col-md-6 ml-auto",
      'region_css_entete2' => "col-md-6",
      'region_tag_title' => 'h1',
      'region_tag_subtitle' => 'h4'
    ];
  }
  
}
