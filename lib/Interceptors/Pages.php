<?php

namespace Kirby\Kql\Interceptors;

class Pages extends Collection
{

    const CLASS_ALIAS = 'pages';

    public function allowedMethods(): array
    {
        return array_merge(
            parent::allowedMethods(),
            [
                'audio',
                'children',
                'code',
                'documents',
                'drafts',
                'files',
                'findByUri',
                'images',
                'index',
                'listed',
                'notTemplate',
                'nums',
                'published',
                'search',
                'template',
                'unlisted',
                'videos',
            ]
        );
    }

}
