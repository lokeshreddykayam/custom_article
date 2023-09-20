<?php

namespace Drupal\custom_article_creator\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

class ArticleCreationController extends ControllerBase {

  public function createArticle() {
    // Create a new article node.
    $node = Node::create([
      'type' => 'article',
      'title' => 'New Article',
      'body' => [
        'value' => 'This is the body of the new article.',
        'format' => 'basic_html',
      ],
    ]);
    $node->save();

    // Return a response.
    return [
      '#markup' => $this->t('Article created successfully.'),
    ];
  }
}
