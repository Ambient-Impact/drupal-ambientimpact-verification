<?php

declare(strict_types=1);

namespace Drupal\ambientimpact_verification\Hooks;

use Drupal\hux\Attribute\Hook;

/**
 * Page attachments hook implementations.
 */
class PageAttachments {

  #[Hook('page_attachments')]
  /**
   * Super basic Mastodon site verification.
   *
   * @see https://til.simonwillison.net/mastodon/verifying-github-on-mastodon
   *
   * @see \hook_page_attachments()
   */
  public function attach(array &$attachments): void {

    $attachments['#attached']['html_head_link'][] = [
      [
        'rel'   => 'me',
        'href'  => 'https://indieweb.social/@ambientimpact',
      ],
    ];

  }

}
