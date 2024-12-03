<?php

namespace Drupal\gsa_social_integration\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Provides a 'GSA Social Links Block' Block.
 *
 * @Block(
 *   id = "gsa_social_links_block",
 *   admin_label = @Translation("GSA Social Links Block"),
 *   category = @Translation("Custom")
 * )
 */
class GSASocialLinksBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];

    $links = [
      [
        'path' => 'https://www.facebook.com/gsa',
        'classes' => ['usa-social-link', 'usa-social-link--facebook', 'usa-tooltip__trigger'],
        'title' => $this->t('Facebook'),
      ],
      [
        'path' => 'https://twitter.com/usgsa',
        'classes' => ['usa-social-link', 'usa-social-link--twitter', 'usa-tooltip__trigger'],
        'title' => $this->t('Twitter')
      ],
      [
        'path' => 'https://www.linkedin.com/company/gsa',
        'classes' => ['usa-social-link', 'usa-social-link--linkedin', 'usa-tooltip__trigger'],
        'title' => $this->t('LinkedIn'),
      ],
      [
        'path' => 'https://www.instagram.com/usgsa',
        'classes' => ['usa-social-link', 'usa-social-link--instagram', 'usa-tooltip__trigger'],
        'title' => $this->t('Instagram'),
      ],
      [
        'path' => 'https://www.youtube.com/usgsa',
        'classes' => ['usa-social-link', 'usa-social-link--youtube', 'usa-tooltip__trigger'],
        'title' => $this->t('YouTube'),
      ],
      [
        'path' => 'https://public.govdelivery.com/accounts/USGSA/subscriber/new',
        'classes' => ['usa-social-link', 'usa-social-link--email', 'usa-tooltip__trigger'],
        'title' => $this->t('Email'),
      ],
    ];

    $linkArray = [];
    foreach ($links as $link) {
      // Include a span with the class "usa-sr-only" around the title
      $linkText = $this->t('<span class="usa-sr-only">@title</span>', ['@title' => $link['title']]);
      $dlink = Link::fromTextAndUrl($linkText, Url::fromUri($link['path']));
      $dlink = $dlink->toRenderable();
      $dlink['#attributes'] = [
        'class' => $link['classes'],
        'target' => '_blank',
        'title' => $link['title'],
        'aria-label' => $link['title'],
      ];
      $linkArray[] = $dlink;
    }

    $build['stay_connected_links'] = [
      '#type' => 'container',
      '#attributes' => [
        'class' => [
          'gsa-stay-connected-container',
        ],
      ],
      '#children' => [
        [

        ],
        [
          '#theme' => 'item_list',
          '#list_type' => 'ul',
          '#items' => $linkArray,
          '#attributes' => [
            'class' => ['gsa-stay-connected-list'],
          ],
        ],
      ],
    ];

    return $build;
  }
  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return 0;  // Ensures that the block does not get cached.
  }
}
