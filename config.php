<?php

return [
    Example\IPersonService::class => DI\get(Example\PersonService::class),
    Example\Db\IPersonDB::class => DI\get(Example\Db\PersonDB::class)
];