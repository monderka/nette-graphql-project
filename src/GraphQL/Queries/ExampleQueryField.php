<?php

namespace App\GraphQL\Queries;

use GraphQL\Type\Definition\Type;
use Portiny\GraphQL\Contract\Field\QueryFieldInterface;

final class ExampleQueryField implements QueryFieldInterface
{
    public function getName(): string
    {
        return 'example';
    }

    public function getDescription(): string
    {
        return 'Example query for integration test';
    }

    public function getType(): Type
    {
        return Type::string();
    }

    /**  @return array<string, array<string, mixed>> */
    public function getArgs(): array
    {
        return [
            'test' => ['type' => Type::string()]
        ];
    }

    /**
     * @param array<int|string, mixed> $root
     * @param array{ "test"?: string|null } $args
     * @param mixed $context
     * @return string
     */
    public function resolve(array $root, array $args, $context = null): string
    {
        // some logic for resolving query
        return 'resolved';
    }
}
