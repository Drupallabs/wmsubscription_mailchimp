<?php

namespace Drupal\wmsubscription_mailchimp\ListBuilder;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

class AudienceListBuilder extends ConfigEntityListBuilder
{
    public function buildHeader(): array
    {
        $header = [];
        $header['label'] = $this->t('Audience');
        $header['id'] = $this->t('Machine name');

        return $header + parent::buildHeader();
    }

    public function buildRow(EntityInterface $entity): array
    {
        $row = [];
        $row['label'] = $entity->label();
        $row['id'] = $entity->id();

        return $row + parent::buildRow($entity);
    }

}
